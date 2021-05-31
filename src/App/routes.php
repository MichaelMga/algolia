<?php


 $routes = [

    rootUrl => ["name" => "home", "controller" => "App\Controllers\FrontController" , "method" =>  "renderHome" , "parameters" => []  ] ,

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