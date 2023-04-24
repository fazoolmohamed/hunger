git clone git@github.com:gothinkster/laravel-realworld-example-app.git

cd laravel-realworld-example-app

composer install

cp .env.example .env

php artisan key:generate

php artisan migrate

php artisan serve
