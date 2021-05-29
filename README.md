git clone https://github.com/Kasparsu/mm18cats.git

cd katsetus

composer install

npm install

change in .env DB_CONNECTION=sqlite DB_DATABASE=[full path to your database.sqlite file]

php artisan migrate --seed