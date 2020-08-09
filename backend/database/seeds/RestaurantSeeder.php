<?php

use Illuminate\Database\Seeder;
use Spatie\OpeningHours\OpeningHours;
use Faker\Generator as Faker;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            'title' => "The Fantasy Window",
            'description' =>"From the outside it looks delightful, welcoming and enchanting. Stacked boulders and tree trunks make up most of the building's outer structure.
            It's tough to see through the large, stained glass windows, but the noise from within can be felt outside.
            
            As you enter the tavern through the old, hardwooden door, you're welcomed by a feeling of comfort and dancing people.
            The bartender is busy, but still manages to welcome you with a smile.
            
            It's as engaging inside as it is on the outside. Tree logs support the upper floor and the lanterns attached to them. The walls are loaded with hundreds of memorabilia, all signed and most likely donated by customers..
            
            The tavern itself is packed. Groups belonging to some kind of organization, whether sport, music or other you're not sure of, seem to be the primary clientele here, which often indicates great food. Several long tables are occupied by happy, excited groups of people, some are dancing on the table, while others cheer them on with clapping and yelling. The other, smaller tables are also occupied by people who are singing and dancing, occassionaly pulling an unsuspecting waitress amidst their dancing group. Even most of the stools at the bar are occupied, though nobody seems to mind more company.
            
            You did hear rumors about this tavern, supposedly it's famous for something, but you can't remember what for. Though judging by the amount of men staring at one of the waitresses, it's probably her beauty and charm. You manage to find a seat and prepare for what will undoubtedbly be a great evening.",
            'address' => "28 Fawcett Way, South Shields",
            'category_Id' => 1,
            'openinghours' => '[{"friday": ["09:00-12:00", "13:00-18:00"], "monday": [], "sunday": [], "tuesday": ["09:00-12:00", "13:00-19:00"], "saturday": ["09:00-12:00", "13:00-18:00"], "thursday": [], "wednesday": ["09:00-12:00", "13:00-18:00"]}]',
            'primary_img' => '1.jpg',
            'images' => '[{"src" :"1.jpg"},{"src" :"2.jpg"},{"src" :"3.jpg"}]',
            'menus' => '[{"src" :"1.jpg"}]',
            'telephone' => "043123234",
            'contactemail' => 'TheFantasyWindow@gmail.com',
            'website' => 'www.TheFantasyWindo.be',
            'price_id' => 1,
            'user_id' => 1,
        ]);
        DB::table('restaurants')->insert([
            'title' => "Intermission",
            'description' => "From the outside it looks rustic, intimate and welcoming. Plastered walls and hardwooden tree trunks make up most of the building's outer structure.
            It's tough to see through the darkened windows, but the entertainment from within can be felt outside.
            
            As you enter the tavern through the decorated, wooden door, you're welcomed by overall happiness and clapping hands.
            The bartender is buried in orders, but still manages to welcome you with a short wave.
            
            It's as alluring inside as it is on the outside. Rounded, stone beams support the upper floor and the large candles attached to them. The walls are littered with all sorts of memorabilia, though whether they're collected or donated is uncertain..
            
            The tavern itself is packed. Groups belonging to some kind of organization, whether sport, music or other you're not sure of, seem to be the primary clientele here, which is often a good sign. Several long tables are occupied by, what seems to be entire families, all enjoying the food, drinks and company of each other. The other, smaller tables are also occupied by people who clearly enjoy each other's company, though they seem to be strangers who have met here. Even most of the stools at the bar are occupied, though nobody seems to mind more company.
            
            You did hear rumors about this tavern, supposedly it's famous for something, but you can't remember what for. Though judging by the warmth and joy radiating throught the tavern, it's probably the atmosphere that makes this tavern famous. You manage to find a seat and prepare for what will undoubtedbly be a great evening.",
            'address' => "13 Downs Wood, Epsom",
            'category_Id' => 2,
            'openinghours' => '[{"friday": ["09:00-12:00", "13:00-18:00"], "monday": [], "sunday": [], "tuesday": ["09:00-12:00", "13:00-19:00"], "saturday": ["09:00-12:00", "13:00-18:00"], "thursday": [], "wednesday": ["09:00-12:00", "13:00-18:00"]}]',
            'primary_img' => '2.jpg',
            'images' => '[{"src" :"4.jpg"},{"src" :"5.jpg"},{"src" :"6.jpg"}]',
            'menus' => '[{"src" :"2.jpg"}]',
            'telephone' => "043123234",
            'contactemail' => 'Intermission@gmail.com',
            'website' => 'www.Intermission.be',
            'price_id' => 3,

        ]);
        DB::table('restaurants')->insert([
            'title' => "Trilogy",
            'description' => "From the outside it looks cozy, delightful and humble. Stacked boulders and marble details make up most of the building's outer structure.
            It's difficult to see through the large, stained glass windows, but the clinking of beer glasses from within can be felt outside.
            
            As you enter the tavern through the old, metal door, you're welcomed by clapping hands and joyful music.
            The bartender is swamped in work, but still manages to welcome you with a wink.
            
            It's as engaging inside as it is on the outside. Sqaured, stone beams support the upper floor and the rows of small lights attached to them. The walls are full of paintings, all in a different style, but all of the surrounding area..
            
            The tavern itself is packed. Tourists seem to be the primary clientele here, which could be seen as a bad sign, though you're sure it's not. Several long tables are occupied by, what looks like couples, lone travellers and anybody else who enjoys great company. The other, smaller tables are also occupied by people who clearly enjoy each other's company, though they seem to be strangers who have met here. Even most of the stools at the bar are occupied, though nobody seems to mind more company.
            
            You did hear rumors about this tavern, supposedly it's famous for something, but you can't remember what for. Though judging by the warmth and joy radiating throught the tavern, it's probably the atmosphere that makes this tavern famous. You manage to find a seat and prepare for what will undoubtedbly be a great evening.",
            'address' =>"Flat A, 4 Eldon Grove, Hull",
            'category_Id' => 3,
            'openinghours' => '[{"friday": ["09:00-12:00", "13:00-18:00"], "monday": [], "sunday": [], "tuesday": ["09:00-12:00", "13:00-19:00"], "saturday": ["09:00-12:00", "13:00-18:00"], "thursday": [], "wednesday": ["09:00-12:00", "13:00-18:00"]}]',
            'primary_img' => '3.jpg',
            'images' => '[{"src" :"7.jpg"},{"src" :"8.jpg"}]',
            'menus' => '[{"src" :"3.jpg"}]',
            'telephone' => "043123234",
            'contactemail' => 'Trilogy@gmail.com',
            'website' => 'www.Trilogy.be',
            'price_id' => 1,
            
        ]);
        DB::table('restaurants')->insert([
            'title' => "The Cave",
            'description' => "From the outside it looks unwelcoming, depressing and dire. Small stones and hardwooden beams make up most of the building's outer structure.
            It's difficult to see through the stained glass windows, but the apathy from within can be felt outside.
            
            As you enter the tavern through the old, metal door, you're welcomed by a horrific scent and the sound of the wind outside.
            The bartender is smoking tobacco and makes no effort to acknowledge your pressence.
            
            It's as somber inside as it is on the outside. Sqaured, stone beams support the upper floor and the broken fans attached to them. The walls are decorated with sport's memorabilia, though it looks like it hasn't been maintained or cleaned for years.
            
            The tavern itself is almost completely abanonded. The few people inside could be locals, could be lost souls, but whoever they are, you hope they'll leave you alone, just like you're leaving them alone.
            
            You did hear rumors about this tavern, supposedly it's infamous for something, but for the life of you you can't remember what for. Though juding by the things and people you've seen, you're not waiting to find out.",
            'address' => "35 Moor Pond Close, Bicester",
            'category_Id' => 4,
            'openinghours' => '[{"friday": ["09:00-12:00", "13:00-18:00"], "monday": [], "sunday": [], "tuesday": ["09:00-12:00", "13:00-19:00"], "saturday": ["09:00-12:00", "13:00-18:00"], "thursday": [], "wednesday": ["09:00-12:00", "13:00-18:00"]}]',
            'primary_img' => '4.jpg',
            'images' => '[{"src" :"9.jpg"}]',
            'menus' => '[{"src" :"4.jpg"}]',
            'telephone' => "043123234",
            'contactemail' => 'TheCave@gmail.com',
            'website' => 'www.TheCave.be',
            'price_id' => 1,

        ]);
        DB::table('restaurants')->insert([
            'title' => "The Summer Heart",
            'description' => "From the outside it looks folksy, snug and delightful. Bricks and hardwooden tree trunks make up most of the building's outer structure.
            It's tough to see through the stained glass windows, but the laughter and cheering from within can be felt outside.
            
            As you enter the tavern through the old, wooden door, you're welcomed by the smell of alcohol and overall happiness.
            The bartender is handling some customers, but still manages to welcome you with a smile.
            
            It's as lovely inside as it is on the outside. Stone beams support the upper floor and the lanterns attached to them. The walls are packed with all sorts of travel memorabilia, most likely all collected by the owner..
            
            The tavern itself is packed. Travelers seem to be the primary clientele here, which could be seen as a bad sign, though you're sure it's not. Several long tables are occupied by locals, travellers, foreigners and anybody else who wishes to join. The other, smaller tables are also occupied by people who are probably starting to reach the point of having drunk too much, though nobody seems to mind. Even most of the stools at the bar are occupied, though nobody seems to mind more company.
            
            You did hear rumors about this tavern, supposedly it's famous for something, but you can't remember what for. Though judging by the amount of men staring at one of the waitresses, it's probably her beauty and charm. You manage to find a seat and prepare for what will undoubtedbly be a great evening.",
            'address' => "Woodville Cottage, Coppice Hill, Chalford",
            'category_Id' => 5,
            'openinghours' => '[{"friday": ["09:00-12:00", "13:00-18:00"], "monday": [], "sunday": [], "tuesday": ["09:00-12:00", "13:00-19:00"], "saturday": ["09:00-12:00", "13:00-18:00"], "thursday": [], "wednesday": ["09:00-12:00", "13:00-18:00"]}]',
            'primary_img' => '5.jpg',
            'images' => '[{"src" :"10.jpg"},{"src" :"11.jpg"}]',
            'menus' => '[{"src" :"5.jpg"}]',
            'telephone' => "043123234",
            'contactemail' => 'TheSummerHeart@gmail.com',
            'website' => 'www.The Summer Heart.be',
            'price_id' => 2,
            

        ]);
        DB::table('restaurants')->insert([
            'title' => "The Italian God",
            'description' => "From the outside it looks cozy, beautiful and humble. Softwooden planks and stone beams make up most of the building's outer structure.
            It's impossible to see through the large, curtained windows, but the entertainment from within can be felt outside.
            
            As you enter the tavern through the huge, hardwooden door, you're welcomed by aromas of roasted meats and laughing voices.
            The bartender is swamped in work, but still manages to welcome you with a friendly nod.
            
            It's as enchanting inside as it is on the outside. Squared, wooden beams support the upper floor and the fans attached to them. The walls are littered with so many different memorabilia, you're not sure if they tried going for a specific style at one time or just put up anything they like..
            
            The tavern itself is packed. Soldiers seem to be the primary clientele here, which often means great company. Several long tables are occupied by happy, excited groups of people, some are dancing on the table, while others cheer them on with clapping and yelling. The other, smaller tables are also occupied by people who are probably starting to reach the point of having drunk too much, though nobody seems to mind. Even most of the stools at the bar are occupied, though nobody seems to mind more company.
            
            You did hear rumors about this tavern, supposedly it's famous for something, but you can't remember what for. Though judging by the amount of men staring at one of the waitresses, it's probably her beauty and charm. You manage to find a seat and prepare for what will undoubtedbly be a great evening.",
            'address' => "8 Hatherleigh Court, Swindon",
            'category_Id' => 6,
            'openinghours' => '[{"friday": ["09:00-12:00", "13:00-18:00"], "monday": [], "sunday": [], "tuesday": ["09:00-12:00", "13:00-19:00"], "saturday": ["09:00-12:00", "13:00-18:00"], "thursday": [], "wednesday": ["09:00-12:00", "13:00-18:00"]}]',
            'primary_img' => '6.jpg',
            'images' => '[{"src" :"12.jpg"},{"src" :"13.jpg"}]',
            'menus' => '[{"src" :"6.jpg"}]',
            'telephone' => "043123234",
            'contactemail' => 'TheItalianGod@gmail.com',
            'website' => 'www.TheItalianGod.be',
            'price_id' => 2,
            

        ]);
        DB::table('restaurants')->insert([
            'title' => "Paragon",
            'description' => "From the outside it looks snug, folksy and clean. Stacked boulders and hardwooden tree trunks make up most of the building's outer structure.
            It's hard to see through the closed windows, but the laughter and cheering from within can be felt outside.
            
            As you enter the tavern through the huge, hardwooden door, you're welcomed by amazing, but unknown scents and overall happiness.
            The bartender is quite busy, but still manages to welcome you with a friendly nod.
            
            It's as charming inside as it is on the outside. Squared, wooden beams support the upper floor and the fans attached to them. The walls are full of paintings, judging by the style they're all done by 1 person, perhaps the owner..
            
            The tavern itself is packed. Passing traders seem to be the primary clientele here, which is probably the best clientele for the owner. Several long tables are occupied by, what seems to be the entire surrounding village. The other, smaller tables are also occupied by people who seem to be enjoying themselves a lot, perhaps too much, if such a thing is possible. Even most of the stools at the bar are occupied, though nobody seems to mind more company.
            
            You did hear rumors about this tavern, supposedly it's famous for something, but you can't remember what for. Though judging by the amount of cups, tankards and glasses on the table, it's probably the fine alcoholic drinks. You manage to find a seat and prepare for what will undoubtedbly be a great evening.",
            'address' => "Woodville Cottage, Coppice Hill, Chalford",
            'category_Id' => 2,
            'openinghours' => '[{"friday": ["09:00-12:00", "13:00-18:00"], "monday": [], "sunday": [], "tuesday": ["09:00-12:00", "13:00-19:00"], "saturday": ["09:00-12:00", "13:00-18:00"], "thursday": [], "wednesday": ["09:00-12:00", "13:00-18:00"]}]',
            'primary_img' => '7.jpg',
            'images' => '[{"src" :"14.jpg"},{"src" :"15.jpg"}]',
            'menus' => '[{"src" :"7.jpg"}]',
            'telephone' => "043123234",
            'contactemail' => 'Paragon@gmail.com',
            'website' => 'www.Paragon.be',
            'price_id' => 2,
            

        ]);
        DB::table('restaurants')->insert([
            'title' => "The Nifty Market",
            'description' => "From the outside it looks modest, inviting and homey. Stacked boulders and intricate wooden carvings make up most of the building's outer structure.
            It's hard to see through the large, curtained windows, but the cheerful sounds from within can be felt outside.
            
            As you enter the tavern through the old, hardwooden door, you're welcomed by amazing, but unknown scents and clapping hands.
            The bartender is buried in orders, but still manages to welcome you with a short wave.
            
            It's as engaging inside as it is on the outside. Several walls support the upper floor and the lanterns attached to them. The walls are decorated with sports memorabilia, it's clear the owner, and probably the customers, are avid fans..
            
            The tavern itself is packed. Tourists seem to be the primary clientele here, which is often a good sign. Several long tables are occupied by locals, travellers, foreigners and anybody else who wishes to join. The other, smaller tables are also occupied by people who clearly enjoy each other's company, though they seem to be strangers who have met here. Even most of the stools at the bar are occupied, though nobody seems to mind more company.
            
            You did hear rumors about this tavern, supposedly it's famous for something, but you can't remember what for. Though judging by the warmth and joy radiating throught the tavern, it's probably the atmosphere that makes this tavern famous. You manage to find a seat and prepare for what will undoubtedbly be a great evening.",
            'address' => "Woodville Cottage, Coppice Hill, Chalford",
            'category_Id' => 1,
            'openinghours' => '[{"friday": ["09:00-12:00", "13:00-18:00"], "monday": [], "sunday": [], "tuesday": ["09:00-12:00", "13:00-19:00"], "saturday": ["09:00-12:00", "13:00-18:00"], "thursday": [], "wednesday": ["09:00-12:00", "13:00-18:00"]}]',
            'primary_img' => '8.jpg',
            'images' => '[{"src" :"16.jpg"},{"src" :"17.jpg"}]',
            'menus' => '[{"src" :"8.jpg"}]',
            'telephone' => "043123234",
            'contactemail' => 'TheNiftyMarket@gmail.com',
            'website' => 'www.TheNiftyMarket.be',
            'price_id' => 3,
            

        ]);
        DB::table('restaurants')->insert([
            'title' => "le Cottage",
            'description' =>"From the outside it looks cheerful, warm and delightful. Large and small stones and hardwooden tree trunks make up most of the building's outer structure.
            It's tough to see through the large, curtained windows, but the passionate voices from within can be felt outside.
            
            As you enter the tavern through the old, metal door, you're welcomed by a sense of home and laughing voices.
            The bartender is engaged in a conversation, but still manages to welcome you with a wink.
            
            It's as engaging inside as it is on the outside. Sqaured, stone beams support the upper floor and the lights attached to them. The walls are loaded with hundreds of memorabilia, all signed and most likely donated by customers..
            
            The tavern itself is packed. Passing traders seem to be the primary clientele here, which could be seen as the best sign you can get. Several long tables are occupied by, what must be seperate groups who have bonded over great food and conversation. The other, smaller tables are also occupied by people who clearly enjoy each other's company, though they seem to be strangers who have met here. Even most of the stools at the bar are occupied, though nobody seems to mind more company.
            
            You did hear rumors about this tavern, supposedly it's famous for something, but you can't remember what for. Though judging by the laughter, cheering and overall enjoyment of everybody, it's probably the people themselves who make this tavern famous. You manage to find a seat and prepare for what will undoubtedbly be a great evening.",
            'address' => "3 Larkhill Road, Locking",
            'category_Id' => 3,
            'openinghours' => '[{"friday": ["09:00-12:00", "13:00-18:00"], "monday": [], "sunday": [], "tuesday": ["09:00-12:00", "13:00-19:00"], "saturday": ["09:00-12:00", "13:00-18:00"], "thursday": [], "wednesday": ["09:00-12:00", "13:00-18:00"]}]',
            'primary_img' => '9.jpg',
            'images' => '[{"src" :"18.jpg"},{"src" :"19.jpg"}]',
            'menus' => '[{"src" :"5.jpg"}]',
            'telephone' => "043123234",
            'contactemail' => 'leCottaget@gmail.com',
            'website' => 'www.leCottage.be',
            'price_id' => 2,
            

        ]);
        DB::table('restaurants')->insert([
            'title' => "la Sérénade",
            'description' => "From the outside it looks well maintained, delightful and clean. Large and small stones and marble stones make up most of the building's outer structure.
            It's difficult to see through the darkened windows, but the clinking of beer glasses from within can be felt outside.
            
            As you enter the tavern through the thick, wooden door, you're welcomed by excitement and amazing, but unknown scents.
            The bartender is buried in orders, but still manages to welcome you with a wink.
            
            It's as enchanting inside as it is on the outside. Stone beams support the upper floor and the fans attached to them. The walls are overflowing with signatures and written messages, undoubtedly from happy customers..
            
            The tavern itself is packed. Soldiers seem to be the primary clientele here, which is often a good sign. Several long tables are occupied by, what seems to be the entire surrounding village. The other, smaller tables are also occupied by people who seem to be enjoying themselves a lot, perhaps too much, if such a thing is possible. Even most of the stools at the bar are occupied, though nobody seems to mind more company.
            
            You did hear rumors about this tavern, supposedly it's famous for something, but you can't remember what for. Though judging by the angelic voice who just started singing, it must be famous for this singer. You manage to find a seat and prepare for what will undoubtedbly be a great evening.",
            'address' => "19 Reresby Road, Thrybergh",
            'category_Id' => 3,
            'openinghours' => '[{"friday": ["09:00-12:00", "13:00-18:00"], "monday": [], "sunday": [], "tuesday": ["09:00-12:00", "13:00-19:00"], "saturday": ["09:00-12:00", "13:00-18:00"], "thursday": [], "wednesday": ["09:00-12:00", "13:00-18:00"]}]',
            'primary_img' => '10.jpg',
            'images' => '[{"src" :"20.jpg"},{"src" :"21.jpg"}]',
            'menus' => '[{"src" :"5.jpg"}]',
            'telephone' => "043123234",
            'contactemail' => 'laSérénade@gmail.com',
            'website' => 'www.laSérénade.be',
            'price_id' => 2,
            

        ]);

        DB::table('restaurants')->insert([
            'title' => "Ivory",
            'description' => "From the outside it looks well maintained, snug and warm. Softwooden planks and hardwooden pillars make up most of the building's outer structure.
            It's difficult to see through the high windows, but the thrilled sounds from within can be felt outside.
            
            As you enter the tavern through the decorated, wooden door, you're welcomed by joyful music and laughing voices.
            The bartender is engaged in a conversation, but still manages to welcome you with a smile.
            
            It's as enchanting inside as it is on the outside. Several walls support the upper floor and the decorational lights attached to them. The walls are completely empty, besides the lighting, most likely because customers stumble against the walls too often and would knock off anything on the walls..
            
            The tavern itself is packed. Workers seem to be the primary clientele here, which could be seen as the best sign you can get. Several long tables are occupied by, what seems to be entire families, all enjoying the food, drinks and company of each other. The other, smaller tables are also occupied by people who are singing and dancing, occassionaly pulling an unsuspecting waitress amidst their dancing group. Even most of the stools at the bar are occupied, though nobody seems to mind more company.
            
            You did hear rumors about this tavern, supposedly it's famous for something, but you can't remember what for. Though judging by the music and how many people are dancing, it must be the live band who just started playing. You manage to find a seat and prepare for what will undoubtedbly be a great evening.",
            'address' => "42 Clarendon Road, London",
            'category_Id' => 5,
            'openinghours' => '[{"friday": ["09:00-12:00", "13:00-18:00"], "monday": [], "sunday": [], "tuesday": ["09:00-12:00", "13:00-19:00"], "saturday": ["09:00-12:00", "13:00-18:00"], "thursday": [], "wednesday": ["09:00-12:00", "13:00-18:00"]}]',
            'primary_img' => '11.jpg',
            'images' => '[{"src" :"23.jpg"}]',
            'menus' => '[{"src" :"7.jpg"}]',
            'telephone' => "043123234",
            'contactemail' => 'Ivory@gmail.com',
            'website' => 'www.Ivory.be',
            'price_id' => 3,
        ]);
        DB::table('restaurants')->insert([
            'title' => "The Jade Crown",
            'description' => "From the outside it looks depressing, dirty and cheerless. Stacked boulders and hardwooden beams make up most of the building's outer structure.
            It's impossible to see through the large, curtained windows, but the lethargy from within can be felt outside.
            
            As you enter the tavern through the dirty, wooden door, you're welcomed by a coldness and a horrific scent.
            The bartender is staring at nothing and makes no effort to acknowledge your pressence.
            
            It's as dire inside as it is on the outside. Wooden beams support the upper floor and the sconces attached to them. The walls are decorated, if you can call it that, with old paintings covered in dust.
            
            The tavern itself is almost completely abanonded. The few people inside could be anybody really, but whoever they are, they give you an uncomfortable feeling of dread.
            
            You did hear rumors about this tavern, supposedly it's infamous for something, but for the life of you you can't remember what for. Though juding by the figures lurking in the shadows, it's probably some dirty business.",
            'address' => "8 Tan Y Benar, Dolwyddelan",
            'category_Id' => 8,
            'openinghours' => '[{"friday": ["09:00-12:00", "13:00-18:00"], "monday": [], "sunday": [], "tuesday": ["09:00-12:00", "13:00-19:00"], "saturday": ["09:00-12:00", "13:00-18:00"], "thursday": [], "wednesday": ["09:00-12:00", "13:00-18:00"]}]',
            'primary_img' => '12.jpg',
            'images' => '[{"src" :"24.jpg"},{"src" :"25.jpg"},{"src" :"26.jpg"}]',
            'menus' => '[{"src" :"8.jpg"}]',
            'telephone' => "043123234",
            'contactemail' => 'TheJadeCrown@gmail.com',
            'website' => 'www.TheJadeCrown.be',
            'price_id' => 1,
        ]);
        DB::table('restaurants')->insert([
            'title' => "Roast",
            'description' => Str::random(10),
            'address' => "14 Raleigh Close, South Molton",
            'category_Id' => 7,
            'openinghours' => '[{"friday": ["09:00-12:00", "13:00-18:00"], "monday": [], "sunday": [], "tuesday": ["09:00-12:00", "13:00-19:00"], "saturday": ["09:00-12:00", "13:00-18:00"], "thursday": [], "wednesday": ["09:00-12:00", "13:00-18:00"]}]',
            'primary_img' => '13.jpg',
            'images' => '[{"src" :"27.jpg"}]',
            'menus' => '[{"src" :"9.jpg"}]',
            'telephone' => "043123234",
            'contactemail' => 'Roast@gmail.com',
            'website' => 'www.Roast.be',
            'price_id' => 2,
        ]);
        DB::table('restaurants')->insert([
            'title' => "Rogue",
            'description' => "From the outside it looks cozy, inviting and clean. Hardwooden planks and hardwooden pillars make up most of the building's outer structure.
            It's near impossible to see through the small, stained glass windows, but the warm noises from within can be felt outside.
            
            As you enter the tavern through the old, metal door, you're welcomed by a pleasant atmosphere and overall happiness.
            The bartender is working up a sweat, but still manages to welcome you with a wink.
            
            It's as engaging inside as it is on the outside. Stone beams support the upper floor and the sconces attached to them. The walls are packed with all sorts of travel memorabilia, most likely all collected by the owner..
            
            The tavern itself is packed. Locals seem to be the primary clientele here, which could be seen as a bad sign, though you're sure it's not. Several long tables are occupied by locals, travellers, foreigners and anybody else who wishes to join. The other, smaller tables are also occupied by people who clearly enjoy each other's company, though they seem to be strangers who have met here. Even most of the stools at the bar are occupied, though nobody seems to mind more company.
            
            You did hear rumors about this tavern, supposedly it's famous for something, but you can't remember what for. Though judging by the music and how many people are dancing, it must be the live band who just started playing. You manage to find a seat and prepare for what will undoubtedbly be a great evening.",
            'address' => "14 Raleigh Close, South Molton",
            'category_Id' => 4,
            'openinghours' => '[{"friday": ["09:00-12:00", "13:00-18:00"], "monday": [], "sunday": [], "tuesday": ["09:00-12:00", "13:00-19:00"], "saturday": ["09:00-12:00", "13:00-18:00"], "thursday": [], "wednesday": ["09:00-12:00", "13:00-18:00"]}]',
            'primary_img' => '14.jpg',
            'images' => '[{"src" :"28.jpg"}, {"src" :"29.jpg"}, {"src" :"30.jpg"}]',
            'menus' => '[{"src" :"10.jpg"}]',
            'telephone' => "043123234",
            'contactemail' => 'Rogue@gmail.com',
            'website' => 'www.Rogue.be',
            'price_id' => 3,
        ]);
        DB::table('restaurants')->insert([
            'title' => "Aurora",
            'description' =>"From the outside it looks dirty, nasty and dull. Large and small stones and softwooden tree trunks make up most of the building's outer structure.
            It's difficult to see through the large, stained glass windows, but the dire mood from within can be felt outside.
            
            As you enter the tavern through the thick, wooden door, you're welcomed by the rinkle of the doorbell and dirt and dust from all places.
            The bartender is coughing into a dirty napkin and makes no effort to acknowledge your pressence.
            
            It's as dreary inside as it is on the outside. Hardwooden beams support the upper floor and the broken fans attached to them. The walls are decorated with mounted animal heads and small animals, though most have become worn and broken, given the place an even creapier feel.
            
            The tavern itself is almost completely abanonded. The few people inside probably work less honorable operations, but whoever they are, it's about the clearest sign you can get, telling you you don't belong.
            
            You did hear rumors about this tavern, supposedly it's infamous for something, but for the life of you you can't remember what for. Though juding by everything in this place, it must be something horrifying.",
            'address' => "14 Raleigh Close, South Molton",
            'category_Id' => 11,
            'openinghours' => '[{"friday": ["09:00-12:00", "13:00-18:00"], "monday": [], "sunday": [], "tuesday": ["09:00-12:00", "13:00-19:00"], "saturday": ["09:00-12:00", "13:00-18:00"], "thursday": [], "wednesday": ["09:00-12:00", "13:00-18:00"]}]',
            'primary_img' => '15.jpg',
            'images' => '[{"src" :"31.jpg"}, {"src" :"32.jpg"}]',
            'menus' => '[{"src" :"16.jpg"}]',
            'telephone' => "043123234",
            'contactemail' => 'Aurora@gmail.com',
            'website' => 'www.Aurora.be',
            'price_id' => 3,
        ]);
    }
}
