<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = new \App\Models\Status();
        $model->name = "Опубликованно";
        $model->save();
        $model = new \App\Models\Status();
        $model->name = "Скрыто";
        $model->save();
        $model = new \App\Models\Status();
        $model->name = "Снят с публикации";
        $model->save();
    }
}
