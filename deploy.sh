
php artisan down || true

composer update -o

mv .env.example .env

php artisan key:generate

php artisan migrate

php artisan cache:clear

php artisan route:clear