<?php

namespace App\Ggrpc;

use Grpc\HiReply;
use Grpc\HiUser;

interface HiServiceInterface
{
    public function sayHello(HiUser $user): HiReply;
}