<?php 

$user_ip = $_SERVER["HTTP_CF_CONNECTING_IP"] ?? $_SERVER['REMOTE_ADDR'];
echo $user_ip;
$ipdat = @json_decode(file_get_contents(
    "http://www.geoplugin.net/json.gp?ip=" . $user_ip
));

$ip_country = $ipdat->geoplugin_countryName;
if($ip_country!=''){
    $ip_country = $ipdat->geoplugin_countryName;
}else{
    $ip_country = 'United States';
}
$ip_city = $ipdat->geoplugin_city;
$ip_timezone = $ipdat->geoplugin_timezone;
$ip_gsm_data = $ip_country . ' ' . $ip_city . ' ' . $ip_timezone;

echo $ip_gsm_data;
?>
