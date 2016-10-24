<?php

class JSONFormatter extends CoreFormatter
{

	public function convertToSelectedFormat()
	{
		$this->formattedData = json_encode($this->data);
	}
	
}