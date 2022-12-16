export function templateOfJsonMap({ namespace }: { namespace: string }) {
	return `<?php

namespace ${namespace};

use ArrayAccess;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use JsonSerializable;
use Serializable;
use stdClass;

/**
 * @template T
 * @template-implements ArrayAccess<string, T>
 * @template-implements IteratorAggregate<string, T>
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
	 */
	#[\\ReturnTypeWillChange]
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
	 */
	#[\\ReturnTypeWillChange]
	public function offsetExists($offset)
	{
		return array_key_exists($offset, $this->data);
	}
	
	/**
	 * @param string $offset
	 * @return T
	 */
	#[\\ReturnTypeWillChange]
	public function offsetGet($offset)
	{
		return $this->data[$offset];
	}
	
	/**
	 * @param string $offset
	 * @param T $value
	 */
	#[\\ReturnTypeWillChange]
	public function offsetSet($offset, $value)
	{
		$this->data[$offset] = $value;
	}
	
	/**
	 * @param string $offset
	 */
	#[\\ReturnTypeWillChange]
	public function offsetUnset($offset)
	{
		unset($this->data[$offset]);
	}
	
	/**
	 * @return ArrayIterator<string, T>
	 */
	#[\\ReturnTypeWillChange]
	public function getIterator()
	{
		return new ArrayIterator($this->data);
	}
	
	/**
	 * @return int
	 */
	#[\\ReturnTypeWillChange]
	public function count()
	{
		return count($this->data);
	}
	
	public function serialize()
	{
		return serialize($this->data);
	}
	
	/**
	 * @inheritDoc
	 */
	public function unserialize($data)
	{
		/**
		 * @psalm-suppress MixedAssignment
		 */
		$this->data = unserialize($data);
	}
	
	/**
	 * @inheritDoc
	 */
	public function __serialize()
	{
		return serialize($this->data);
	}
	
	/**
	 * @inheritDoc
	 */
	public function __unserialize($data)
	{
		/**
		 * @psalm-suppress MixedAssignment
		 */
		$this->data = unserialize($data);
	}
}
`
}
