<?php
/**
 *  Teleport Framework.
 *
 *  @package Pipeline
 *  @author Mohamed Elbahja <mohamed@elbahja.me>
 */

namespace Teleport\Pipeline;

use Teleport\Pipeline\Interfaces\{
	StageInterface, PipelineInterface
};

class Pipeline implements PipelineInterface
{

	use Traits\ProcessTrait;

	/**
	 * Pipeline stages.
	 *
	 * @var array
	 */
	protected $stages = [];

	/**
	 * {@inheritdoc}
	 */
	public function __construct(array $pipes = [])
	{
		foreach ($pipes as $pipe)
		{
			$this->pipe($pipe);
		}
	}

	/**
	 * {@inheritdoc}
	 */
	public function pipe($pipe): PipelineInterface
	{
		$this->stages[] = $pipe;
		return $this;
	}
}