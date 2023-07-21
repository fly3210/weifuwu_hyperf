<?php
use function Hyperf\Support\env as envAlias;

return [
    'enable' => [
        'discovery' => true,
        'register' => true,
    ],
    'consumers' => [],
    'providers' => [],
    'drivers' => [
        'nacos' => [
            // nacos server url like https://nacos.hyperf.io, Priority is higher than host:port
            // 'url' => '',
            // The nacos host info
            'host' => envAlias('NACOS_HOST'),
            'port' => envAlias('NACOS_PORT', 8848),
            // The nacos account info
            'username' => envAlias('NACOS_USERNAME'),
            'password' => envAlias('NACOS_PASSWORD'),
            'heartbeat' => 5,
        ],
    ],
];
