<?php
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
  header("Access-Control-Allow-Headers: Content-Type, Authorization");

  $game_link = array( 
      "gameLink" => "https://google.com"
    );
  echo json_encode($game_link);
?>