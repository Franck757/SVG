<?php

class Ellipse extends Shape
{

  protected $rayon;
	protected $rayonVertical;


public function __construct(RendererInterface $renderer)
	{
		parent::__construct($renderer);

	}

	public function draw(string $id) : Shape
	{
		$attributes = [
			'cx' => $this->location->getX(),
			'cy' => $this->location->getY(),
			'rx' => $this->rayon,
      'ry' => $this->rayonVertical,

		];
		$styles = [
			'opacity' => $this->opacity,
			'fill' => $this->color
		];
		$this->renderer->make($id, 'ellipse', $attributes, $styles);

		return $this;
	}

	public function setSize(int $width, int $height) : self
	{
		$this->rayon = $height;
		$this->rayonVertical  = $width;

		return $this;
	}
}
