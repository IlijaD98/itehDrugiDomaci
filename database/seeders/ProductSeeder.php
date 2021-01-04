<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'CSS za pocetnike',
            'price'=>'100',
            'description'=>'Na ovom kursu naucicete osnove CSS-a. Predavanja drzi profesor Marko Markovic.',
            'category'=>'frontend',
            'gallery'=>'https://img-a.udemycdn.com/course/240x135/1561458_7f3b.jpg?F4Pu_1Y9w2vFJ6dMi81LnOAxqeR9SHXF_qPJAspc24-konyeTI49QAC2U4eRnYODD3Njo0fmzYMaK88OBJ855qslCJxrC_7St02cOXpYbxitoDWZPV5vkpfZBUMRsw'
            ],
            [
                'name'=>'Java script-napredni tutorijal',
            'price'=>'250',
            'description'=>'Na jednostavan nacin mozes da steknes znanje Java Scripta koje ti je potrebno za rad u najpoznatijim kompanijama. Sta cekas?',
            'category'=>'frontend',
            'gallery'=>'https://img-a.udemycdn.com/course/240x135/1565838_e54e_12.jpg?R8ZaWjLXDobExJL_3C1lxr9rd0d1a7HOdRtwen-fqS92BGK59qcJCJUgfPPD2ZiN5vpQxrBoNjUEPI7fjM4vU0DOLLH9hRdohmNM4YR_cAvVdz_mKguQ04wSxRB9-rIZoQ'
            ],
            [
                'name'=>'Prirucnik za koriscenje Linuxa',
            'price'=>'80',
            'description'=>'Brzo i lako savladaj osnove Linuxa. Ovaj operativni sistem ti nece vise zadavati muke',
            'category'=>'operativni sistem',
            'gallery'=>'https://img-a.udemycdn.com/course/240x135/755984_6223_3.jpg?P4R7aE_gzNUHmQkPYj3a4ZugjMvzHJBwnj5k9AHFYFVnt9pAukXDVHUBKXhqh6nACf3Wf8izvYWSUZCvge_yygQcZIbyubejwZskAutO_QehV_i4M_ltel8uo9hXxR0'
            ],
            [
                'name'=>'Wireshark- Ethical hacking',
            'price'=>'280',
            'description'=>'Uz predavanja koja drzi profesor Jovan Jovanovic, lako ces da postanes strucnjak u ovoj oblasti',
            'category'=>'hakovanje',
            'gallery'=>'https://img-a.udemycdn.com/course/240x135/2351336_fb8c_6.jpg?fmovrR7TJWJ2idPfz88ICfctERzTjQe5UDv9wk7wJpC5UMZVfYpChyAFLVXoSsiT4AJYXHnSIWkDMp_9jlV9kdGx7FVK_VFUiDcQuWgJUxDg98WS7r23bBouHiq9x_WZ'
            ]
        ]);
    }
}
