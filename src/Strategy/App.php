<?php namespace Acme\Strategy;

class App
{
    /**
     * @param $data
     * @param Logger $logger
     */
    public function log($data, Logger $logger = null)
    {
        $logger = $logger ?: new LogToFile;
        $logger->log($data);
    }
}