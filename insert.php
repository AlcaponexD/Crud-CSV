<?php include_once "conect/conexao.php";
$smtm = $cnn->prepare("insert into clients(name, cellphone , birthday , gender, blouse , pants, top, biquinitop, shoes, obs) VALUES (:name, :cellphone, :birthday , :gender, :blouse, :pants, :top, :biquinitop, :shoes, :obs)");

$name = $_POST['name'];
$cellphone = $_POST['cellphone'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$blouse = $_POST['blouse'];
$pants = $_POST['pants'];
$top = $_POST['top'];
$biquinitop = $_POST['biquinitop'];
$shoes = $_POST['shoes'];
$obs = $_POST['obs'];

$smtm->bindParam(":name", $name);
$smtm->bindParam(":cellphone", $cellphone);
$smtm->bindParam(":birthday", $birthday);
$smtm->bindParam(":gender", $gender);
$smtm->bindParam(":blouse", $blouse);
$smtm->bindParam(":pants", $pants);
$smtm->bindParam(":top", $top);
$smtm->bindParam(":biquinitop", $biquinitop);
$smtm->bindParam(":shoes", $shoes);
$smtm->bindParam(":obs", $obs);


$smtm ->execute();


    if($smtm->rowcount()<=0){
        echo '<script>alert("Ocorreu um erro!!"); </script>';
    }else{
        echo '<script>alert("Cadastrado com sucesso!!"); </script>';
        header('Location: index.php');
    }
?>