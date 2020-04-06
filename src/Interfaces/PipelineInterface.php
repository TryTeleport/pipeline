<?php
/**
 *  Teleport Framework.
 *
 *  @package Pipeline
 *  @author Mohamed Elbahja <mohamed@elbahja.me>
 */

namespace Teleport\Pipeline\Interfaces;

interface PipelineInterface extends StageInterface
{

	/**
	 * Start new pipeline
	 *
	 * @param Closure|StageInterface[] $pipes
	 */
	public function __construct(array $pipes = []);

	/**
	 * Pass a pipe to pipeline
	 *
	 * @param StageInterface|Closure  $pipe
	 * @return PipelineInterface
	 */
	public function pipe($pipe): PipelineInterface;
}
