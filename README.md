# Instructions

- download the `vendor`-directory and update autoloader with `composer install`
- create a database and schema in MySQL
    - you can run 1 sql command as root : `mysql -u root -p -e "show databases"`
    - can be handier to get interactive mysql prompt : `mysql -u root -p`
    - copy/paste this code to create a user `imma` with password `immapwd`, database-schema `larablog` and give all permissions

```
CREATE USER 'imma'@'localhost' IDENTIFIED BY 'immapwd';
CREATE DATABASE larablog;
GRANT ALL ON larablog.* TO 'imma'@'localhost';
FLUSH PRIVILEGES;`
```
- want to delete the schema?
    - `DROP DATABASE larablog`
- copy `.env.example` to `.env` and edit the database-credentials
- run `php artisan key:generate` to generate a new application key in the `.env`-file
- run `php migrate:refresh --seed` to create and populate tables
- run `php artisan serve`
    - visit http://localhost:8000/users
    - visit http://localhost:8000/users/1
    - visit http://localhost:8000/messages
    - visit http://localhost:8000/messages/1

# Using faker

## Directly

With `tinker` you can directly use Faker.

```
$f = Faker\Factory::create()
$f->name()
$f->text()
$f->date()
```

See https://github.com/fzaninotto/Faker for more examples.

## With Laravel's Model Factories

The model factories are defined in `database/factories/ModelFactory.php`.

Check out the model factories for `App\User` and `App\Message`.

Try this in `tinker`:

```
factory(App\User::class)->make()
factory(App\Message::class, 3)->make()
```

Also check https://laravel.com/docs/5.4/database-testing#using-factories
