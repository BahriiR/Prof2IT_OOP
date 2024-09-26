<?php

namespace Config;

class Config {
    private function __construct()
    {
    }

    public static function getRoutes() {
        return [
            "GET" => [
                [
                    "uri" => "books",
                    "controller" => "\\Controller\BookController",
                    "action" => "index",
                    "params" => "",
                ],  
                [
                    "uri" => "book/(.+)",
                    "controller" => "\\Controller\BookController",
                    "action" => "show",
                    "params" => "$1",
                ]                  
            ],
        ];
    }
}