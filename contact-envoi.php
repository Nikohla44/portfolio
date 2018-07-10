<?php

  //Variables
  $array = array("firstname" => "", "name" => "", "email" => "", "phone" => "", "message" => "", "firstnameError" => "", "nameError" => "", "emailError" => "", "phoneError" => "", "messageError" => "", "isSuccess" => false);
  $emailTo = "lemellec@live.fr";

  //Envoi des données input dans le serveurs
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array["firstname"] = verifyInput($_POST["firstname"]);
    $array["name"] = verifyInput($_POST["name"]);
    $array["email"] = verifyInput($_POST["email"]);
    $array["phone"] = verifyInput($_POST["phone"]);
    $array["message"] = verifyInput($_POST["message"]);
    $array["isSuccess"] = true;
    $emailText = "";

    // Condition de messages d'erreur
    if(empty($array["firstname"])) {
      $array["firstnameError"] = "Il me faut votre prénom !";
      $array["isSuccess"] = false;
    } else {
      $emailText .= "FirstName : {$array["firstname"]}\n";
    }
    if(empty($array["name"])) {
      $array["nameError"] = "Et oui je veux tout savoir. Même votre nom !";
      $array["isSuccess"] = false;
    } else {
      $emailText .= "Name : {$array["name"]}\n";
    }
    if(!isEmail($array["email"])) {
      $array["emailError"] = "Désolé, je ne pense pas que ce soit un email valide !";
      $array["isSuccess"] = false;
    } else {
      $emailText .= "Email : {$array["email"]}\n";
    }
    if(!isPhone($array["phone"])) {
      $array["phoneError"] = "Que des chiffres et des espaces, s'il-vous-plaît...";
      $array["isSuccess"] = false;
    } else {
      $emailText .= "Phone : {$array["phone"]}\n";
    }
    if(empty($array["message"])) {
      $array["messageError"] = "Écrivez-moi un petit message !";
      $array["isSuccess"] = false;
    } else {
      $emailText .= "Message : {$array["message"]}\n";
    }
    if($array["isSuccess"]) {
      $headers = "From: {$array["firstname"]} {$array["name"]} <{$array["email"]}>\r\nReply_To: {$array["email"]}";
      mail($emailTo, "Un message de votre site", $emailText, $headers);
    }

    echo json_encode($array);
  }

  // Vérification de l'Email
  function isEmail($var) {
    return filter_var($var, FILTER_VALIDATE_EMAIL);
  }

  // Vérification du Téléphone
  function isPhone($var) {
    return preg_match("/^[0-9 ]*$/", $var);
  }


  // Sécurité sur les inputs pour contrer Hacker
  function verifyInput($var) {
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
  }

?>
