<?php

use Illuminate\Database\Seeder;

class IntialFavorites extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $create = \Coinvit\TokenFavorite::create(["id_token"=>"4777913785555377445"]);
    }
}
