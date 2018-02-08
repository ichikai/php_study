<?php

class State
{
    protected static $state;

    public static function setState($state)
    {
        self::$state = $state;
    }

    public function getState()
    {
        return static::$state;
    }
}

State::setState('hoge');
$state1 = new State();
echo $state1->getState() . PHP_EOL; // hoge

State::setState('hogehoge');
$state2 = new State();
echo $state2->getState() . PHP_EOL; // hogehoge

// 上書きされている！
echo $state1->getState() . PHP_EOL; // hogehoge
