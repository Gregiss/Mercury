<?php
//Created by kaway404 
$keywords = 'cheats,csgo,c++,hack'; //Keywords (palavras chaves)
$title = 'Mercury Cheats'; //Title of site (Titutlo do site)
$theme = 'dark'; //Themes disponiveis, dark || white
$manutencao = 0; //Manuntencao , 0 - desativado, 1 - ativado
$errormessage = 'Estamos em manutenção volte mais tarde!'; //Mensangem de manuntencao

$work = 1; //Protect

//Config MySql
$username = 'sql10289742';
$password = 'SnjxlmBXbp';

if($manutencao == 0){
//Conexao com o banco de dados
require 'database.php';
if(isset($_COOKIE['iduser']) || isset($_COOKIE['cry'])){
  $PDO = db_connect();
 
  $iduser = $_COOKIE['iduser'];
  $cry = $_COOKIE['cry'];

  $sql = "SELECT id, cry, email, username FROM users WHERE id = :iduser AND cry = :cry";
  $stmt = $PDO->prepare($sql);
  
  $stmt->bindParam(':iduser', $iduser);
  $stmt->bindParam(':cry', $cry);
  
  $stmt->execute();
  
  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
  if (count($users) <= 0)
  {
  setcookie("iduser", "");
  setcookie("cry", "");
  }

  $user = $users[0];
  if($user['cry'] <> $cry){
    setcookie("iduser", "");
    setcookie("cry", "");
  }

}
require('vendor/autoload/template/index.php');
}
else{
  require_once('vendor/autoload/template/html/error/manu.php');
}

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);