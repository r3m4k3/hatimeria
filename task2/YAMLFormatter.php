<?php

class YAMLFormatter extends CoreFormatter
{

	public function convertToSelectedFormat()
	{
		$this->formattedData = yaml_emit($this->data);
	}
	
}