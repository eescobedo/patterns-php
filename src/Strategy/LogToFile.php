<?php namespace Acme\Strategy;

class LogToFile implements Logger
{
    public function log($data)
    {
        var_dump ('Log the data to a file');
    }
}