<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

use Tii\Telepath\Types\Type;

/**
 * Contains information about a Web App.
 */
class WebAppInfo extends Type
{
    /** An HTTPS URL of a Web App to be opened with additional data as specified in Initializing Web Apps */
    public string $url;

    /**
     * @param string $url An HTTPS URL of a Web App to be opened with additional data as specified in Initializing Web Apps
     */
    public static function make(string $url): static
    {
        return new static([
            'url' => $url,
        ]);
    }
}
