<?php

    namespace App\Wcs;

    class Hello{

        public function talk(): string
        {
            return "Hello World !";
        }

        public static function world() : string
        {

            return "Hello World, Composer!";
        }
    }