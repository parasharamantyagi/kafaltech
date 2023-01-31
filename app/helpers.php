<?php
 use Illuminate\Support\Facades\URL;


  
    function app_url($input){
        $local_url = 'public/'.$input;
        return URL::to($local_url);
    }

    function pr($input){
      echo '<pre>';
      print_r($input);
      die;
  }

?>