<?php

class constants {

    const MAX_VALUE = 10;
        protected const MIN_VALUE =1;

        static public function test(){
            echo self::MIN_VALUE;
        }

}

// This will work
// echo constants::MAX_VALUE;

// This will return syntax error
echo constants::test();
?>