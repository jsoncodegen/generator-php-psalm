<?php

namespace JCG\Test\generated\Builder\parent\tests;

/**
 * This tests number enum value fields.
 * @template __Has_child__
 * @template __Has_local__
 * @template __Has_parent__
 * @template __Has_root__
 * @template __Has_sibling__
 */
final class JsonNumberEnumValueMixedTestBuilder
{

	/**
	 * @var \JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name|null
	 */
	private $child = null;

	/**
	 * @var \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null
	 */
	private $local = null;

	/**
	 * @var \JCG\Test\generated\Type\parent\JsonNumberEnum::Name|null
	 */
	private $parent = null;

	/**
	 * @var \JCG\Test\generated\Type\JsonNumberEnum::Name|null
	 */
	private $root = null;

	/**
	 * @var \JCG\Test\generated\Type\parent\sibling\JsonNumberEnum::Name|null
	 */
	private $sibling = null;

	/**
	 * @return \JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name|null
	 */
	public function getChild()
	{
		return $this->child;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name $value
	 * @return JsonNumberEnumValueMixedTestBuilder<"OK", __Has_local__, __Has_parent__, __Has_root__, __Has_sibling__>
	 */
	public function setChild($value)
	{
		$this->child = $value;
		/**
		 * @var JsonNumberEnumValueMixedTestBuilder<"OK", __Has_local__, __Has_parent__, __Has_root__, __Has_sibling__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null
	 */
	public function getLocal()
	{
		return $this->local;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name $value
	 * @return JsonNumberEnumValueMixedTestBuilder<__Has_child__, "OK", __Has_parent__, __Has_root__, __Has_sibling__>
	 */
	public function setLocal($value)
	{
		$this->local = $value;
		/**
		 * @var JsonNumberEnumValueMixedTestBuilder<__Has_child__, "OK", __Has_parent__, __Has_root__, __Has_sibling__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Type\parent\JsonNumberEnum::Name|null
	 */
	public function getParent()
	{
		return $this->parent;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\JsonNumberEnum::Name $value
	 * @return JsonNumberEnumValueMixedTestBuilder<__Has_child__, __Has_local__, "OK", __Has_root__, __Has_sibling__>
	 */
	public function setParent($value)
	{
		$this->parent = $value;
		/**
		 * @var JsonNumberEnumValueMixedTestBuilder<__Has_child__, __Has_local__, "OK", __Has_root__, __Has_sibling__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Type\JsonNumberEnum::Name|null
	 */
	public function getRoot()
	{
		return $this->root;
	}

	/**
	 * @param \JCG\Test\generated\Type\JsonNumberEnum::Name $value
	 * @return JsonNumberEnumValueMixedTestBuilder<__Has_child__, __Has_local__, __Has_parent__, "OK", __Has_sibling__>
	 */
	public function setRoot($value)
	{
		$this->root = $value;
		/**
		 * @var JsonNumberEnumValueMixedTestBuilder<__Has_child__, __Has_local__, __Has_parent__, "OK", __Has_sibling__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Type\parent\sibling\JsonNumberEnum::Name|null
	 */
	public function getSibling()
	{
		return $this->sibling;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\sibling\JsonNumberEnum::Name $value
	 * @return JsonNumberEnumValueMixedTestBuilder<__Has_child__, __Has_local__, __Has_parent__, __Has_root__, "OK">
	 */
	public function setSibling($value)
	{
		$this->sibling = $value;
		/**
		 * @var JsonNumberEnumValueMixedTestBuilder<__Has_child__, __Has_local__, __Has_parent__, __Has_root__, "OK"> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\tests\JsonNumberEnumValueMixedTest $value
	 * @return JsonNumberEnumValueMixedTestBuilder<"OK", "OK", "OK", "OK", "OK">
	 */
	public static function from($value)
	{
		return (new JsonNumberEnumValueMixedTestBuilder())
			->setChild($value->child)
			->setLocal($value->local)
			->setParent($value->parent)
			->setRoot($value->root)
			->setSibling($value->sibling);
	}
}