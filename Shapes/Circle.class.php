<?php

class Circle extends Shape
{

	protected $rayon;


public function __construct(RendererInterface $renderer)
	{
		parent::__construct($renderer);

	}

	public function draw(string $id) : Shape
	{
		$attributes = [
			'cx' => $this->location->getX(),
			'cy' => $this->location->getY(),
			'r' => $this->rayon,
		];
		$styles = [
			'opacity' => $this->opacity,
			'fill' => $this->color
		];
		$this->renderer->make($id, 'circle', $attributes, $styles);

		return $this;
	}

	public function setSize(int $width, int $height = null) : self
	{
		$this->rayon = $width;
		//$this->width  = $width;

		return $this;
	}
}
