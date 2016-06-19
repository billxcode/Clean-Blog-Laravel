# Clean-Blog-Laravel
Clean Blog Laravel is minimalis blog that built by laravel Framework, I create this minimalis blog cause i think many feature in blog that useless for me, and i think you too.  try it bro!

#Prequisite

- PHP5 console
- Mysql Server
- Composer

#How to use it

1 - clone this repository
2 - change property of .env file, mention at database configuration like this :

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<your database >
DB_USERNAME=<your user mysql >
DB_PASSWORD=<your password mysql (leave it blank if you dont have )>

3 - open terminal/cmd. type :

php artisan migrate

4 - launch server : 

php artisan serve

5 - open browser, goto : 

http://localhost:8000/

