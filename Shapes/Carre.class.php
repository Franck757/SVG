<?php

class Carre extends Rectangle
{

	public function setSize(int $width, int $height = null)
	{
		$this->height = $width;
		$this->width  = $width;
		
		return $this;
	}
}
