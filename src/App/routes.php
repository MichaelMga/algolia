<?php


 $routes = [

    rootUrl => ["name" => "home", "controller" => "App\Controllers\FrontController" , "method" =>  "renderHome" , "parameters" => []  ] ,

    rootUrl . "algo" => ["name" => "algo", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSection" , "parameters" => ["algorithms"]  ] ,

           rootUrl . "strings" => ["name" => "algo", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSubSection" , "parameters" => ["algorithms/strings/index"]  ] ,

                    rootUrl . "longestCommonSubsequence" => ["name" => "algo", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSubSection" , "parameters" => ["algorithms/strings/index"]  ] ,


    rootUrl . "architecture"  => ["name" => "architecture", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSection" , "parameters" => ["architecture"]  ] ,

    rootUrl . "ds"  => ["name" => "architecture", "controller" => "App\Controllers\FrontController" , "method" =>  "renderSection" , "parameters" => ["ds"]  ]

];