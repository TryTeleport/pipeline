<?php
/**
 *  Teleport Framework.
 *
 *  @package Pipeline
 *  @author Mohamed Elbahja <mohamed@elbahja.me>
 */

namespace Atlasio\Pipeline;

use Teleport\Pipeline\Interfaces\{
	StageInterface, PriorityPipelineInterface
};

class PriorityPipeline implements PriorityPipelineInterface
{
	use Traits\ProcessTrait;

	/**
	 * @var \SplPriorityQueue
	 */
	protected $stages;

	/**
	 * {@inheritdoc}
	 */
	public function __construct()
	{
		$this->stages = new \SplPriorityQueue;
	}

	/**
	 * {@inheritdoc}
	 */
	public function pipe($pipe, int $priority): PriorityPipelineInterface
	{
		$this->stages->insert($pipe, $priority);
		return $this;
	}
}
