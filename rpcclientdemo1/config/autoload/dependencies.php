<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    \App\JsonRpc\CalculatorServiceInterface::class => \App\JsonRpc\CalculatorServiceConsumer::class,
    \App\Ggrpc\HiServiceInterface::class => \App\Ggrpc\HiServiceConsumer::class
];
