<?php

$passErr = $pass = $pass_komfrim = $valid_pass_konfirm = $valid_panjang_pass_msg = "";
$username = $username_valid = username_valid_msg = "";

if(!preg_match("/^[a-zA-Z]*$/",$username) <= 5-9){
    $username_valid = false;
    $username_valid_msg = "huruf kecil dan tidak diawali angka dan symbol.<br>";
}

  if(strlen($pass) <= 8){
    $valid_panjang_pass = false;
    $valid_panjang_pass_msg = "mengunakan huruf kapital, menggunakan angka dan symbol, Panjang minimal 8 digit.<br>";
}
    if($pass != $pass_komfrim){
        $valid_pass_konfirm = false;
        $valid_pass_konfirm_msg = "Password konfirmasi tidak sama.<br>";
    }
  }
?>
