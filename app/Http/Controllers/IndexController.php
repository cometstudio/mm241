<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $calculatorData['targets'] = [
            [
                'name'=>'Категория доходов',
                'description'=>'',
                'providers'=>[
                    'beeline'=>0,
                    'megafon'=>0,
                    'mts'=>0,
                ],
            ],
            [
                'name'=>'Пол',
                'description'=>'',
                'providers'=>[
                    'beeline'=>0,
                    'megafon'=>0,
                    'mts'=>0,
                ],
            ],
            [
                'name'=>'Возраст',
                'description'=>'',
                'providers'=>[
                    'beeline'=>0,
                    'megafon'=>0,
                    'mts'=>0,
                ],
            ],
            [
                'name'=>'Гео',
                'description'=>'город, улица, дом',
                'providers'=>[
                    'beeline'=>0,
                    'megafon'=>0,
                    'mts'=>0,
                ],
            ],
            [
                'name'=>'ОС телефона',
                'description'=>'iOS, Android',
                'providers'=>[
                    'beeline'=>0,
                    'megafon'=>0,
                    'mts'=>0,
                ],
            ],
        ];

        return view('index.index', [
            'calculatorData'=>$calculatorData,
        ]);
    }
}
