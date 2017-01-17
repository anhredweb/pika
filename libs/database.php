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

class Database
{
	/**
	 * [$conn description]
	 * @var null
	 */
	public static $conn = null;

	/**
	 * [$config description]
	 * @var null
	 */
	public static $config = null;

	/**
	 * [getDbo description]
	 * 
	 * @return [type] [description]
	 */
	public static function getDbo()
	{
		self::$config = Configuration::getConfig();

		try
		{
			self::$conn = new PDO('mysql:host=' . self::$config['server'] . ';dbname=' . self::$config['database'], self::$config['user'], self::$config['password']);

			// Set the PDO error mode to exception
			self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
		}

		return self::$conn;
	}

	/**
	 * [getQuery description]
	 * 
	 * @return [type] [description]
	 */
	public static function getQuery()
	{
		$sql = new MySql;

		return $sql;
	}

	/**
	 * [quote description]
	 *
	 * @param   mixed  &$target  need quote
	 * 
	 * @return [type] [description]
	 */
	public static function quote(&$target)
	{
		return $target;
	}

	/**
	 * [quoteName description]
	 *
	 * @param   mixed  &$target  need quote name
	 * 
	 * @return [type] [description]
	 */
	public static function quoteName(&$target)
	{
		return $target;
	}
}
