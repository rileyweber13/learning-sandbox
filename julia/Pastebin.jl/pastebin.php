$api_dev_key 		= '4f206cedc22167732bfdc7ee42e49fd8';
$api_user_name 		= 'a_users_username';
$api_user_password 	= 'a_users_password';
$api_user_name 		= urlencode($api_user_name);
$api_user_password 	= urlencode($api_user_password);
$url			= 'https://pastebin.com/api/api_login.php';
$ch			= curl_init($url);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'api_dev_key='.$api_dev_key.'&api_user_name='.$api_user_name.'&api_user_password='.$api_user_password.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_NOBODY, 0);

print($ch);

$response 		= curl_exec($ch);
echo $response;

