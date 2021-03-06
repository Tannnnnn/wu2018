<?php

class AI
{
    public static function process($text)
    {
        $result = [
            'gender' => self::getGender($text),
            'sentiment' => self::getSentiment($text),
            'rude_words' => self::getRudeWords($text),
            'languages' => self::getLanguages($text),
        ];
        return $result;
    }

    /**
     * @return string 'Male' or 'Female' or 'Unknown'
     */
    public static function getGender($text)
    {

        if (strpos($text , "ครับ") !== false) {
          return 'Male';
        }
        elseif (strpos($text , "คะ") !== false) {
          return 'Female';
        }
        else {
          return 'Unknown';
        }
    }

    /**
     * @return string 'Positive' or 'Neutral' or 'Negative'
     */
    public static function getSentiment($text)
    {
      if (strpos($text , "ดี") !== false) {
        return 'Positive';
      }
      elseif (strpos($text , "แย่") !== false) {
        return 'Negative';
      }
      else {
        return 'Neutral';
      }
    }

    /**
     * @return array of all rude words in Thai
     */
    public static function getRudeWords($text)
    {
      $result = [];
      $rude = ["สัส","มึง","ควย","เหี้ย","กาก"];
      for($i = 0 ; $i < sizeof($rude) ; $i++)
      {
          if(strpos($text, $rude[$i]) !== false )
              array_push($result,$rude[$i]);
      }
      return $result;

    }

    /**
     * @return array of languages (TH, EN)
     */
    public static function getLanguages($text)
    {
        $result = [];
          $re = '/[ก-๛]+/u';
        preg_match_all($re,$text,$matches,PREG_SET_ORDER,0);
        if (!empty($matches)) {
          array_push($result,'TH');
          return $result ;
        }
        else {
          array_push($result,'EN');
          return $result ;
        }

    }
}
