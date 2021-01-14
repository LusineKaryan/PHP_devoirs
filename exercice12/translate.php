<?php
class translate {
 private $ku = false;

 public function __construct() {
    $this->ku = curl_init();
    if(!$this->ku) {
   exit("Ошибка");
    }
   }
   
   public function __destruct() {
    if($this->ku) {
   curl_close($this->ku);
    }
   }

   public function translate($s,$d,$query) {
    $query = urlencode($query);
   
    $str = "client=x&text=".$query."&sl=".$s."&tl=".$d;
   
    if(!$this->ku) {
   exit("Ошибка");
    }
   
    curl_setopt($this->ku,CURLOPT_URL,URL."?".$str);
    curl_setopt($this->ku,CURLOPT_RETURNTRANSFER,TRUE);
    curl_setopt($this->ku,CURLOPT_HTTPHEADER,array('User-Agent:'.$_SERVER['HTTP_USER_AGENT']));
   
    $result = curl_exec($this->ku);
   
    return $result;
   }
}

?>