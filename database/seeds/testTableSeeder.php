<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class testTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testTable')->delete();
        $datas = [
            ['id' => '1', 'name' => 'testName1', 'address' => 'testAddress1', 'g_Map' => 'testMap1', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '2', 'name' => 'testName2', 'address' => 'testAddress2', 'g_Map' => 'testMap2', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '3', 'name' => 'testName3', 'address' => 'testAddress3', 'g_Map' => 'testMap3', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '4', 'name' => 'testName4', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '5', 'name' => 'testName5', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '6', 'name' => 'testName6', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '7', 'name' => 'testName7', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '8', 'name' => 'testName8', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '9', 'name' => 'testName9', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '10', 'name' => 'testName10', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '11', 'name' => 'testName11', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '12', 'name' => 'testName12', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '13', 'name' => 'testName13', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '14', 'name' => 'testName14', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '15', 'name' => 'testName15', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '16', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '17', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '18', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '19', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '20', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '21', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '22', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '23', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '24', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '25', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '26', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '27', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '28', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '29', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '30', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '31', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '32', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '33', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '34', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '35', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '36', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '37', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '38', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '39', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '40', 'name' => 'testName16', 'address' => 'testAddress4', 'g_Map' => 'testMap4', 'created_at' => now(), 'updated_at' => now()],
         ];
 
 
        //  foreach ($datas as $data) {
        //     testTableModel::create($data);
        //  }

        DB::table('testTable')->insert($datas);
    }
}
