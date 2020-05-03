<?php

// APPEL A GETALLUSER
// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => "http://localhost/api/services/UtilisateurService.php",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "GET",
// ));

// $response = json_decode(curl_exec($curl),true);

// curl_close($curl);

// print_r($response["results"][0]["_login"]);


// APPEL A GETUSER AVEC UN LOGIN EN PARAMETRE DE L'URL
// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => "http://localhost/api/services/UtilisateurService.php?login=tsutter",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "GET",
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;



// APPEL A DELETEUSER AVEC UN LOGIN DANS LE BODY
// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => "http://localhost/api/services/UtilisateurService.php",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "DELETE",
//   CURLOPT_POSTFIELDS =>"{\r\n    \"login\" : \"testu15\"\r\n}",
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;









// // HTTP REQUEST2  creer un utilisateur
// require_once 'HTTP/Request2.php';
// $request6 = new HTTP_Request2($url, HTTP_Request2::METHOD_GET);
// $request = new HTTP_Request2();
// $request->setUrl('http://localhost/api/services/UtilisateurService.php');
// $request->setMethod(HTTP_Request2::METHOD_POST);
// $request->setConfig(array(
//   'follow_redirects' => TRUE
// ));
// $request->setHeader(array(
//   'Content-Type' => 'text/plain'
// ));
// $request->setBody('{
// \n    "login" : "bbbbbbb",
// \n    "password" : "azerty",
// \n    "email" : "toto@toto.fr",
// \n    "nom" : "toto",
// \n    "prenom" : "azertyuio"
// \n}');
// try {
//   $response = $request->send();
//   if ($response->getStatus() == 200) {
//     echo $response->getBody();
//   }
//   else {
//     echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
//     $response->getReasonPhrase();
//   }
// }
// catch(HTTP_Request2_Exception $e) {
//   echo 'Error: ' . $e->getMessage();
// }



?>