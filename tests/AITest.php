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
      $result = AI::getRudeWords('แสสสสส');
      $expected_result = ['แสสสสส' ] ;
      $this->assertContain($expected_result , $result);
  }
   public function testRudeWords_hei() : void
    {
      $result = AI::getRudeWords('คนเหี้ย');
      $expected_result = ['คนเหี้ย'] ;
      $this->assertContain($expected_result , $result);
    }
    public function testRudeWords_kuy() : void
    {
      $result = AI::getRudeWords('ไอแทนหัวควย');
      $expected_result = ['ไอแทนหัวควย']  ;
      $this->assertContain($expected_result , $result);
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
