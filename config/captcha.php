<?php

//echo ">>>";
//print_r(dirname(__DIR__) . '/assets/fonts');
//print_r(base_path('vendor/mews/captcha/assets/fonts'));
//die;

return [
    'disable' => env('CAPTCHA_DISABLE', false),
    'characters' => ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd',
        'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's',
        't', 'u', 'v', 'w', 'x', 'y', 'z', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
//    'fontsDirectory' => dirname(__DIR__) . '/assets/fonts',
//    'bgsDirectory' => dirname(__DIR__) . '/assets/backgrounds',
    'fontsDirectory' => base_path('vendor/mews/captcha/assets/fonts'),
    'bgsDirectory'   => base_path('vendor/mews/captcha/assets/backgrounds'),

    'default' => [
        'length' => 5,
        'width' => 178,
        'height' => 55,
        'quality' => 90,
        'math' => false,
        'expire' => 60,
        'encrypt' => false,
        // Required for your desired look:
        'bgColor' => 'white',               // background white
        'fontColors' => ['#000000'],        // text black only
        'lines' => 6,                       // horizontal/diagonal noise lines
        'bgImage' => false,

    ],
    'flat' => [
        'length' => 5,
        'fontColors' => ['#000000'],
        'width' => 345,
        'height' => 65,
        'math' => false,
        'quality' => 100,
        'lines' => 6,
        'bgImage' => false,
        'bgColor' => 'white',
        'contrast' => 0,
    ],
    'mini' => [
        'length' => 5,
        'width' => 160,
        'height' => 132,
    ],
    'inverse' => [
        'length' => 5,
        'width' => 120,
        'height' => 36,
        'quality' => 90,
        'sensitive' => true,
        'angle' => 1,
        'sharpen' => 5,
        'blur' => 2,
        'invert' => false,
        'contrast' => -5,
    ],
    'math' => [
        'length' => 9,
        'width' => 120,
        'height' => 36,
        'quality' => 90,
    ],
];
