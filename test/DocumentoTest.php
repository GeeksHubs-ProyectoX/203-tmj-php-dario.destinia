<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Documento\Documento;

class Test01Test extends TestCase
{
    public function test1()
    {
        $expected = false;
        $result = (new Documento())->dni("0000000000");
        $this->assertEquals($result, $expected);
    }


    public function test2()
    {
        $expected = false;
        $result = (new Documento())->dni(null);
        $this->assertEquals($result, $expected);
    }


    public function test3()
    {
        $expected = false;
        $result = (new Documento())->dni("");
        $this->assertEquals($result, $expected);
    }


    public function test4()
    {
        $expected = false;
        $result = (new Documento())->dni("44878956x");
        $this->assertEquals($result, $expected);
    }


    public function test5() {
        $expected = false;
        $result = (new Documento())->dni("0000000");
        $this->assertEquals($result, $expected);
    }


    public function test6()
    {
        $expected = false;
        $result = (new Documento())->dni("X0000000");
        $this->assertEquals($result, $expected);
    }


    public function test7()
    {
        $expected = false;
        $result = (new Documento())->dni("000X0000");
        $this->assertEquals($result, $expected);
    }


    public function test8()
    {
        $expected = false;
        $result = (new Documento())->dni("00000000s");
        $this->assertEquals($result, $expected);
    }


    public function test9()
    {
        $expected = false;
        $result = (new Documento())->dni("03200000s");
        $this->assertEquals($result, $expected);
    }


    public function test10()
    {
        $expected = false;
        $result = (new Documento())->dni("0320000Ss");
        $this->assertEquals($result, $expected);
    }


    public function test11()
    {
        $expected = false;
        $result = (new Documento())->dni("S");
        $this->assertEquals($result, $expected);
    }


    public function test12()
    {
        $expected = false;
        $result = (new Documento())->dni("s");
        $this->assertEquals($result, $expected);
    }


    public function test13()
    {
        $expected = false;
        $result = (new Documento())->dni("000c0000");
        $this->assertEquals($result, $expected);
    }


    public function test14()
    {
        $expected = true;
        $result = (new Documento())->dni("46552252E");
        $this->assertEquals($result, $expected);
    }


    public function test15()
    {
        $expected = true;
        $result = (new Documento())->dni("64114794V");
        $this->assertEquals($result, $expected);
    }


    public function test16()
    {
        $expected = true;
        $result = (new Documento())->dni("30147400N");
        $this->assertEquals($result, $expected);
    }


    public function test17()
    {
        $expected = true;
        $result = (new Documento())->dni("71454240W");
        $this->assertEquals($result, $expected);
    }


    public function test18()
    {
        $expected = true;
        $result = (new Documento())->dni("21073758P");
        $this->assertEquals($result, $expected);
    }


    public function test19()
    {
        $expected = true;
        $result = (new Documento())->dni("94805114B");
        $this->assertEquals($result, $expected);
    }


    public function test20()
    {
        $expected = true;
        $result = (new Documento())->dni("28831495Y");
        $this->assertEquals($result, $expected);
    }


    public function test21()
    {
        $expected = true;
        $result = (new Documento())->dni("57215320Z");
        $this->assertEquals($result, $expected);
    }


    public function test22()
    {
        $expected = true;
        $result = (new Documento())->dni("38528133M");
        $this->assertEquals($result, $expected);
    }


    public function test23()
    {
        $expected = true;
        $result = (new Documento())->dni("20160127Y");
        $this->assertEquals($result, $expected);
    }


    public function test24()
    {
        $expected = true;
        $result = (new Documento())->dni("02475745W");
        $this->assertEquals($result, $expected);
    }


    public function test25()
    {
        $expected = true;
        $result = (new Documento())->dni("96469358K");
        $this->assertEquals($result, $expected);
    }


    public function test26()
    {
        $expected = true;
        $result = (new Documento())->dni("29382475K");
        $this->assertEquals($result, $expected);
    }


    public function test27()
    {
        $expected = true;
        $result = (new Documento())->dni("19313453P");
        $this->assertEquals($result, $expected);
    }


