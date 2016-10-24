<?php

class CURLAdapter extends CoreAdapter
{

	private $source;

	public function setSource(string $source)
	{
		$this->source = $source;
	}

	public function getData()
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->source);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = json_decode(curl_exec($ch), true);

		return $response;
	}

}