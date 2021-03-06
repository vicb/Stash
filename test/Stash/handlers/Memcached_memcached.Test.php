<?php

class StashMemcached_memcachedTest extends StashMemcached_memcacheTest
{
	protected $extension = 'memcached';

	protected function getOptions()
	{
		$options = parent::getOptions();
		$memcachedOptions = array(	'hash'				=> 'default',
									'distribution'		=> 'modula',
									'serializer'		=> 'php',
									'buffer_writes'		=> false,
									'connect_timeout'	=> 500,
									'cache_lookups'		=> true,
									'prefix_key'		=> 'cheese');
		return array_merge($options, $memcachedOptions);
	}
}

?>