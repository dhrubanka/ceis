
## About Ceis

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

# System requirements
1. php 7.3 or up
2. apache
3. mysql
4. composer ( download from https)
5. nodejs

# Installation

1. Clone the repo and cd into it
2. composer install
3. Rename or copy .env.example file to .env
4. Run : php artisan key:generate
5. Set your database credentials in your .env file
6. Run : php artisan migrate:fresh --seed --seeder=PermissionSeeder
7. Login - Different users credentials

        $user1 =  'mod1',
            'email' => 'mod1@gmail.com'
            'password' => 'password'

        $user3 =  'hospital1',
            'email' => 'hospital1@gmail.com',
            'password' =>  'password'

        $user2 =  'user1',
            'email' => 'user1@gmail.com'
            'password' => 'user'

        $user = 'SuperAdmin',
            'email' => 'superadmin@gmail.com',
            'password' =>  'password',

       