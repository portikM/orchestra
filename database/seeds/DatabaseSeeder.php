<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(SubscribersTableSeeder::class);
        $this->call(EquipmentTableSeeder::class);
        $this->call(SubscribersSystemsTableSeeder::class);
    }
}
