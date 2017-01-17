<?php
/**
 * Config file
 * 
 * @copyright  2017 by @albert
 * @license    2017 by http://hoanganh.vn
 */

defined('__RUN__') or die;

/**
 * Class defined Route related function
 *
 * @since  2017 by @albert
 */

class Route
{
	/**
	 * [parseRoute description]
	 *
	 * @param   string  &$uri  URI
	 * 
	 * @return [type] [description]
	 */
	public static function parseRoute(&$uri)
	{
		$config = Configuration::getConfig();
		$liveSite = &$config['live_site'];

		$uri = str_replace($liveSite, '', $uri);

		if ($uri[0] == '/')
		{
			$uri = substr($uri, 1, strlen($uri));
		}

		self::invokeModuleFrom($uri);
	}

	/**
	 * [invokeModuleFrom description]
	 * 
	 * @param   [type]  &$uri  [description]
	 * 
	 * @return [type]       [description]
	 */
	public static function invokeModuleFrom(&$uri)
	{
		$db = Database::getDbo();
		$query = Database::getQuery();

		$query->select('*')
			->from('route')
			->where('uri = ' . $uri);

		echo '<pre>';
		var_dump($query);
		die;

		//$db->setQuery($query);
		//$db->loadObject();
	}
}
