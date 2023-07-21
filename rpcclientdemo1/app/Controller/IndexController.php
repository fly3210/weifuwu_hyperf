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
namespace App\Controller;

use App\Ggrpc\HiServiceInterface;
use App\JsonRpc\CalculatorServiceInterface;
use Grpc\HiReply;
use Grpc\HiUser;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Grpc\Parser;

class IndexController extends AbstractController
{
    #[Inject]
    protected CalculatorServiceInterface $calculatorService;

    #[Inject]
    protected HiServiceInterface $hiService;

    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        $u = new HiUser();
        $u->setName('Fly321');
        $u->setSex(1);
        /** @var HiReply $r */
        $r = Parser::deserializeMessage([
            HiReply::class, "decode"
        ], $this->hiService->sayHello($u));

        return [
            'method' => $method,
            'message' => "Hello {$user}.",
            "result" => $this->calculatorService->add(1, 2),
            "grpc" => [
                "msg" => $r->getMessage(),
                "user" => $r->getUser()->serializeToJsonString()
            ]
        ];
    }
}
