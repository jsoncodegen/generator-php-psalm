<?php

namespace JCG\Test\generated\Util;

use ArrayAccess;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use JsonSerializable;
use Serializable;
use stdClass;

/**
 * @template T
 */
class JsonMap implements JsonSerializable, ArrayAccess, IteratorAggregate, Countable, Serializable
{
	/**
	 * @var array<string, T>
	 */
	private $data;
	
	/**
	 * @param array<string, T> $data
	 */
	public function __construct(array $data = [])
	{
		$this->data = $data;
	}
	
	/**
	 * @inheritDoc
	 * @psalm-suppress InvalidAttribute
	 */
	#[\ReturnTypeWillChange]
	public function jsonSerialize()
	{
		if (count($this->data) > 0) {
			return $this->data;
		} else {
			return new stdClass();
		}
	}
	
	/**
	 * @param string $offset
	 * @return bool
	 * @psalm-suppress InvalidAttribute
	 */
	#[\ReturnTypeWillChange]
	public function offsetExists($offset)
	{
		return array_key_exists($offset, $this->data);
	}
	
	/**
	 * @param string $offset
	 * @return T
	 * @psalm-suppress InvalidAttribute
	 */
	#[\ReturnTypeWillChange]
	public function offsetGet($offset)
	{
		return $this->data[$offset];
	}
	
	/**
	 * @param string $offset
	 * @param T $value
	 * @psalm-suppress InvalidAttribute
	 */
	#[\ReturnTypeWillChange]
	public function offsetSet($offset, $value)
	{
		$this->data[$offset] = $value;
	}
	
	/**
	 * @param string $offset
	 * @psalm-suppress InvalidAttribute
	 */
	#[\ReturnTypeWillChange]
	public function offsetUnset($offset)
	{
		unset($this->data[$offset]);
	}
	
	/**
	 * @return ArrayIterator
	 * @psalm-suppress InvalidAttribute
	 */
	#[\ReturnTypeWillChange]
	public function getIterator()
	{
		return new ArrayIterator($this->data);
	}
	
	/**
	 * @return int
	 * @psalm-suppress InvalidAttribute
	 */
	#[\ReturnTypeWillChange]
	public function count()
	{
		return count($this->data);
	}
	
	/**
	 * @return string|null
	 * @psalm-suppress InvalidAttribute
	 */
	#[\ReturnTypeWillChange]
	public function serialize()
	{
		return serialize($this->data);
	}
	
	/**
	 * @param string $data
	 * @return void
	 * @psalm-suppress InvalidAttribute
	 */
	#[\ReturnTypeWillChange]
	public function unserialize($data)
	{
		/**
		 * @psalm-suppress MixedAssignment
		 */
		$this->data = unserialize($data);
	}
	
	/**
	 * @return string
	 * @psalm-suppress InvalidAttribute
	 */
	#[\ReturnTypeWillChange]
	public function __serialize()
	{
		return serialize($this->data);
	}
	
	/**
	 * @param string $data
	 * @return void
	 * @psalm-suppress InvalidAttribute
	 */
	#[\ReturnTypeWillChange]
	public function __unserialize($data)
	{
		/**
		 * @psalm-suppress MixedAssignment
		 */
		$this->data = unserialize($data);
	}
}
