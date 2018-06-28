<?php
$ip = $_SERVER['REMOTE_ADDR']; // Recuperation de l'IP du visiteur
// $ip = get_ip();
function get_country() {
    $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip)); //connection au serveur de ip-api.com et recuperation des données
if($query && $query['status'] == 'success') 
{
    //code avec les variables
  //  echo "Bonjour visiteur de " . $query['country'] . "," . $query['city'];
  return array(
	  'country' => $query['country'],
	  'region' => $query['regionName']
  );
}
//  else {
//     echo "Erreur de connection à l'adresse: ". $ip;
// }
}


function get_ip() {
	// IP si internet partagé
	if (isset($_SERVER['HTTP_CLIENT_IP'])) {
		return $_SERVER['HTTP_CLIENT_IP'];
	}
	// IP derrière un proxy
	elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		return $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	// Sinon : IP normale
	else {
		return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
    }
}
?>