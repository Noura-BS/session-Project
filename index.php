<?php
    require 'class/Session.php';

$session = new Session();


//method set
$session->nom = 'Nono';

////method get(voir class Session)
var_dump($session->nom);

//application method isset (voir classe Session)
var_dump(isset($session->adresse));

//application method unset (voir classe Session)
unset($session->nom);
var_dump($session);


?>