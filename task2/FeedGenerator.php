<?php

class FeedGenerator
{
	private $formatter;

	public function setFormatter(CoreFormatter $formatter)
	{
		$this->formatter = $formatter;
	}

	public function getResponse()
	{
		return $this->formatter->limitFields()->getResult();
	}

}