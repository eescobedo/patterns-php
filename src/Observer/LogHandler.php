<?php

namespace Acme\Observer;

class LogHandler implements Observer
{
    public function handle()
    {
        var_dump('Log something important.');
    }
}