<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create user permissions
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'delete user']);
        Permission::create(['name' => 'add user']);
        Permission::create(['name' => 'store user']);
        Permission::create(['name' => 'update user']);
        Permission::create(['name' => 'view user']);
        Permission::create(['name' => 'view users']);
        //create hospital permissions
        Permission::create(['name' => 'edit hospital']);
        Permission::create(['name' => 'delete hospital']);
        Permission::create(['name' => 'add hospital']);
        Permission::create(['name' => 'store hospital']);
        Permission::create(['name' => 'update hospital']);
        Permission::create(['name' => 'view hospital']);
        Permission::create(['name' => 'view hospitals']);
        Permission::create(['name' => 'approve hospital']);
        //create stock permissions
        Permission::create(['name' => 'edit stock']);
        Permission::create(['name' => 'delete stock']);
        Permission::create(['name' => 'add stock']);
        Permission::create(['name' => 'store stock']);
        Permission::create(['name' => 'update stock']);
        Permission::create(['name' => 'view stock']);
        Permission::create(['name' => 'view stocks']);
        //

        //create plasma permissions
        Permission::create(['name' => 'edit plasma']);
        Permission::create(['name' => 'delete plasma']);
        Permission::create(['name' => 'add plasma']);
        Permission::create(['name' => 'store plasma']);
        Permission::create(['name' => 'update plasma']);
        Permission::create(['name' => 'view plasma']);
        Permission::create(['name' => 'view plasmas']);
        Permission::create(['name' => 'approve plasma']);
        //

        //create plasmarequest permissions
        Permission::create(['name' => 'edit plasmarequest']);
        Permission::create(['name' => 'delete plasmarequest']);
        Permission::create(['name' => 'add plasmarequest']);
        Permission::create(['name' => 'store plasmarequest']);
        Permission::create(['name' => 'update plasmarequest']);
        Permission::create(['name' => 'view plasmarequest']);
        Permission::create(['name' => 'view plasmarequests']);
        Permission::create(['name' => 'approve plasmarequest']);

        //moderatr
        $role1 = Role::create(['name' => 'moderator']);
        $role1->givePermissionTo('add user');
        $role1->givePermissionTo('store user');
        $role1->givePermissionTo('edit user');
        $role1->givePermissionTo('delete user');
        $role1->givePermissionTo('view user');
        $role1->givePermissionTo('edit hospital');
        $role1->givePermissionTo('delete hospital');
        $role1->givePermissionTo('add hospital');
        $role1->givePermissionTo('view hospital');
        $role1->givePermissionTo('view hospitals');
        $role1->givePermissionTo('view hospital');
        $role1->givePermissionTo('store hospital');
        $role1->givePermissionTo('update hospital');
        $role1->givePermissionTo('view plasma');
        $role1->givePermissionTo('view plasmas');
        $role1->givePermissionTo('approve plasma');
        $role1->givePermissionTo('delete plasma');
        $role1->givePermissionTo('view plasmarequest');
        $role1->givePermissionTo('view plasmarequest');
        $role1->givePermissionTo('approve plasmarequest');
        $role1->givePermissionTo('delete plasmarequest');
        //user
        $role2 = Role::create(['name' => 'user']);
        $role2->givePermissionTo('add plasma');
        $role2->givePermissionTo('edit plasma');
        $role2->givePermissionTo('view plasma');
        $role2->givePermissionTo('view plasmas');
        $role2->givePermissionTo('delete plasma');
        $role2->givePermissionTo('add plasmarequest');
        $role2->givePermissionTo('edit plasmarequest');
        $role2->givePermissionTo('view plasmarequest');
        $role2->givePermissionTo('view plasmarequest');
        $role2->givePermissionTo('delete plasmarequest');
                //hospital admin//
        $role3 = Role::create(['name' => 'hospital']);
        $role3->givePermissionTo('edit hospital');
        $role3->givePermissionTo('delete hospital');
        $role3->givePermissionTo('add hospital');
        $role3->givePermissionTo('view hospital');
        $role3->givePermissionTo('edit hospital');
        $role3->givePermissionTo('delete hospital');
        $role3->givePermissionTo('add hospital');
        $role3->givePermissionTo('view hospital');
        $role3->givePermissionTo('edit stock');
        $role3->givePermissionTo('add stock');
        $role3->givePermissionTo('delete stock');
        $role3->givePermissionTo('store stock');
        $role3->givePermissionTo('update stock');
        $role3->givePermissionTo('view stock');
        //superadmin


        $user1 = factory(App\User::class)->create([
            'name' => 'mod1',
            'email' => 'mod1@gmail.com',
            'password' =>  Hash::make('password'),

        ]);
        $user1->assignRole($role1);

        $user3 = factory(App\User::class)->create([
            'name' => 'hospital1',
            'email' => 'hospital1@gmail.com',
            'password' =>  Hash::make('password'),

        ]);
        $user3->assignRole($role3);

        $user2 = factory(App\User::class)->create([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'password' =>  Hash::make('user'),

        ]);
        $user2->assignRole($role2);

        $role4 = Role::create(['name' => 'super-admin']);

        $user = factory(App\User::class)->create([
            'name' => 'SuperAdmin',
            'email' => 'superadmin@gmail.com',
            'password' =>  Hash::make('password'),

        ]);
        $user->assignRole($role4);
    }
}
