<?php

namespace Database\Factories;

use App\Models\Tea;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $sale_name = ['new', 'hot', '-10%', '-35%', '-50%'];
        $name_tm = ['Çaý', 'Gara Çaý', 'Gök Çaý', 'Sary Çaý', 'Goňur Çaý', 'Gyzyl çaý'];
        $name_en = ['Tea', 'Black Tea', 'Green Tea', 'Yellow Tea', 'Brown Tea', 'Red Tea'];
        $name_ru = ['Çaý', 'Черный Чай', 'Зеленый Чай', 'Желтый Чай', 'Коричневый Чай', 'Красный Чай'];

        return [
            'name_tm' => $name_tm[mt_rand(0, 5)],
            'name_en' => $name_en[mt_rand(0, 5)],
            'name_ru' => $name_ru[mt_rand(0, 5)],
            'price' => mt_rand(25, 100),
            'sale_price' => mt_rand(0, 1) != 0 ? null : mt_rand(10, 25),
            'sale_name' => $sale_name[mt_rand(0, 4)],
        ];
    }
}
