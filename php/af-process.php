<?php
$name = $_POST["afName"];
$email = $_POST["afEmail"];
$phone_ddd = $_POST["afPhoneDdd"];
$phone_number = $_POST["afPhoneNum"];
// $pj = $_POST["inputPj"];
$inputRadio = isset($_POST["pfpj"]);

// if (isset($_POST['pfpj']) && $_POST['pfpj'] == 'pf') {
//     $inputPf_Pj = "Pessoa Fisica";
//   } else {
//     $inputPf_Pj = "Pessoa Jurídica";
//   }
 
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

$Body .= $inputRadio;
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