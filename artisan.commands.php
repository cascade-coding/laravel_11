// ! middleware
To create a new middleware, use the make:middleware Artisan command:
    php artisan make:middleware EnsureTokenIsValid

// ! controllers
To quickly generate a new controller, you may run the make:controller Artisan command:
    php artisan make:controller UserController
    php artisan make:controller PhotoController --resource

You may generate an invokable controller by using the --invokable option of the make:controller Artisan command:
    php artisan make:controller ProvisionServer --invokable

// ! views and components
You may create a view by placing a file with the .blade.php extension in your application's resources/views directory or by using the make:view Artisan command:
    php artisan make:view greeting


To create a class based component, you may use the make:component Artisan command:
    php artisan make:component Alert

// ! validation
To create a form request class, you may use the make:request Artisan CLI command:
    php artisan make:request StorePostRequest

To generate a new rule object, you may use the make:rule Artisan command. Let's use this command to generate a rule that verifies a string is uppercase. Laravel will place the new rule in the app/Rules directory. If this directory does not exist, Laravel will create it when you execute the Artisan command to create your rule:
    php artisan make:rule Uppercase

Laravel's built-in validation rules each have an error message that is located in your application's lang/en/validation.php file. If your application does not have a lang directory, you may instruct Laravel to create it using the lang:publish Artisan command.
    php artisan lang:publish

// ! pagination
the easiest way to customize the pagination views is by exporting them to your resources/views/vendor directory using the vendor:publish command:
    php artisan vendor:publish --tag=laravel-pagination


// ! errors
You may publish Laravel's default error page templates using the vendor:publish Artisan command. Once the templates have been published, you may customize them to your liking:
    php artisan vendor:publish --tag=laravel-errors


// ! migrations
You may use the make:migration Artisan command to generate a database migration. The new migration will be placed in your database/migrations directory. Each migration filename contains a timestamp that allows Laravel to determine the order of the migrations:
    php artisan make:migration create_flights_table


To run all of your outstanding migrations, execute the migrate Artisan command:
    php artisan migrate


If you would like to see which migrations have run thus far, you may use the migrate:status Artisan command:
    php artisan migrate:status


If you would like to see the SQL statements that will be executed by the migrations without actually running them, you may provide the --pretend flag to the migrate command:
    php artisan migrate --pretend


To roll back the latest migration operation, you may use the rollback Artisan command. This command rolls back the last "batch" of migrations, which may include multiple migration files:
    php artisan migrate:rollback


You may roll back a limited number of migrations by providing the step option to the rollback command. For example, the following command will roll back the last five migrations:
    php artisan migrate:rollback --step=5


The migrate:reset command will roll back all of your application's migrations:
    php artisan migrate:reset


The migrate:refresh command will roll back all of your migrations and then execute the migrate command. This command effectively re-creates your entire database:
    php artisan migrate:refresh
    php artisan migrate:refresh --step=4

    // * Refresh the database and run all database seeds...
    php artisan migrate:refresh --seed


The migrate:fresh command will drop all tables from the database and then execute the migrate command:
    php artisan migrate:fresh
    php artisan migrate:fresh --seed

    // * The migrate:fresh command will drop all database tables regardless of their prefix. This command should be used with caution when developing on a database that is shared with other applications.


// ! to add a column to an existing table
php artisan make:migration add_reviews_to_products --table=products

// ! to drop a column to an existing table
php artisan make:migration dropping_reviews_from_products --table=products

// ! to modify a column attributes
php artisan make:migration change_age --table=workers

// ! to rename a column name
php artisan make:migration rename_rating_to_popularity --table=workers

// ! to create an index for a column
php artisan make:migration email_unique_index

// ! to drop an index for a column
php artisan make:migration drop_email_index --table=table_name

// ! to add a foreign key constraint for a column
php artisan make:migration add_foreign_key_posts_author --table=posts


// ! To generate a seeder, execute the make:seeder Artisan command. All seeders generated by the framework will be placed in the database/seeders directory:
    php artisan make:seeder UserSeeder

// ! You may execute the db:seed Artisan command to seed your database. By default, the db:seed command runs the Database\Seeders\DatabaseSeeder class, which may in turn invoke other seed classes. However, you may use the --class option to specify a specific seeder class to run individually:
    php artisan db:seed
    php artisan db:seed --class=UserSeeder


// ! ********************** Eloquent ORM ************************/

// * To get started, let's create an Eloquent model. Models typically live in the app\Models directory and extend the Illuminate\Database\Eloquent\Model class. You may use the make:model Artisan command to generate a new model:
php artisan make:model Flight

// * If you would like to generate a database migration when you generate the model, you may use the --migration or -m option:
php artisan make:model Flight --migration

// * Generate a model and a FlightFactory class...
php artisan make:model Flight --factory
php artisan make:model Flight -f
 
// * Generate a model and a FlightSeeder class...
php artisan make:model Flight --seed
php artisan make:model Flight -s
 
// * Generate a model and a FlightController class...
php artisan make:model Flight --controller
php artisan make:model Flight -c
 
// * Generate a model, FlightController resource class, and form request classes...
php artisan make:model Flight --controller --resource --requests
php artisan make:model Flight -crR
 
// * Generate a model and a FlightPolicy class...
php artisan make:model Flight --policy
 
// * Generate a model and a migration, factory, seeder, and controller...
php artisan make:model Flight -mfsc
 
// * Shortcut to generate a model, migration, factory, seeder, policy, controller, and form requests...
php artisan make:model Flight --all
php artisan make:model Flight -a
 
// * Generate a pivot model...
php artisan make:model Member --pivot
php artisan make:model Member -p

// ! authorization

You may generate a policy using the make:policy Artisan command. The generated policy will be placed in the app/Policies directory. If this directory does not exist in your application, Laravel will create it for you: -->
    php artisan make:policy PostPolicy
    php artisan make:policy PostPolicy --model=Post

// ! API
You may install Laravel Sanctum via the install:api Artisan command:
    php artisan install:api

you should publish the complete cors configuration file using the config:publish Artisan command:
    php artisan config:publish cors

// ! factory
To create a factory, execute the make:factory Artisan command:
    php artisan make:factory PostFactory