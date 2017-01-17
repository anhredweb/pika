<?php
/**
 * Config file
 * 
 * @copyright  2017 by @albert
 * @license    2017 by http://hoanganh.vn
 */

defined('__RUN__') or die;

/**
 * Class defined mysql objective
 *
 * @since  2017 by @albert
 */

class MySql
{
	/**
	 * [$sql description]
	 * @var [type]
	 */
	public $sql;

	/**
	 * [__construct description]
	 */
	public function __construct()
	{
		$this->sql = [];
	}

	/**
	 * [select description]
	 *
	 * @param   array  $str  column names
	 * 
	 * @return [type] [description]
	 */
	public function select($str)
	{
		$this->sql['select'] = $str;

		return $this;
	}

	/**
	 * [insert description]
	 *
	 * @param   array  $str  values
	 * 
	 * @return [type] [description]
	 */
	public function insert($str)
	{
	}

	/**
	 * [update description]
	 * 
	 * @return [type] [description]
	 */
	public function update()
	{
	}

	/**
	 * [delete description]
	 * 
	 * @return [type] [description]
	 */
	public function delete()
	{
	}

	/**
	 * [from description]
	 * 
	 * @param   [type]  $str  [description]
	 * 
	 * @return  [type]      [description]
	 */
	public function from($str)
	{
		$this->sql['from'] = $str;

		return $this;
	}

	/**
	 * [where description]
	 * 
	 * @param   [type]  $str  [description]
	 * 
	 * @return  [type]      [description]
	 */
	public function where($str)
	{
		$this->sql['where'] = $str;

		return $this;
	}

	/**
	 * [buildQuery description]
	 * 
	 * @return [type] [description]
	 */
	public function buildQuery()
	{
	}
}
