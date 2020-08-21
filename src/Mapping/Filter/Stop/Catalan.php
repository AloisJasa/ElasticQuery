<?php declare(strict_types = 1);

namespace Spameri\ElasticQuery\Mapping\Filter\Stop;

/**
 * @see https://github.com/apache/lucene-solr/tree/master/solr/example/files/conf/lang
 */
class Catalan extends \Spameri\ElasticQuery\Mapping\Filter\AbstractStop
{

	public function getStopWords() : array
	{
		return [
			\Spameri\ElasticQuery\Mapping\Analyzer\Stop\StopWords::CATALAN,
		];
	}


	public function getName() : string
	{
		return 'catalanStopWords';
	}

}
