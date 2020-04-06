<?php
/**
 *  Teleport Framework.
 *
 *  @package Pipeline
 *  @author Mohamed Elbahja <mohamed@elbahja.me>
 */

namespace Teleport\Pipeline\Stages;

use Teleport\Pipeline\Interfaces\StageInterface;

class JsonEncodeStage implements StageInterface
{
	public function process($payload)
	{
		return json_encode($payload);
	}
}
