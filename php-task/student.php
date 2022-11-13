<?php

class myClass {
    public function __construct() {
        $get_arguments       = func_get_args();
        $number_of_arguments = func_num_args();

        if (method_exists($this, $method_name = '__construct'.$number_of_arguments)) {
            call_user_func_array(array($this, $method_name), $get_arguments);
        }
    }

    public function __construct1($argument1) {
        echo 'constructor with 1 parameter ' . $argument1 . "\n";
    }

    public function __construct2($argument1, $argument2) {
        echo 'constructor with 2 parameter ' . $argument1 . ' ' . $argument2 . "\n";
    }

    public function __construct3($argument1, $argument2, $argument3) {
        echo 'constructor with 3 parameter ' . $argument1 . ' ' . $argument2 . ' ' . $argument3 . "\n";
    }
}

$object1 = new myClass('BUET');
$object2 = new myClass('BUET', 'is');
$object3 = new myClass('BUET', 'is', 'Best.');