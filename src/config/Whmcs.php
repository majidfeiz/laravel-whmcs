<?php
return [
    // API URL
    'url'		=>	env('WHMCS_URL', 'http://localhost:2000/includes/api.php'),

    // API USERNAME
    'username'	=>	env('WHMCS_USERNAME','admin_user'),

    // API PASSWORD
    'password'	=> env('WHMCS_PASSWORD','password123'),

    // API RESPONSE TYPE
    'response_type'	=> env('WHMCS_RESPONSE_TYPE','json'), // json or xml
];
