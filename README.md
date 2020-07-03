# Web Produk Kecantikan
## Env
Set env untuk database

## Perintah sebelum run aplikasi
Buka terminal dan jalankan perintah dibawah secara berurutan
```sh
$ composer install
$ php artisan migrate
$ php artisan key:generate
$ php artisan db:seed
$ php artisan db:seed --class=UsersTableSeeder
$ php artisan db:seed --class=ProdukSeeder
```

## Frontend
Perintah untuk akses user. url untuk di akses
```sh
http://localhost:8000
```

## Backend
Perintah untuk akses admin.
### url
```sh
http://localhost:8000/login
```
### account
```sh
email: test@gmail.com
pass : secret
```