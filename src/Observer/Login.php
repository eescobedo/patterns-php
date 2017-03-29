<?php

namespace Acme\Observer;

class Login implements Subject
{
    protected $observers;

    public function attach($observable)
    {
        if (is_array($observable)) {
            return $this->attachObservers($observable);
        }

        $this->observers[] = $observable;

        return $this;
    }

    /**
     * @param $observable
     */
    public function attachObservers($observable)
    {
        foreach ($observable as $observer) {

            if (!$observer instanceof Observer) {
                throw new Exception;
            }

            $this->attach($observer);
        }
    }

    public function fire()
    {
        // perform the login
        $this->notify();
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->handle();
        }
    }

    public function detach($index)
    {
        unset($this->observers[$index]);
    }
}