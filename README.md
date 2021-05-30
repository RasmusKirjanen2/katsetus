php version >= 7.3

git clone https://github.com/RasmusKirjanen2/katsetus.git

cd katsetus

composer install

npm install

touch database/database.sqlite

touch .env

php artisan key:generate

php artisan migrate --seed

php artisan storage:link

php artisan serve

