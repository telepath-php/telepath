<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class Invoice extends \Tii\Telepath\Type
{
    public string $title;

    public string $description;

    public string $start_parameter;

    public string $currency;

    public int $total_amount;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}

