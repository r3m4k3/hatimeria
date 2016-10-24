<?php

class Example implements \IteratorAggregate
{
    private $source = array();
    private $iterator;

    public function setItems(array $source)
    {
    	$this->source = $source;
    }

    public function setIterator(\Iterator $iterator)
    {
    	$this->iterator = new $iterator($this);
    }

    public function getIterator()
    {
    	$this->iterator->setData($this->source);
    	return $this->iterator;
    }
}