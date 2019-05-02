<?php

use Illuminate\Database\Seeder;
use Coinvit\Blockchain;
class InitialBlockchain extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blockchain::create([
          "name"=>"Ardor",
          "order"=>0
        ]);
        Blockchain::create([
          "name"=>"Stellar",
          "order"=>1
        ]);
        
    }
}
