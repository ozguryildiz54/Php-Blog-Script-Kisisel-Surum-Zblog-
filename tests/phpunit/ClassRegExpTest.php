<?php
class ClassRegExpTest extends PHPUnit_Framework_TestCase
{
    protected $backupGlobalsBlacklist = ['zbp'];

    public function setUp()
    {
    }

    public function tearDown()
    {
    }


    public function testNickname()
    {
        $this->assertFalse(CheckRegExp("@", '[nickname]'));
        $this->assertFalse(CheckRegExp("\x05", '[nickname]'));
        $this->assertFalse(CheckRegExp("⁭", '[nickname]'));

        $this->assertTrue(CheckRegExp("Çin, Japonya ve Güney Kore CJK testi Tesitao test", '[nickname]'));
        $this->assertTrue(CheckRegExp("δοκιμήপরীক্ষাការធ្វើតេស្តтест", '[nickname]'));
        $this->assertTrue(CheckRegExp('123', '[nickname]'));
        $this->assertTrue(CheckRegExp('Sadece Türkçe Adı', '[nickname]'));
    }
}
