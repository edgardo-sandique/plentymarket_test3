<?php
namespace IO\Services\ItemLoader\Contracts;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\SearchInterface;

/**
 * Created by ptopczewski, 06.01.17 15:04
 * Class ItemLoaderContract
 * @package IO\Services\ItemLoader\Contracts
 */
interface ItemLoaderContract
{
	/**
	 * @return SearchInterface
	 */
	public function getSearch();

	/**
	 * @param array $options
	 * @return TypeInterface[]
	 */
	public function getFilterStack($options = []);
}