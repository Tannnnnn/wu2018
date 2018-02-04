<?php
  use PHPUnit\Framework\TestCase;

  final class AITest extends TestCase
  {
    public function testGender_Male() : void
    {
      $result = AI::getGender('สวัสดีครับ');
      $expected_result = 'Male' ;
      $this->assertEquals($expected_result , $result);
    }
    public function testGender_Female() : void
    {
      $result = AI::getGender('สวัสดีคะ');
      $expected_result = 'Female' ;
      $this->assertEquals($expected_result , $result);
    }
    public function testSentiment_Positive() : void
    {
      $result = AI::getSentiment('อากาศดีจัง');
      $expected_result = 'Positive' ;
      $this->assertEquals($expected_result , $result);
    }
    public function testSentiment_Negative() : void
    {
      $result = AI::getSentiment('ทำไมนิสัยแย่จังเลย');
      $expected_result = 'Negative' ;
      $this->assertEquals($expected_result , $result);
    }
    public function testSentiment_Neutral() : void
    {
      $result = AI::getSentiment('เฉยๆอ่ะพี่');
      $expected_result = 'Neutral' ;
      $this->assertEquals($expected_result , $result);
    }
    public function testRudeWords_sud() : void
    {
      $result = AI::getRudeWords('สัส');
      $expected_result = 'สัส'  ;
      $this->assertContains($expected_result , $result);
  }
   public function testRudeWords_hei() : void
    {
      $result = AI::getRudeWords('เหี้ย');
      $expected_result = ['เหี้ย'] ;
      $this->assertContains($expected_result , $result);
    }
    public function testRudeWords_kuy() : void
    {
      $result = AI::getRudeWords('ควย');
      $expected_result = ['ควย']  ;
      $this->assertContains($expected_result , $result);
    }
   public function testLanguages_s() : void
     {
     $result = AI::getLanguages('สวัสดี');
     $expected_result = ['TH'] ;
      $this->assertEquals($expected_result , $result);
    }
     public function testLanguages() : void
   {
       $result = AI::getLanguages('Hello');
       $expected_result = ['EN'];
       $this->assertEquals($expected_result , $result);
     }

  }
 ?>
