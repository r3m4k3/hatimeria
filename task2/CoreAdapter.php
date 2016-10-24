<?php

class CoreAdapter
{

	private $data = array();

	public function setData(array $data)
	{
		$this->data = $data;
	}

	public function getData()
	{
		return $this->data;
	}

}