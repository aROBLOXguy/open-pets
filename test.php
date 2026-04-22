<?php $string = '{
	"created_at":"Fri, 20 Mar 2026 09:03:34 +0000",
	"id":423004,
	"id_str":"423004",
	"text":"every time i visit spacehey i want to make a myspace revival because there no way that shit is the ONLY one still running man",
	"source":"web",
	"in_reply_to_status_id":null,
	"in_reply_to_status_id_str":null,
	"in_reply_to_username":null,
	"user":{
		"name":"Rue",
		"username":"furgotten12",
		"profile_image_url":"https:\/\/blips.cc\/assets\/users\/avatars\/furgotten12.png?1772261686"
		}
	}';
$encoded = json_encode($string);
$decoded = json_decode($encoded, true);
$exploded = explode('"', $decoded);;
var_dump($decoded);
echo $exploded[1];
?>