    public function test28()
    {
        $expected = true;
        $result = (new Documento())->dni("13471858E");
        $this->assertEquals($result, $expected);
    }


    public function test29()
    {
        $expected = true;
        $result = (new Documento())->dni("66513075L");
        $this->assertEquals($result, $expected);
    }


    public function test30()
    {
        $expected = true;
        $result = (new Documento())->dni("56654950Q");
        $this->assertEquals($result, $expected);
    }

    public function test31()
    {
        $expected = true;
        $result = (new Documento())->dni("54006634N");
        $this->assertEquals($result, $expected);
    }


    public function test32()
    {
        $expected = true;
        $result = (new Documento())->dni("11014789C");
        $this->assertEquals($result, $expected);
    }


    public function test33()
    {
        $expected = true;
        $result = (new Documento())->dni("83127154W");
        $this->assertEquals($result, $expected);
    }


    public function test34()
    {
        $expected = 'E';
        $result = (new Documento())->getKeyFromDigits("46552252");
        $this->assertEquals($result, $expected);
    }


    public function test35()
    {
        $expected = 'V';
        $result = (new Documento())->getKeyFromDigits("64114794");
        $this->assertEquals($result, $expected);
    }


    public function test36()
    {
        $expected = 'N';
        $result = (new Documento())->getKeyFromDigits("30147400");
        $this->assertEquals($result, $expected);
    }


    public function test37()
    {
        $expected = 'W';
        $result = (new Documento())->getKeyFromDigits("71454240");
        $this->assertEquals($result, $expected);
    }


    public function test38()
    {
        $expected = 'P';
        $result = (new Documento())->getKeyFromDigits("21073758");
        $this->assertEquals($result, $expected);
    }


    public function test39()
    {
        $expected = 'B';
        $result = (new Documento())->getKeyFromDigits("94805114");
        $this->assertEquals($result, $expected);
    }


    public function test40()
    {
        $expected = 'Y';
        $result = (new Documento())->getKeyFromDigits("28831495");
        $this->assertEquals($result, $expected);
    }


    public function test41()
    {
        $expected = 'Z';
        $result = (new Documento())->getKeyFromDigits("57215320");
        $this->assertEquals($result, $expected);
    }


    public function test42()
    {
        $expected = 'M';
        $result = (new Documento())->getKeyFromDigits("38528133");
        $this->assertEquals($result, $expected);
    }


    public function test43()
    {
        $expected = 'Y';
        $result = (new Documento())->getKeyFromDigits("20160127");
        $this->assertEquals($result, $expected);
    }


    public function test44()
    {
        $expected = 'W';
        $result = (new Documento())->getKeyFromDigits("02475745");
        $this->assertEquals($result, $expected);
    }


    public function test45()
    {
        $expected = 'K';
        $result = (new Documento())->getKeyFromDigits("96469358");
        $this->assertEquals($result, $expected);
    }


    public function test46()
    {
        $expected = 'K';
        $result = (new Documento())->getKeyFromDigits("29382475");
        $this->assertEquals($result, $expected);
    }


    public function test47()
    {
        $expected = 'P';
        $result = (new Documento())->getKeyFromDigits("19313453");
        $this->assertEquals($result, $expected);
    }


    public function test48()
    {
        $expected = 'E';
        $result = (new Documento())->getKeyFromDigits("13471858");
        $this->assertEquals($result, $expected);
    }


    public function test49()
    {
        $expected = 'L';
        $result = (new Documento())->getKeyFromDigits("66513075");
        $this->assertEquals($result, $expected);
    }


    public function test50()
    {
        $expected = 'Q';
        $result = (new Documento())->getKeyFromDigits("56654950");
        $this->assertEquals($result, $expected);
    }


    public function test51()
    {
        $expected = 'N';
        $result = (new Documento())->getKeyFromDigits("54006634");
        $this->assertEquals($result, $expected);
    }


    public function test52()
    {
        $expected = 'C';
        $result = (new Documento())->getKeyFromDigits("11014789");
        $this->assertEquals($result, $expected);
    }


    public function test53()
    {
        $expected = 'W';
        $result = (new Documento())->getKeyFromDigits("83127154");
        $this->assertEquals($result, $expected);
    }


}
