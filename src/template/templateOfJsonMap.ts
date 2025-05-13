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
 * @implements IteratorAggregate<string,T>
 * @implements ArrayAccess<string,T>
 */
final class JsonMap implements JsonSerializable, ArrayAccess, IteratorAggregate, Countable, Serializable
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
	#[\\Override]
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
	#[\\Override]
	public function offsetExists($offset)
	{
		return array_key_exists($offset, $this->data);
	}
	
	/**
	 * @param string $offset
	 * @return T|null
	 */
	#[\\ReturnTypeWillChange]
	#[\\Override]
	public function offsetGet($offset)
	{
		return isset($this->data[$offset]) ? $this->data[$offset] : null;
	}
	
	/**
	 * @param string $offset
	 * @param T $value
	 */
	#[\\ReturnTypeWillChange]
	#[\\Override]
	public function offsetSet($offset, $value)
	{
		// $this->data[$offset] = $value;
		throw new \\Exception("[sptir6] JsonMap is immutable.");
	}
	
	/**
	 * @param string $offset
	 */
	#[\\ReturnTypeWillChange]
	#[\\Override]
	public function offsetUnset($offset)
	{
		// unset($this->data[$offset]);
		throw new \\Exception("[sptit0] JsonMap is immutable.");
	}
	
	/**
	 * @return ArrayIterator<string,T>
	 */
	#[\\ReturnTypeWillChange]
	#[\\Override]
	public function getIterator()
	{
		return new ArrayIterator($this->data);
	}
	
	/**
	 * @inheritDoc
	 */
	#[\\ReturnTypeWillChange]
	#[\\Override]
	public function count()
	{
		return count($this->data);
	}
	
	/**
	 * @inheritDoc
	 */
	#[\\ReturnTypeWillChange]
	#[\\Override]
	public function serialize()
	{
		return serialize($this->data);
	}
	
	/**
	 * @inheritDoc
	 */
	#[\\ReturnTypeWillChange]
	#[\\Override]
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
	#[\\ReturnTypeWillChange]
	public function __serialize()
	{
		return serialize($this->data);
	}
	
	/**
	 * @param string $data
	 * @return void
	 */
	#[\\ReturnTypeWillChange]
	public function __unserialize($data)
	{
		/**
		 * @psalm-suppress MixedAssignment
		 */
		$this->data = unserialize($data);
	}
	
	/**
	 * @return array<string, T>
	 */
	public function toArray()
	{
		return $this->data;
	}
}
`
}
