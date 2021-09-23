<?php
$name = $_POST["afName"];
$email = $_POST["afEmail"];
$phone_ddd = $_POST["afPhoneDdd"];
$phone_number = $_POST["afPhoneNum"];
// $pj = $_POST["inputPj"];
if (isset($_POST['inputPj'])) {
    $inputPj = "yes";
  } else {
    $inputPj = "no";
  }
// $pf = $_POST["inputPf"];
if (isset($_POST['inputPf'])) {
    $inputPf = "yes";
  } else {
    $inputP = "no";
  }
 
$EmailTo = "martins.diegoluis@gmail.com";
$Subject = "Novo cadastro no site de " . $name;
 
// prepare email body text
$Body = "Nome: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
 
$Body .= "Telefone: (".$phone_ddd.") ";
$Body .= $phone_number;
$Body .= "\n";

$Body .= "Pessoa Jurídica ";
$Body .= $inputPj;
$Body .= "\n";

$Body .= "Pessoa Física ";
$Body .= $inputPf;
$Body .= "\n";
 
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
 
?>