<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('ListItemsTableSeeder');
    }
}

/**
*  
*/
class ListItemsTableSeeder extends Seeder
{
	
	public function run()
    {
        DB::table('ListItems')->insert([
            ['name' => 'Php'],
            ['name' => 'Javascript'],
            ['name' => 'Mysql'],
            ['name' => 'Css'],
            ['name' => 'AngularJs'],
            ['name' => 'NoteJs'],
        	['name' => 'Jquery'],
        ]);
    }
}
