Installation:
First clone this repository, install the dependencies, and setup your .env file.

git clone git@github.com:aleksandra-ovuka/laravel-blog-project.git 

Then create the necessary database.

php artisan db
create database laravel-blog-project
And run the initial migrations and seeders.

php artisan migrate --seed
