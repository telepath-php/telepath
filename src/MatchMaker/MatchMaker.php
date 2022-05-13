<?php

namespace Tii\Telepath\MatchMaker;

class MatchMaker
{

    protected bool $result;

    public function __construct(
        protected string $text,
        protected Mode $mode = Mode::AND,
    ) {

        $this->result = match ($this->mode) {
            Mode::AND => true,
            Mode::OR  => false,
        };

    }

    public static function conjunction(string $text)
    {
        return new static($text, Mode::AND);
    }

    public static function disjunction(string $text)
    {
        return new static($text, Mode::OR);
    }

    public function result(): bool
    {
        return $this->result;
    }

    public function prefix(?string $prefix)
    {
        if (is_null($prefix)) {
            return $this;
        }

        $this->value(str_starts_with($this->text, $prefix));

        return $this;
    }

    public function suffix(?string $suffix)
    {
        if (is_null($suffix)) {
            return $this;
        }

        $this->value(str_ends_with($this->text, $suffix));

        return $this;
    }

    public function exact(?string $exact)
    {
        if (is_null($exact)) {
            return $this;
        }

        $this->value($this->text === $exact);

        return $this;
    }

    public function regex(?string $regex)
    {
        if (is_null($regex)) {
            return $this;
        }

        $this->value(preg_match($regex, $this->text) !== false);

        return $this;
    }

    public function is_numeric(?bool $is_numeric)
    {
        if (is_null($is_numeric)) {
            return $this;
        }

        $this->value(is_numeric($this->text) === $is_numeric);

        return $this;
    }

    public function value(bool $value)
    {
        $this->result = match ($this->mode) {
            Mode::AND => $this->result && $value,
            Mode::OR  => $this->result || $value,
        };

        return $this;
    }

}