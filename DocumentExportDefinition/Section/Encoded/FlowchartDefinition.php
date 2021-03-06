<?php
namespace DocumentExportDefinition\Section\Encoded;

use JMS\Serializer\Annotation as Serializer;

class FlowchartDefinition extends AbstractEncodedDataDefinition
{
	/**
	 * @Serializer\SerializedName("width")
	 * @Serializer\Type("integer")
	 */
	protected $width;
	/**
	 * @Serializer\SerializedName("height")
	 * @Serializer\Type("integer")
	 */
	protected $height;

	public function getType()
	{
		return 'FlowchartDefinition';
	}

	/**
	 * @param int $width
	 */
	public function setWidth($width)
	{
		$this->width = $width;
	}

	/**
	 * @return int
	 */
	public function getWidth()
	{
		return $this->width;
	}

	/**
	 * @param int $height
	 */
	public function setHeight($height)
	{
		$this->height = $height;
	}

	/**
	 * @return int
	 */
	public function getHeight()
	{
		return $this->height;
	}
}
