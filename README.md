<pre style="word-wrap: break-word; white-space: pre-wrap;">set RAM > 1G

<span style="background-color: #99ccff;">composer require "illuminate/html":"5.0.*"</span>

Open /config/app.php
'providers' => [ 
...

<span style="background-color: #ccffcc;">Illuminate\Html\HtmlServiceProvider::class,</span>

],

'aliases' => [
...

<span style="background-color: #ccffcc;">'Form'=> Illuminate\Html\FormFacade::class,

'Html'=> Illuminate\Html\HtmlFacade::class,</span>

],

 <span style="background-color: #99ccff;">php artisan make:model Car --migration</span>

Open /database/migrations/2016_05_20_072605_create_cars_table.php
<span style="background-color: #ccffcc;"><span style="background-color: #ffffff;">public function up() {</span>
Schema::create('cars', function (Blueprint $table) { 
$table->increments('id'); 
$table->integer('price'); 
$table->string('make'); 
$table->string('model'); 
$table->date('produced_on'); 
$table->timestamps();</span>   
<span style="background-color: #ccffcc;">}); 

<span style="background-color: #ffffff;">}</span> </span> <span style="background-color: #99ccff;">php artisan migrate;
php artisan make:controller CarController;
php artisan make:seeder carsTableSeeder;</span>

Open /database/seeds/carsTableSeeder

<span style="background-color: #ccffcc;"><span style="background-color: #ffffff;">public function run() {</span> 
             for ($i = 0; $i < 100; $i++) { DB::table('cars')->insert([ 'price' => random_int(1, 100),
            'make' => str_random(20),
            'model' => str_random(100),
            'produced_on' => \Carbon\Carbon::now()->toDateTimeString(),
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);

<span style="background-color: #ffffff;">}</span></span>

<span style="background-color: #ccffcc;">DB::table('users')->insert([    
        'name' => "root",
        'password'=> Hash::make('Passw0rd'),
        'email' => "root@localhost.com",
        'remember_token' => str_random(100),
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()</span> <span style="background-color: #ccffcc;">]);
}</span> 

Open /database/seeds/DatabaseSeeder.php

<span style="background-color: #ccffcc;">public function run() {
    Model::unguard();
    $this->call(carsTableSeeder::class);
    Model::reguard();
}</span>

<span style="background-color: #99ccff;">php artisan db:seed;
chmod -R 777 /var/www/laravel/public/*
cd /var/www/laravel/storage
chmod -R 777 *</span>

<span style="background-color: #99ccff;">php artisan view:clear;
php artisan config:clear;
php artisan route:clear;
php artisan cache:clear;
php artisan clear-compiled;
php artisan optimize;
php artisan config:cache;
php artisan route:cache;</span></pre>
