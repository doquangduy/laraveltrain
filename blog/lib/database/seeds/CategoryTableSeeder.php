<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data=[
        [
        'cate_name'=>'iPhone',
        'cate_slug'=>str_slug("IPhone")
      ],['cate_name'=>"SamSung",'cate_slug'=>str_slug('SamSung')]];

        //
        DB::table('vp_categories')->insert($data);
    }
}
