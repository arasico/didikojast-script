<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = array();
        \App\User::create([
            'type' => 'admin',
            'name' => 'yaser darzi',
            'phone' => '09111160804',
            'email' => 'yaser.darzi@gmail.com',
            'username' => 'yaser.darzi',
            'password' => bcrypt('yaserdarzi'),
            'active' => 1,
            'type_phone' => '',
            'auto_charge' => '',
            'expire_at' => 0,
            'remember_token' => '',
            'info' => $json,
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\User::create([
            'type' => 'admin',
            'name' => 'aras armani',
            'phone' => '09359669592',
            'email' => 'aras.armani2014@gmail.com',
            'username' => 'aras.armani',
            'password' => bcrypt('01113293176'),
            'active' => 1,
            'type_phone' => '',
            'auto_charge' => '',
            'expire_at' => 0,
            'remember_token' => '',
            'info' => $json,
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\User::create([
            'type' => 'admin',
            'name' => 'zeinab yazdanpoor',
            'phone' => '09198699377',
            'email' => 'zeinabyazdanpoor@yahoo.com',
            'username' => 'zeinab.yazdanpoor',
            'password' => bcrypt('zyp2818'),
            'active' => 1,
            'type_phone' => '',
            'auto_charge' => '',
            'expire_at' => 0,
            'remember_token' => '',
            'info' => $json,
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'آذربایجان شرقی',
            'url' => 'آذربایجان-شرقی',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'آذربایجان غربی',
            'url' => 'آذربایجان-غربی',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'اردبیل',
            'url' => 'اردبیل',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'اصفهان',
            'url' => 'اصفهان',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'البرز',
            'url' => 'البرز',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'ایلام',
            'url' => 'ایلام',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'بوشهر',
            'url' => 'بوشهر',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'تهران',
            'url' => 'تهران',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'چهارمحال و بختیاری',
            'url' => 'چهارمحال-و-بختیاری',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'خراسان جنوبی',
            'url' => 'خراسان-جنوبی',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'خراسان رضوی',
            'url' => 'خراسان-رضوی',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'خراسان شمالی',
            'url' => 'خراسان-شمالی',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'خوزستان',
            'url' => 'خوزستان',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'زنجان',
            'url' => 'زنجان',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'سمنان',
            'url' => 'سمنان',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'سیستان و بلوچستان',
            'url' => 'سیستان-و-بلوچستان',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'فارس',
            'url' => 'فارس',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'قزوین',
            'url' => 'قزوین',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'قم',
            'url' => 'قم',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'كردستان',
            'url' => 'كردستان',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'كرمان',
            'url' => 'كرمان',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'كرمانشاه',
            'url' => 'كرمانشاه',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'کهگیلویه و بویراحمد',
            'url' => 'کهگیلویه-و-بویراحمد',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'گلستان',
            'url' => 'گلستان',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'گیلان',
            'url' => 'گیلان',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'لرستان',
            'url' => 'لرستان',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'مازندران',
            'url' => 'مازندران',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'مركزی',
            'url' => 'مركزی',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'هرمزگان',
            'url' => 'هرمزگان',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'همدان',
            'url' => 'همدان',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'یزد',
            'url' => 'یزد',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
    }
}
