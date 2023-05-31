<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    private static $biodata = [
        'name' => 'Alfitto Bayu Samudro',
        'nim' => '21103041060',
        'address' => "Kembangarum",
        'hobby' => [
            [
                'name' => 'Bermain Game',
                'url' => 'https://i.ytimg.com/vi/KuV5aeSUxPo/maxresdefault.jpg'
            ],
            [
                'name' => 'Merakit PC',
                'url' =>  'https://ae01.alicdn.com/kf/H97e5fc7f1f0640a2aad55e831664c094x/Stiker-Casing-PC-Gaming-Anime-SAO-Asuna-Stiker-Dekorasi-Kulit-Host-ATX-Compuer-Tahan-Air-Hollow.jpg'
            ],
            [
                'name' => 'Menonton Anime',
                'url' => 'https://media-assets-ggwp.s3.ap-southeast-1.amazonaws.com/2020/02/nonton-anime_cv-640x360.jpg'
            ]
        ]
    ];

    public static function getBiodata()
    {
        return self::$biodata;
    }
}
