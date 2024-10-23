<?php

$users_data = [
    [
        "name"=>"Zack",
        "nim"=>"3535121299",
        "password"=> "ADMIN123",
        "role"=> "admin",
    ],
    [
        "name"=>"Alex",
        "nim"=>"1234567890",
        "password"=>"123AAA",
        "role"=> "member",
    ],
    [
        "name"=>"Bagyo",
        "nim"=>"1112223334",
        "password"=>"ABC11",
        "role"=> "member",
    ]
];

$candidate_data = [
    [
        "name"=> "Agus",
        "class"=> "TI-2F",
        "total_vote"=> 0,
        "description"=>"Mewujudkan komunitas IT yang kreatif, inovatif, dan saling mendukung dalam menjawab tantangan digital.",
        "photo_dir"=>'http://' . $_SERVER['HTTP_HOST'] . '/assets/img/candidate-photos/Agus.jpg'
    ],
    [
        "name"=> "Biru",
        "class"=> "SIB-3D",
        "total_vote"=> 0,
        "description"=>"Menciptakan ekosistem IT yang inklusif dan berkelanjutan, di mana setiap anggota berkontribusi dan berkembang bersama.",
        "photo_dir"=>'http://' . $_SERVER['HTTP_HOST'] . '/assets/img/candidate-photos/Biru.jpg'
    ]
];