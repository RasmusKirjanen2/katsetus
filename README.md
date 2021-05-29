git clone https://github.com/Kasparsu/mm18cats.git

cd katsetus

composer install

npm install


php artisan migrate --seed

php artisan serve