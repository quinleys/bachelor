<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\UserSocial;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{


    public function login (Request $request){
        $login = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        if(!Auth::attempt($login)){
            return response (['message' => 'Invalid login credentials.']);
        }

        $accessToken = Auth::user()->createToken('authToken')->accessToken;
        $id = Auth::user()->id;
        
        $user = User::findOrFail($id);
        return response(['user' => $user, 'access_token' => $accessToken]);
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|unique:users|email',
            'name' => 'required|string',
            'password' => 'required|confirmed',
        ]); 

        $user = User::create($validatedData);
        
        if(!Auth::attempt($validatedData)){
            return response (['message' => 'Invalid login credentials.']);
        }

        $accessToken = $user->createToken('authToken')->accessToken;

        Mail::to($user->email)->send(new WelcomeMail($user));

        return response(['user' => $user, 'access_token' => $accessToken]);
    }

    public function redirect($service)
    {
        
        return Socialite::driver($service)->stateless()->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function callback($service)
    {
        try {
            $serviceUser = Socialite::driver($service)->stateless()->user();
        }catch (\Exception $e){
            return ('invalid credentials');
        };

        $email = $serviceUser->getEmail();
        $user = $this->getExistingUser($serviceUser, $email, $service);

        if(!$user){
            $user = User::create([
                'name' => $serviceUser->getName(),
                'email' => $email,
                'password' => ''
            ]);
           Mail::to($user->email)->send(new WelcomeMail($user)); 
           
        }
        if($this->needsToCreateSocial($user, $service)){
            UserSocial::create([
                'user_id' => $user->id,
                'service' => $service,
                'social_id' => $serviceUser->getId(),
                
            ]);
        };
        
        Auth::loginUsingId($user->id);

        $accessToken = Auth::user()->createToken('authToken')->accessToken;
        
       /*  return ['user' => $user ];  */
       /* */
        return redirect ('/google/callback' . '?token=' . $accessToken . '&id=' . $user->id . '&email='. $user->email);
       /*  return response(['user' => $user, 'access_token' => $accessToken]); */
        /* return response($user) */
        // $user->token;
    }

    public function getExistingUser($serviceUser, $email, $service){
        return User::where('email', $email)->with('Restaurant')->orWhereHas('social', function($q) use($serviceUser, $service){
            $q->where('social_id', $serviceUser->getId())->where('service',$service);
        })->first();
    }

        
    public function needsToCreateSocial($user, $service)
    {
        return !$user->hasSocialLinked($service);
    }
}
