<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class MaskPosition extends \Tii\Telepath\Type
{
    public string $point;

    public float $x_shift;

    public float $y_shift;

    public float $scale;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}

