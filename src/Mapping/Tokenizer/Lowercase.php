<?php declare(strict_types = 1);

namespace Spameri\ElasticQuery\Mapping\Tokenizer;

/**
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/analysis-lowercase-tokenizer.html
 */
class Lowercase implements \Spameri\ElasticQuery\Mapping\TokenizerInterface
{

	public function getType(): string
	{
		return 'lowercase';
	}


	public function toArray(): array
	{
		// TODO: Implement toArray() method.
	}


	public function key(): string
	{
		// TODO: Implement key() method.
	}

}
