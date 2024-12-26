<?php

namespace App\MessageHandler;

use Psr\Log\LoggerInterface;
use App\Message\ImporterMessage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
final class ImporterMessageHandler
{

    public function __construct(private LoggerInterface $logger) {}

    public function __invoke(ImporterMessage $message): void
    {
        // do something with your message
    }

}
