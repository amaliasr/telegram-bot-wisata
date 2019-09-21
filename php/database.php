<?php

$con=mysqli_connect("localhost","root","","wisata_batu");

//set up the Bot API token

$botToken = "936352772:AAGnW442bLHmBgP34kmSfUvIibx83nkJmzk";

$website = "https://api.telegram.org/bot".$botToken;

//Grab the info from the webhook, parse it and put it into $message

$content = file_get_contents("php://input");

$update = json_decode($content, TRUE);

$message = $update["message"];

//$query = mysqli_query($conn,"insert into telegram (test) values ('".$content."')");

//$query = mysqli_query($conn,"insert into telegram (test) values ('".$message['text']."')");

if(isset($message["photo"])){

      $jawab = 'Gambarnya bagus :D';

      $getcontents = $website."/sendmessage?chat_id=".$chatId."&text=".urlencode($jawab);

}elseif(isset($message["text"])){

      $text = $message["text"];

      if($text === '/fotoku' || $text === '/fotomu'){

            $target_id;

            if($text === '/fotoku'){

                  $target_id = $chatId;

            }else{

                  $bot =      json_decode(file_get_contents($website."/getMe"), TRUE);

                  $target_id = $bot['result']['id'];

            }

            $photo = json_decode(file_get_contents($website."/getUserProfilePhotos?user_id=".$target_id), TRUE);

            if($photo['result']['total_count'] > 0){

                  $photo_id = $photo['result']['photos'][0][2]['file_id'];

                  $getcontents = $website."/sendPhoto?chat_id=".$chatId."&photo=".$photo_id;

            }else{

                  $jawab = $text === '/fotoku' ? 'Anda tidak memiliki foto profil :(' : 'Saya tidak memiliki foto profil :(';

                  $getcontents = $website."/sendmessage?chat_id=".$chatId."&text=".$jawab;

            }

}else{

            $query = mysqli_query($conn,"select informasi from wisata where nama_wisata = '".$text."'");

            if (mysqli_num_rows($query)>0){

                  while ($has = mysqli_fetch_row($query)){

                        $jawab = $has['0'];



                        if(strpos($jawab, '%nama%')){

                              $jawab = str_replace("%nama%", $message['from']['first_name'], $jawab);       

                        }

                  }

            } else {

                  $jawab = "Maaf, Saya tidak tahu apa yang kamu maksud :(";

            }

            $getcontents = $website."/sendmessage?chat_id=".$chatId."&text=".urlencode($jawab);

      }

}