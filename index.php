<?php

use Acme\Adapters\Book;
use Acme\Adapters\BookInterface;
use Acme\Adapters\eReaderAdapter;
use Acme\Adapters\Kindle;
use Acme\Adapters\Nook;

require 'vendor/autoload.php';

class Person
{
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }

}

(new Person)->read(new Book);

(new Person)->read(new eReaderAdapter(new Kindle));
(new Person)->read(new eReaderAdapter(new Nook()));
