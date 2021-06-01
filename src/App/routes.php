<?php


 $routes = [

    rootUrl => ["name" => "home", "controller" => "App\Controllers\FrontController" , "method" =>  "renderHome" , "parameters" => []  ] ,

    rootUrl . 'article' => ["name" => "home", "controller" => "App\Controllers\FrontController" , "method" =>  "renderArticle" , "parameters" => [$request->getGet("num", 1)]  ] ,

    rootUrl . 'newArticle' => ["name" => "home", "controller" => "App\Controllers\ArticleController" , "method" =>  "rendernewArticlePage" , "parameters" => [] ] ,
    rootUrl . 'dbNewArticle' => ["name" => "home", "controller" => "App\Controllers\ArticleController" , "method" =>  "createArticle" , "parameters" => [$request->getPost("subsection", false) , $request->getPost("name", false) ] ] ,
    rootUrl . 'dbEditArticleContent' => ["name" => "home", "controller" => "App\Controllers\ArticleController" , "method" =>  "editArticleContent" , "parameters" => [$request->getPost("id", false) , $request->getPost("content", "false") ] ] ,


    //rootUrl . "register" => ["name" => "home", "controller" => "App\Controllers\SecurityController" , "method" =>  "tryToRegisterUser" , "parameters" => [ "algoliadmin" , "pass" ]  ] ,

     rootUrl . "login" => ["name" => "home", "controller" => "App\Controllers\SecurityController" , "method" =>  "tryToLoginUser" , "parameters" => [ "algoliadmin" , "pass" ]  ] ,
     rootUrl . "logout" => ["name" => "home", "controller" => "App\Controllers\SecurityController" , "method" =>  "logout" , "parameters" => [ "algoliadmin" , "pass" ]  ] ,



     rootUrl . "algo" => ["name" => "algo", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSection" , "parameters" => ["algorithms"]  ] ,

      rootUrl . "strings" => ["name" => "algo", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSubSection" , "parameters" => ["strings"]  ],
      rootUrl . "sorting" => ["name" => "algo", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSubSection" , "parameters" => ["sorting"]  ],
      rootUrl . "graphs" => ["name" => "algo", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSubSection" , "parameters" => ["graphs"]  ],
      rootUrl . "trees" => ["name" => "algo", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSubSection" , "parameters" => ["trees"]  ],
      rootUrl . "miscellaneous" => ["name" => "algo", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSubSection" , "parameters" => ["miscellaneous"]  ],

    rootUrl . "architecture"  => ["name" => "architecture", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSection" , "parameters" => ["architecture"]  ] ,

      rootUrl . "cleanCode"  => ["name" => "architecture", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSubSection" , "parameters" => ["cleanCode"]  ] ,
      rootUrl . "designPatterns"  => ["name" => "architecture", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSubSection" , "parameters" => ["designPatterns"]  ] ,
      rootUrl . "SOLID"  => ["name" => "architecture", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSubSection" , "parameters" => ["SOLID"]  ] ,
             
    rootUrl . "ds"  => ["name" => "architecture", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSection" , "parameters" => ["ds"]  ],
       rootUrl . "linkedLists"  => ["name" => "architecture", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSubSection" , "parameters" => ["linkedLists"]  ],
       rootUrl . "stacks"  => ["name" => "architecture", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSubSection" , "parameters" => ["stacks"]  ],
       rootUrl . "arrays"  => ["name" => "architecture", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSubSection" , "parameters" => ["arrays"]  ],
       rootUrl . "queues"  => ["name" => "architecture", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSubSection" , "parameters" => ["queues"]  ],
       rootUrl . "heaps"  => ["name" => "architecture", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSubSection" , "parameters" => ["heaps"]  ]       

];