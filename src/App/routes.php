<?php


 $routes = [

    rootUrl => ["name" => "home", "controller" => "App\Controllers\FrontController" , "method" =>  "renderHome" , "parameters" => []  ] ,

    rootUrl . 'article' => ["name" => "home", "controller" => "App\Controllers\FrontController" , "method" =>  "renderArticle" , "parameters" => [$request->getGet("num", 1)]  ] ,

    rootUrl . 'newArticle' => ["name" => "home", "controller" => "App\Controllers\ArticleController" , "method" =>  "newArticlePage" , "parameters" => [] ] ,


    //rootUrl . "register" => ["name" => "home", "controller" => "App\Controllers\SecurityController" , "method" =>  "tryToRegisterUser" , "parameters" => [ "algoliadmin" , "pass" ]  ] ,

     rootUrl . "login" => ["name" => "home", "controller" => "App\Controllers\SecurityController" , "method" =>  "tryToLoginUser" , "parameters" => [ "algoliadmin" , "pass" ]  ] ,

     rootUrl . "logout" => ["name" => "home", "controller" => "App\Controllers\SecurityController" , "method" =>  "logout" , "parameters" => [ "algoliadmin" , "pass" ]  ] ,

     rootUrl . "algo" => ["name" => "algo", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSection" , "parameters" => ["algorithms"]  ] ,

     rootUrl . "strings" => ["name" => "algo", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSubSection" , "parameters" => ["algorithms" , "Strings"]  ],
     rootUrl . "sorting" => ["name" => "algo", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSubSection" , "parameters" => ["algorithms" , "Sorting"]  ],
     rootUrl . "graphs" => ["name" => "algo", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSubSection" , "parameters" => ["algorithms" , "Graphs"]  ],
     rootUrl . "tree" => ["name" => "algo", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSubSection" , "parameters" => ["algorithms" , "Tree"]  ],
     rootUrl . "miscellaneous" => ["name" => "algo", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSubSection" , "parameters" => ["algorithms" , "Miscelaneous"]  ],
     rootUrl . "strings" => ["name" => "algo", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSubSection" , "parameters" => ["algorithms" , "strings"]  ],

    rootUrl . "architecture"  => ["name" => "architecture", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSection" , "parameters" => ["architecture"]  ] ,
    rootUrl . "ds"  => ["name" => "architecture", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSection" , "parameters" => ["ds"]  ]

];