<?php

namespace Database\Factories;

use App\Models\Tea;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

class TeaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tea::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sale_name = ['0', '10', '20', '25', '50', '0'];
        $name_tm = ['Çaý', 'Gara Çaý', 'Gök Çaý', 'Sary Çaý', 'Goňur Çaý', 'Gyzyl çaý'];
        $name_en = ['Tea', 'Black Tea', 'Green Tea', 'Yellow Tea', 'Brown Tea', 'Red Tea'];
        $name_ru = ['Чай', 'Черный Чай', 'Зеленый Чай', 'Желтый Чай', 'Коричневый Чай', 'Красный Чай'];

        $random = mt_rand(0, 5);
        $price = mt_rand(25, 100);

        $percent = null;

        if($sale_name[$random]){
            $percent = $price - ($price*$sale_name[$random]/100);
        }

        return [
            'name_tm' => $name_tm[$random],
            'name_en' => $name_en[$random],
            'name_ru' => $name_ru[$random],
            'images' => array(
                ['thumb' => 'assets/tea/baychay/baychay-tea-1-650x770.jpg', 'original' => 'assets/tea/baychay/baychay-tea-1.jpg',],
                ['thumb' => 'assets/tea/baychay/baychay-tea-2-650x770.jpg', 'original' => 'assets/tea/baychay/baychay-tea-2.jpg'],
            ),
            'price' => $price,
            'sale_price' => $percent,
            'sale_type' => mt_rand(0, 1) == 0 ? 'New' : '',
            'discount' => $sale_name[$random],
        ];
    }
}
