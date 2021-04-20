<?php declare(strict_types = 1);

namespace Spameri\ElasticQuery\Mapping\Filter;

/**
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/analysis-htmlstrip-charfilter.html
 */
class HtmlStrip implements \Spameri\ElasticQuery\Mapping\FilterInterface
{

	public function getType(): string
	{
		return 'html_strip';
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
