<?php

$errors = new TemplatePower('tpl/errors.tpl');
$errors->prepare();

try{
    $db = new PDO('mysql:host=localhost;dbname=yol;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $error)
{
    //print "er is een error: ".$error->getFile()." ".$error->getLine();
    $errors->newBlock("ERRORS");
    $errors->assign("ERROR", "er is een error: ".$error->getFile()." ".$error->getLine());
}
