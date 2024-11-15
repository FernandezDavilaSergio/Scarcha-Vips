<?php
require 'vendor/autoload.php'; // Asegúrate de instalar la SDK de Auth0 con Composer

use Auth0\SDK\Auth0;

$auth0 = new Auth0([
    'domain'        => 'TU_DOMAIN_AUTH0',  // Reemplaza con tu dominio Auth0
    'client_id'     => 'TU_CLIENT_ID',     // Reemplaza con tu Client ID
    'client_secret' => 'TU_CLIENT_SECRET', // Reemplaza con tu Client Secret
    'redirect_uri'  => 'http://localhost/auth0_callback.php',
    'audience'      => 'https://TU_DOMAIN_AUTH0/userinfo',
    'scope'         => 'openid profile email',
    'persist_user'  => true,
]);
