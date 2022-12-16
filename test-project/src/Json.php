<?php

namespace JCG\Test;

/**
 *
 */
class Json
{
	/**
	 * @param string $str
	 * @return mixed
	 * @throws \Exception
	 */
	public static function parse($str)
	{
		/** @var mixed $result */
		$result = json_decode($str, false);
		$err = json_last_error();
		if ($err !== JSON_ERROR_NONE) {
			$errMsg = json_last_error_msg();
			throw new \Exception("[r75ddi] Could not parse JSON: $err $errMsg");
		}
		return $result;
	}
	
	/**
	 * @param mixed $data
	 * @return string
	 * @throws \Exception
	 */
	public static function stringify($data)
	{
		$result = json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
		if ($result === false) {
			$err = json_last_error();
			$errMsg = json_last_error_msg();
			throw new \Exception("[r75e3u] Could not stringify to JSON: $err $errMsg");
		}
		return $result;
	}
}