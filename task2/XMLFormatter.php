<?php

class XMLFormatter extends CoreFormatter
{

	public function getResult()
	{
		header('Content-type: application/xml; charset="utf-8"');
		$this->convertToSelectedFormat();
		return $this->formattedData; 
	}

	public function convertToSelectedFormat($data = null, $rootElement = null, $xml = null)
	{

		if ($xml === null)
	    	$xml = new SimpleXMLElement($rootElement !== null ? $rootElement : '<root/>');

	    if ($data === null)
	    	$data = $this->data;

	    foreach ($this->data as $k => $v) {
	    	if(is_array($v)) 
	    		convertToSelectedFormat($v, $k, $_xml->addChild($k));
	    	else
	    		$xml->addChild($k, $v);
	    }

	    $this->formattedData = $xml->asXML();

	}
	
}