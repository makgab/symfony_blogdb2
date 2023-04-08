# Symfony Blog DB app v2



## Sample apps and docs:

 - https://symfony.com
 - https://symfony.com/doc/
 - https://symfony.com/doc/current/doctrine.html
 - https://symfony.com/doc/current/setup.html
 - https://symfony.com/doc/current/forms.html




## Database

 - Table: blog

   - Fields: id, post, date, categoryid (foreign key)

 - Table: category

   - Fields: id, category, description



## Commands:

 - Existing project: composer install
 - New project: symfony new symfony_database --full
 - php bin/console about
 - composer require symfony/orm-pack
 - composer require symfony/form
 - composer require --dev symfony/maker-bundle
 - php bin/console doctrine:database:create
 - php bin/console make:entity
 - php bin/console make:migration
 - php bin/console doctrine:migrations:migrate
 - php bin/console make:controller ProductController
 - php bin/console dbal:run-sql 'SELECT * FROM blog'
 - php bin/console debug:router
 - Run server:
   - symfony server:start
   - http://127.0.0.1:8000

