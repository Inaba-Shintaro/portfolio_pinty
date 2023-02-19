git clone https://github.com/Inaba-Shintaro/docker-laravel-handson.git

docker-compose exec app bash

composer install

cp .env.example .env

php artisan key:generate

php artisan storage:link

php artisan migrate

exit