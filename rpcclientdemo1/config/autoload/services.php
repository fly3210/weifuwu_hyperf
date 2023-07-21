<?php

use function Hyperf\Support\env as envAlias;
$nacAddress = envAlias('NACOS_HOST') . ':' . envAlias('NACOS_PORT', 8848);
return [
    'enable' => [
        'discovery' => true,
        'register' => true,
    ],
    'consumers' => [
        [
            'name' => 'CalculatorService',
            'registry' => [
                'protocol' => 'nacos',
                'address' => $nacAddress,
            ]
        ],
        [
            "name" => "HiService",
            "registry" => [
                "protocol" => "nacos",
                "address" => $nacAddress,
            ]
        ]
    ],
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
