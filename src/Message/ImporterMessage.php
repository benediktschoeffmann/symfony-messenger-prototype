<?php

namespace App\Message;

use DateTime;

final class ImporterMessage implements AsyncMessageInterface
{

    public function __construct(
        public readonly int $baseStationId,
        public readonly int $timestamp,
        public readonly array $data
    ) {
    }
}
