<?php

namespace App\Ggrpc;

use Grpc\HiReply;
use Grpc\HiUser;
use Hyperf\Nacos\GrpcClient;
use Hyperf\RpcClient\AbstractServiceClient;

class HiServiceConsumer extends AbstractServiceClient implements HiServiceInterface
{

    /**
     * 定义对应服务提供者的服务名称
     */
    protected string $serviceName = 'HiService';

    /**
     * 定义对应服务提供者的服务协议
     */
    protected string $protocol = 'grpc';

    public function sayHello(HiUser $user)
    {
        return $this->__request(__FUNCTION__, [$user]);
    }
}