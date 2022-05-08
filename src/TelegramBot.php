<?php

namespace Tii\Telepath;

use Tii\Telepath\Layer\Generated;
use Tii\Telepath\Telegram\Update;

class TelegramBot extends Generated
{

    public function handleWebhook(): bool
    {
        $input = file_get_contents('php://input');

        if (empty($input)) {
            return false;
        }

        $json = json_decode($input, true);

        if ($json === null) {
            return false;
        }

        $update = new Update($json);

        // TODO: Call corresponding handler

        return true;
    }

    public function handlePolling(): never
    {
        while (true) {

            $updates = $this->getUpdates(timeout: 60);

            foreach ($updates as $update) {

                // TODO: Call corresponding handlers

            }

        }
    }

}