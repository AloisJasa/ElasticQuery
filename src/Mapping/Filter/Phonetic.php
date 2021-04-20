<?php declare(strict_types = 1);

namespace Spameri\ElasticQuery\Mapping\Filter;

/**
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/analysis-phonetic-tokenfilter.html
 */
class Phonetic implements \Spameri\ElasticQuery\Mapping\FilterInterface
{

	public function getType(): string
	{
		return 'phonetic';
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
