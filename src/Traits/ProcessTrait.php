<?php
/**
 *  Teleport Framework.
 *
 *  @package Pipeline
 *  @author Mohamed Elbahja <mohamed@elbahja.me>
 */

namespace Teleport\Pipeline\Traits;

use Teleport\Pipeline\Interfaces\StageInterface;

trait ProcessTrait
{
	/**
	 * {@inheritdoc}
	 */
	public function process($payload)
	{
		foreach ($this->stages as $pipe)
		{
			switch (true)
			{
				case $pipe instanceof StageInterface:
					$payload = $pipe->process($payload);
					break;

				case $pipe instanceof \Closure:
					$payload = $pipe($payload);
					break;
				
				default:
					throw new \Exception("Stage should be an instance of StageInterface or Closure in: ". get_class($pipe), 1);
			}
		}

		return $payload;
	}
}
