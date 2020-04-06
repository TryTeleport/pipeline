# Teleport Pipeline.

The teleport pipeline design pattern implementation.

```php

class AddBazPipeline implements Teleport\Pipeline\Interfaces\StageInterface
{

	public function process($payload)
	{
		$payload->baz = "my value";
		return $payload;
	}
}


$pipeline = new Teleport\Pipeline\Pipeline;

$pipeline
	->pipe(new Teleport\Pipeline\Stages\JsonDecodeStage)
	->pipe(new AddBazPipeline)
	->pipe(function($payload)
	{
		$payload->x = "y";
		return $payload;
	})
	->pipe(new Teleport\Pipeline\Stages\JsonEncodeStage);


echo $pipeline->process('{"foo": "bar"}');

```

