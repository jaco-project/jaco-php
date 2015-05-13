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
	* Current String
	*
	* @var string $_
	*
	* @version 2.0.0
	* @since 2.0.0
	*/
	private $_str = '';

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
			$this->_str = $str;
		} elseif ($str instanceof Jaco) {
			$this->_str = $str->__toString();
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
		return $this->_str;
	}

	/**
	* concat string
	*
	* @param string $likeStrings,...
	* @return Jaco
	*
	* @version 2.0.0
	* @since 2.0.0
	*/
	function concat () {
		$args = func_get_args();
		$this->_str = implode($args, '');
		return $this;
	}

	/**
	* replace string
	*
	* @param string $pattern
	* @param string $replacement
	*
	* @return Jaco
	*
	* @version 2.0.0
	* @since 2.0.0
	*/
	function replace ($pattern, $replacement) {
		$newString = preg_replace($pattern, $replacement, $this->_str);
		$this->_str = $newString;
		return $this;
	}

	/**
	* extract string
	*
	* @param int $from (optional)
	* @param int $to (optional)
	* @return Jaco
	*
	* @version 2.0.0
	* @since 2.0.0
	*/
	function slice ($from = 0, $to = NULL) {
		if ($to === NULL) {
			$to = mb_strlen($this->_str);
		}
		$length = $to - $from;
		return $this->substr($from, $length);
	}

	/**
	* extract string
	*
	* @param int $from (optional)
	* @param int $length (optional)
	* @return Jaco
	*
	* @version 2.0.0
	* @since 2.0.0
	*/
	function substr ($from = 0, $length = NULL) {
		$extractString = mb_substr($this->_str, $from, $length);
		return new Jaco($extractString);
	}

	/**
	* extract string
	*
	* @param int $indexA
	* @param int $indexB
	* @return Jaco
	*
	* @version 2.0.0
	* @since 2.0.0
	*/
	function substring ($indexA, $indexB) {
		$from = min($indexA, $indexB);
		$to = max($indexA, $indexB);
		return $this->slice($from, $to);
	}

	/**
	* To lower case
	*
	* @return Jaco
	*
	* @version 2.0.0
	* @since 2.0.0
	*/
	function toLowerCase () {
		$this->_str = strtolower($this->_str);
		return $this;
	}

	/**
	* To upper case
	*
	* @return Jaco
	*
	* @version 2.0.0
	* @since 2.0.0
	*/
	function toUpperCase () {
		$this->_str = strtoupper($this->_str);
		return $this;
	}
}
