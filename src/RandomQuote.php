<?php
namespace RandomQuotes;

class RamdonQuote{
    private $quote = '';

    public function __construct()
    {
        $this->quote = "Hello, This is a new Quote";
    }
    public function getQuotes()
    {
        return $this->quote;
    }
}