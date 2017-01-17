<?php
/**
 * Config file
 * 
 * @copyright  2017 by @albert
 * @license    2017 by http://hoanganh.vn
 */

defined('__RUN__') or die;

/**
 * Class defined configuration of website
 *
 * @since  2017 by @albert
 */
class Configuration
{
	/**
	 * [getConfig description]
	 * 
	 * @return [type] [description]
	 */
	public static function getConfig()
	{
		return [
			'live_site'	=> 'localhost/pika',
			'server' 	=> 'localhost',
			'user'		=> 'root',
			'password'	=> '',
			'database'	=> 'pika'
		];
	}
}
