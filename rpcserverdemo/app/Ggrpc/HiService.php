<?php

namespace App\Ggrpc;

use Grpc\HiReply;
use Grpc\HiUser;
use Hyperf\RpcServer\Annotation\RpcService;

#[RpcService(name: 'HiService', server: 'grpc', protocol: 'grpc', publishTo: 'nacos')]
class HiService implements HiServiceInterface
{
    public function sayHello(HiUser $user): HiReply
    {
        var_dump($user);
        $message = new HiReply();
        $message->setMessage($user->getName());
        $message->setUser($user);
        return $message;
    }
}