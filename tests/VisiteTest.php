<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Tests;

use PHPUnit\Framework\TestCase;

/**
 * Description of VisiteTest
 *
 * @author hocin
 */
class VisiteTest extends TestCase{
    
    public function testGetDatecreationString(){
        $visite = new Visite();
        $visite->setDatecreation(new \DateTime("20244-04-24"));
        $visite->assertEquals("24/04/2024", $visite->getDatecreationString());
    }
}
