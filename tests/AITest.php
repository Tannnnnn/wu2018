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
      $expected_result = $results ;
      $this->assertEquals($expected_result , $result);
    }
    public function testRudeWords_hei() : void
    {
      $result = AI::getRudeWords('คนเหี้ย');
      $expected_result = $results ;
      $this->assertEquals($expected_result , $result);
    }
    public function testRudeWords_kuy() : void
    {
      $result = AI::getRudeWords('ไอแทนหัวควย');
      $expected_result = $results  ;
      $this->assertEquals($expected_result , $result);
    }
    // public function testGender_Male() : void
    // {
    //   $result = AI::getGender('สวัสดีครับ');
    //   $expected_result = 'Male' ;
    //   $this->assertEquals($expected_result , $result);
    // }
    // public function testGender_Male() : void
    // {
    //   $result = AI::getGender('สวัสดีครับ');
    //   $expected_result = 'Male' ;
    //   $this->assertEquals($expected_result , $result);
    // }
    // public function testGender_Male() : void
    // {
    //   $result = AI::getGender('สวัสดีครับ');
    //   $expected_result = 'Male' ;
    //   $this->assertEquals($expected_result , $result);
    // }
  }
 ?>
