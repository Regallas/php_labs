<?php
require_once 'src/Date.php';

use PHPUnit\Framework\TestCase;

class DateTest extends TestCase
{
    private $date;
    private $date2;
    
    protected function setUp(): void
    {
        $this->date = new Date(22, 12, 2000);
        $this->date1 = new Date(26, 11, 2000);
        $this->date2 = new Date(27, 11, 2000);
        $this->date3 = new Date(28, 11, 2000);
        $this->date4 = new Date(29, 11, 2000);
        $this->date5 = new Date(30, 11, 2000);
        $this->date6 = new Date(1, 12, 2000);
        $this->date7 = new Date(2, 12, 2000);
    }
    public function testDiffDay()
    {
        $this->assertEquals($this->date->diffDay($this->date,$this->date5), 22); 
    }
    public function testMinusDay()
    {
        $this->assertEquals($this->date->minusDay(9), "13.12.2000"); 
    }
    public function testformatRu()
    {
        $this->assertEquals($this->date->formatRu("ru"), "22.12.2000"); 
    }
    public function testformatEu()
    {
        $this->assertEquals($this->date->formatRU("en"),"2000-12-22"); 
    }
    public function testGetDateOfWeekMo()
    {
        $this->assertEquals($this->date1->getDateOfWeek(),"Пн"); 
    }
    public function testGetDateOfWeekTu()
    {
        $this->assertEquals($this->date2->getDateOfWeek(),"Вт"); 
    }
    public function testGetDateOfWeekWe()
    {
        $this->assertEquals($this->date3->getDateOfWeek(),"Ср"); 
    }
    public function testGetDateOfWeekTh()
    {
        $this->assertEquals($this->date4->getDateOfWeek(),"Чт"); 
    }
    public function testGetDateOfWeekFr()
    {
        $this->assertEquals($this->date5->getDateOfWeek(),"Пт"); 
    }
    public function testGetDateOfWeekSa()
    {
        $this->assertEquals($this->date6->getDateOfWeek(),"Сб"); 
    }
    public function testGetDateOfWeekSu()
    {
        $this->assertEquals($this->date7->getDateOfWeek(),"Вс"); 
    }

}
