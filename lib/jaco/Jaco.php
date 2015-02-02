<?php
/**
* Japanise character optimizer
*
* @version 2.0.0
* @since 2.0.0
*
* @author YusukeHirao
* @copyright YusukeHirao
* @license MIT
*/
namespace jaco;

/**
* main Class Jaco
*
* @package jaco
* @version 2.0.0
* @since 2.0.0
*/
class Jaco {

	/**
	* main Class Jaco
	*
	* @var string $_ Current string
	*
	* @version 2.0.0
	* @since 2.0.0
	*/
	private $_ = '';

	/**
	* Create new Jaco instance
	*
	* @param string|Jaco $str original string or Jaco instance
	*
	* @version 2.0.0
	* @since 2.0.0
	*/
	function __construct($str) {

		if (gettype($str) === 'string') {
			$this->_ = $str;
		} elseif ($str instanceof Jaco) {
			$this->_ = $str->__toString();
		} else {
			throw new \InvalidArgumentException('Jaco constructor accepts Jaco instance or string. Input was: '.$str);
		}

	}

	/**
	* To string
	*
	* @return string
	*
	* @version 2.0.0
	* @since 2.0.0
	*/
	function __toString () {
		return $this->_;
	}

}


var_dump(new Jaco(new Jaco('じゃこ')));
