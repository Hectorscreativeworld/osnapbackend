Commands: make sure you are in laravel project
0.) To Turn on our server locally.
`php artisan serve`

1. To create a table in our SQL data base from a migration
   `php artisan migrate`

2. To create a migration file
   `php artisan make:migration create_nameoftable_table`

3. General rule of thumbs is for each tables in our data base. We have a model file for each of them.
   To create a model file. Tablename EX: if its weeks the it should be EX: Weeks
   `php artisan make:model Tablename`

4. To Create a controller "Brain of application".
   `php artisan make:controller TableNameController`
