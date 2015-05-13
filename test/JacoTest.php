<?php

// require_once '../vendor/autoload.php';
include "../lib/jaco/Jaco.php";

class JacoTest extends PHPUnit_Framework_TestCase {

    public function testCreateJaco () {

        $instance = new jaco\Jaco('あいうえお');

        $this->assertEquals($instance.'', 'あいうえお');

    }

}
