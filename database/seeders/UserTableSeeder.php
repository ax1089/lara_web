<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //生成数据集合
        User::factory()->count(10)->create();

        //单独处理第一个用户数据
        $user = User::find(1);

        $user->name="李先生";
        $user->email="wencai159@126.com";
        $user->avatar = "https://cdn.learnku.com/uploads/images/201710/14/1/ZqM7iaP4CR.png";
        $user->save();
    }
}
