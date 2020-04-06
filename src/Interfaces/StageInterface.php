<?php
/**
 *  Teleport Framework.
 *
 *  @package Pipeline
 *  @author Mohamed Elbahja <mohamed@elbahja.me>
 */

namespace Teleport\Pipeline\Interfaces;

interface StageInterface
{

	/**
	 * Process a payload in the pipeline.
	 *
	 * @param  mixed $payload
	 * @return mixed
	 */
	public function process($payload);
}
