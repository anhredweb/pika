<?php
/**
 * Libraries file
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
class Libraries
{
	/**
	 * [initLibs description]
	 * 
	 * @return [type] [description]
	 */
	public static function init()
	{
		$dir = 'libs/';
		$files = scandir($dir);

		$count = count($files);

		for ($i = 0; $i < $count; ++$i)
		{
			if (($files[$i] != '.') && ($files[$i] != '..'))
			{
				include $dir . $files[$i];
			}
		}
	}
}
