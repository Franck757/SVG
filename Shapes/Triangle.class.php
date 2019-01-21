<?php

class Triangle extends Shape
{
  protected $points;
	protected $height;

	protected $width;

public function __construct(RendererInterface $renderer)
	{
		parent::__construct($renderer);

		$this->height = 0;
		$this->width  = 0;
	}

	public function draw(string $id) : Shape
	{
		$attributes = [
			'points' => $this->points,
		];
		$styles = [
			'opacity' => $this->opacity,
			'fill' => $this->color
		];
		$this->renderer->make($id, 'polygon', $attributes, $styles);

		return $this;
	}


}
