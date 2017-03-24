<?php namespace Acme\Strategy;

class LogToXWebService implements Logger
{
    public function log($data)
    {
        var_dump ('Log the data to a Saas site.');
    }
}