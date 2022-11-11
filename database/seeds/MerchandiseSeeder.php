<?php

use Illuminate\Database\Seeder;

class MerchandiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'brand_name'=>'Sample Table',
                'product_name'=>'Sample Table 4kilogram',
                'retail_price'=>'1500.00',
                'wholesale_price'=>'1.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'100',
                'unit_id'=>'1',
                'category_id'=>'1'
            ],
            [
                'brand_name'=>'Sample Lamp',
                'product_name'=>'Sample Lamp',
                'retail_price'=>'500.00',
                'wholesale_price'=>'1.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'25',
                'unit_id'=>'1',
                'category_id'=>'2'
            ],
            [
                'brand_name'=>'Sample Desc',
                'product_name'=>'Sample Desc 8kilogram',
                'retail_price'=>'2500.00',
                'wholesale_price'=>'1.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'100',
                'unit_id'=>'1',
                'category_id'=>'1'
            ],


        ];

        foreach($data as $merchandises) {
            \App\Merchandise::create($merchandises);
        }
    }
}
