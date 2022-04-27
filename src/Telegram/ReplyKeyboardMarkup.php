<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class ReplyKeyboardMarkup extends \Tii\Telepath\Type
{
    /**
     * @var KeyboardButton[][]
     */
    public array $keyboard;

    public bool $resize_keyboard;

    public bool $one_time_keyboard;

    public string $input_field_placeholder;

    public bool $selective;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}

