set RAM > 1G

> composer require "illuminate/html":"5.0.*"

[edit /config/app.php](https://github.com/mingburnu/laravel-practice/blob/master/laravel/config/app.php)

    'providers' => [ 
    ...
    Illuminate\Html\HtmlServiceProvider::class,
    ],
    
    'aliases' => [
    ...
    'Form'=> Illuminate\Html\FormFacade::class,
    'Html'=> Illuminate\Html\HtmlFacade::class,
    ],

> php artisan make:model Car --migration

[edit /database/migrations/2016_05_20_072605_create_cars_table.php](https://github.com/mingburnu/laravel-practice/blob/master/laravel/database/migrations/2016_06_23_095721_create_cars_table.php)

    public function up() {
    Schema::create('cars', function (Blueprint $table) { 
    $table->increments('id'); 
    $table->integer('price'); 
    $table->string('make'); 
    $table->string('model'); 
    $table->date('produced_on'); 
    $table->timestamps();   
    });
    }

> php artisan migrate;<br>
> php artisan make:controller CarController;<br>
> php artisan make:seeder carsTableSeeder;<br>

[edit /database/seeds/carsTableSeeder](https://github.com/mingburnu/laravel-practice/blob/master/laravel/database/seeds/carsTableSeeder.php)

    public function run()
    {
        for ($i = 0; $i < 100; $i++) { DB::table('cars')->insert([ 
            'price' => random_int(1, 100),
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

[edit /database/seeds/DatabaseSeeder.php](https://github.com/mingburnu/laravel-practice/blob/master/laravel/database/seeds/DatabaseSeeder.php)

    public function run() {
        Model::unguard();
        $this->call(carsTableSeeder::class);
        Model::reguard();
    }

> php artisan db:seed;<br>
> chmod -R 777 /var/www/laravel/public/*<br>
> cd /var/www/laravel/storage<br>
> chmod -R 777 *<br>

> php artisan view:clear;<br>
> php artisan route:clear;<br>
> php artisan cache:clear;<br>
> php artisan clear-compiled;<br>
> php artisan optimize;<br>
> php artisan config:cache;<br>
> php artisan route:cache;<br>
