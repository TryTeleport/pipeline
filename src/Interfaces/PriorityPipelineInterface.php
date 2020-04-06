<?php
/**
 *  Teleport Framework.
 *
 *  @package Pipeline
 *  @author Mohamed Elbahja <mohamed@elbahja.me>
 */

namespace Teleport\Pipeline\Interfaces;

interface PriorityPipelineInterface extends StageInterface
{
	/**
	 * Pass a pipe to pipeline with priority.
	 *
	 * @param  StageInterface|Closure  $pipe
	 * @param  int $priority
	 * @return PriorityPipelineInterface
	 */
	public function pipe($pipe, int $priority = 5): PriorityPipelineInterface;
}
