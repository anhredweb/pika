<?php
/**
 * Controller file
 * 
 * @copyright  2017 by @albert
 * @license    2017 by http://hoanganh.vn
 */

defined('__RUN__') or die;

/**
 * Class defined process URL to call to functions
 *
 * @since  2017 by @albert
 */
class Controller
{
	/**
	 * [routeURI description]
	 * 
	 * @return  [type] [description]
	 */
	public static function routeURI()
	{
		$uri = self::getURI();

		Route::parseRoute($uri);
	}

	/**
	 * [getURI description]
	 * 
	 * @return [type] [description]
	 */
	public static function getURI()
	{
		return $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	}
}
