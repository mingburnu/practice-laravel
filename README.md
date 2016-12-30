set RAM > 1G

composer require "illuminate/html":"5.0.*"


Open /config/app.php

 'providers' => [ ...

Illuminate\Html\HtmlServiceProvider::class,

],


'aliases' => [

...

'Form'=> Illuminate\Html\FormFacade::class,

'Html'=> Illuminate\Html\HtmlFacade::class,

],
 

php artisan make:model Car --migration

Open /database/migrations/2016_05_20_072605_create_cars_table.php

public function up() { 

Schema::create('cars', function (Blueprint $table) { 

$table->increments('id'); 

$table->integer('price'); 

$table->string('make'); 

$table->string('model'); 

$table->date('produced_on'); 

$table->timestamps(); }); 

}  


php artisan migrate

php artisan make:controller CarController

php artisan make:seeder carsTableSeeder


Open /database/seeds/carsTableSeeder

public function run() { 

             for ($i = 0; $i < 100; $i++) { DB::table('cars')->insert([ 'price' => random_int(1, 100),

            'make' => str_random(20),

            'model' => str_random(100),

            'produced_on' => \Carbon\Carbon::now()->toDateTimeString(),

            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),

            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()

        ]);
        
    }


    DB::table('users')->insert([
    
        'name' => "root",

        'password'=> Hash::make('Passw0rd'),

        'email' => "root@localhost.com",

        'remember_token' => str_random(100),

        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),

        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()

    ]);
}


Open /database/seeds/DatabaseSeeder.php

public function run() {

    Model::unguard();

    $this->call(carsTableSeeder::class);

    Model::reguard();
}


php artisan db:seed

chmod -R 777 /var/www/laravel/public/*

cd /var/www/laravel/storage

chmod -R 777 *

php artisan view:clear

php artisan config:clear

php artisan route:clear

php artisan cache:clear

php artisan clear-compiled

php artisan optimize

php artisan config:cache

php artisan route:cache
