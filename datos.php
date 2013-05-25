<?php

$wsdl = "http://informatica.utem.cl:8011/dirdoc-auth/ws/auth?wsdl";
$autenticacion = array('rut' => $_POST['rut'],'password' => hash('sha256',$_POST['pw']));
$client = new SoapClient($wsdl, $autenticacion);
$result = $client->autenticar($autenticacion);
print_r($result);

?>
