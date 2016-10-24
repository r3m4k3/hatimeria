<?php

class ExampleIterator implements \Iterator, \Countable
{
	private $index = 0;
	private $arr = array();

	public function setData(array $arr)
	{
		$this->arr = $arr;
	}

    public function current() 
    { 
    	return $this->arr[$this->index];
    }

    public function key() 
    { 
    	return $this->index;
    }

    public function next() 
    {
        return $this->index+=2;
    }

    public function rewind() 
    {  
    	$this->index = 1;
    }

    public function valid() 
    {
    	return array_key_exists($this->index, $this->arr);
    }

    public function count()
    {
    	return count($this->arr);
    }

}