# RESTFUL API BACHELORPROEF QUINTEN LEYSEN

## Installeer laravel 
$ composer global require laravel/installer

## Pas de .env file naar de correcte database

## Run de migrations en vervolgens de database seeden
$ php artisan migrate:refresh --seed of $ php artisan migrate:fresh –seed

## Eens deze stappen zijn doorlopen kunnen we de API aan zetten
$ php artisan serve

## Nu zou de api te bereiken moeten zijn op de localhost url.
Bv. http://127.0.0.1:8000/api/restaurants/all

