<?php


require 'paypal/autoload.php';

define('URL_SITIO', 'http://localhost:3000');

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AULGgdxnD3WNRjWWPEYeG-A0qD_PbmgOcmT5Cx12cnIY3IKa1IOD-d4z1g3LIdMEZcDqyJQLQwPc48R3',//Cliente ID
        'EAV5zheUO12YPXE89ECUjAU6G6YsTkhA2SHRx8CNt8zGmFpLdH9OHFBq9gK1ODHpI5ptibRk1awqhXBm'//Secret
    )
);