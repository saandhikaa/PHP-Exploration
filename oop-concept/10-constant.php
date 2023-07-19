<?php
    define('CONST1',"happy New Year"); // cant use this way in class
    const CONST2 = 2023;

    var_dump(CONST1);
    var_dump(CONST2);
    
    class class_constant{
        const CONST3 = "Hello World";
    }

    echo class_constant::CONST3 . "<hr>"; // call constant in class

    class magic_constant{
        const mc_line = "<p>program in line " . "<span style=\"font-weight:bold;\">" . __LINE__ . "</span></p>";
        const mc_file = "<p>this full file path is " . "<span style=\"font-weight:bold;\">" . __FILE__ . "</span></p>";
        const mc_dir = "<p>this file directory is " . "<span style=\"font-weight:bold;\">" . __DIR__ . "</span></p>";
        const mc_class = "<p>this class name is " . "<span style=\"font-weight:bold;\">" . __CLASS__ . "</span></p>";

        public static function mc_methodfunction ($value){
            if ($value == "method") return "<p>this method name is " . "<span style=\"font-weight:bold;\">" . __METHOD__ . "</span></p>";
            if ($value == "function") return "<p>this function name is " . "<span style=\"font-weight:bold;\">" . __FUNCTION__ . "</span></p>";
        }
    }

    echo magic_constant::mc_line;
    echo magic_constant::mc_file;
    echo magic_constant::mc_dir;
    echo magic_constant::mc_class;
    echo magic_constant::mc_methodfunction("method");
    echo magic_constant::mc_methodfunction("function");

?>