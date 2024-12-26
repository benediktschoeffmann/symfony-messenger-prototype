<?php

namespace App\MessageHandler;

use App\Message\SimpleMessage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
final class SimpleMessageHandler
{
    public function __invoke(SimpleMessage $message): void
    {
        // do something with your message
    }
}
