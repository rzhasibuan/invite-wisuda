# invitation wisuda with QRcode

cara nyoba jalanin aplikasinya buka terminal
```
git clone https://github.com/rzhasibuan/invite-wisuda.git
cp invite-wisuda
composer install 
cp .env.example .env

<!-- setting database pada .env -->
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=namadb
DB_USERNAME=root
DB_PASSWORD=root
<!-- end -->

<!-- setting smtp pada .env -->
MAIL_DRIVER=smtp
MAIL_HOST=smtp.googlemail.com
MAIL_PORT=465
MAIL_USERNAME=email
MAIL_PASSWORD=password
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS="email"
MAIL_FROM_NAME="nama aplikasi"
<!-- end -->

php artisan key:generate
php artisan migrate
nb : sebelum melakukan migration buat terlebih dahulu dbnya 
```
## License 
+ Copyright © 2020 Reza Afri Suhangga Hasibuan.
+ invitationWisuda is open-sourced software licensed under the MIT license.
+ Made with ❤️  by rzhasibuan.
+ invitationWisuda is open-sourced software licensed under the MIT license.