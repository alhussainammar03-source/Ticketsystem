<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

      DB::table('categories')->insert([
        [
       'name'=>'Hardware',
       'created_at'=>now(),
       'updated_at'=>now(),
      ],
      [   'name'=>'Software',
       'created_at'=>now(),
       'updated_at'=>now(),],
      ['name'=>'Netzwerk',
       'created_at'=>now(),
       'updated_at'=>now(),],
     [     'name'=>'Benutzerkonto',
       'created_at'=>now(),
       'updated_at'=>now(),],
      [    'name'=>'Sonstiges',
       'created_at'=>now(),
       'updated_at'=>now(),]
       ]);

    }


 





}
