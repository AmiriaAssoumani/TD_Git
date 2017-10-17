<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ValidatePassTest Extends PHPUnit_Framework_TestCase{
    public function testValideLength(){
        $valpass = new ValidatePass();
        $this->assertFalse($valpass->ValidLength('1234'));
    }
}