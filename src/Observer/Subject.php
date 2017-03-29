<?php

namespace Acme\Observer;

interface Subject
{
    public function attach($observable);

    public function detach($observer);

    public function notify();
}