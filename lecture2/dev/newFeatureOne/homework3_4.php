<?php
/**
 * Created by PhpStorm.
 * User: AleksLi
 */
class Singleton {
    static private $instance = NULL;

    private function __construct() {
    }

    static public function getInstance() {
        if (self::$instance == NULL) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
}
?>