<?php

namespace App\JsonRpc;

use Hyperf\RpcServer\Annotation\RpcService;

#[RpcService(name: 'CalculatorService', server: 'jsonrpc-http', protocol: 'jsonrpc-http', publishTo: 'nacos')]
class CalculatorService implements CalculatorServiceInterface
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }
}