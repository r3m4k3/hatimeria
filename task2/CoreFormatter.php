<?php

abstract class CoreFormatter
{

	protected $data = array();
	protected $fields = array();
	protected $formattedData;

	public function setData(array $data)
	{
		$this->data = $data;
	}

	public function limitFields()
	{
		$this->data = array_intersect_key($this->data, array_flip($this->fields));
		return $this;
	}

	public function setFields(array $fields)
	{
		$this->fields = $fields;
	}

	public function getResult()
	{
		$this->convertToSelectedFormat();
		return $this->formattedData;
	}

	abstract public function convertToSelectedFormat();
	
}