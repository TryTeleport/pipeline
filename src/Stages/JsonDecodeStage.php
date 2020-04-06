<?php
/**
 *  Teleport Framework.
 *
 *  @package Pipeline
 *  @author Mohamed Elbahja <mohamed@elbahja.me>
 */

namespace Teleport\Pipeline\Stages;

use Teleport\Pipeline\Interfaces\StageInterface;

class JsonDecodeStage implements StageInterface
{
	public function process($payload)
	{
		return json_decode($payload);
	}
}
