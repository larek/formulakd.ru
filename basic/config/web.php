<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'language' => 'ru',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
            'layout' => 'main',
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'ghbdtnrfrltkf',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'mail' => [
         'class' => 'yii\swiftmailer\Mailer',
         //'useFileTransport' => true,
         'transport' => [
             'class' => 'Swift_SmtpTransport',
             'host' => 'smtp.yandex.ru',  // e.g. smtp.mandrillapp.com or smtp.gmail.com
             'username' => 'sender@larek.pro',
             'password' => 'avatar910',
             'port' => '587', // Port 25 is a very common port too
             'encryption' => 'tls', // It is often used, check your provider or mail server specs
         ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'admin' => 'admin/default',
                'news' => 'news/index',
                'news/<id>' => 'news/view',
                'projects' => 'site/projects',
                'projects/<id>' => 'site/project-single',
                '2017' => 'site/2017',
                'callback-page' => 'site/callback-page',
                'razrabotka-kd' => 'site/services',
                'services' => 'site/services',
                'about' => 'site/about2',
                'contacts' => 'site/contact2',
                '/simple-page' => 'site/simple-page',
                '/<guid>' => 'site/view',
                '/' => 'site/2017',
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['*'],
    ];
}

return $config;
