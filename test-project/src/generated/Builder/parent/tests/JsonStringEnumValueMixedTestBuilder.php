<?php

namespace JCG\Test\generated\Builder\parent\tests;

/**
 * This tests string enum value fields.
 * @template __Has_child__
 * @template __Has_local__
 * @template __Has_parent__
 * @template __Has_root__
 * @template __Has_sibling__
 */
final class JsonStringEnumValueMixedTestBuilder
{

	/**
	 * @var \JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|null
	 */
	private $child = null;

	/**
	 * @var \JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|null
	 */
	private $local = null;

	/**
	 * @var \JCG\Test\generated\Type\parent\JsonStringEnum::Name|null
	 */
	private $parent = null;

	/**
	 * @var \JCG\Test\generated\Type\JsonStringEnum::Name|null
	 */
	private $root = null;

	/**
	 * @var \JCG\Test\generated\Type\parent\sibling\JsonStringEnum::Name|null
	 */
	private $sibling = null;

	/**
	 * @return \JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|null
	 */
	public function getChild()
	{
		return $this->child;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name $value
	 * @return JsonStringEnumValueMixedTestBuilder<"OK", __Has_local__, __Has_parent__, __Has_root__, __Has_sibling__>
	 */
	public function setChild($value)
	{
		$this->child = $value;
		/**
		 * @var JsonStringEnumValueMixedTestBuilder<"OK", __Has_local__, __Has_parent__, __Has_root__, __Has_sibling__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|null
	 */
	public function getLocal()
	{
		return $this->local;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name $value
	 * @return JsonStringEnumValueMixedTestBuilder<__Has_child__, "OK", __Has_parent__, __Has_root__, __Has_sibling__>
	 */
	public function setLocal($value)
	{
		$this->local = $value;
		/**
		 * @var JsonStringEnumValueMixedTestBuilder<__Has_child__, "OK", __Has_parent__, __Has_root__, __Has_sibling__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Type\parent\JsonStringEnum::Name|null
	 */
	public function getParent()
	{
		return $this->parent;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\JsonStringEnum::Name $value
	 * @return JsonStringEnumValueMixedTestBuilder<__Has_child__, __Has_local__, "OK", __Has_root__, __Has_sibling__>
	 */
	public function setParent($value)
	{
		$this->parent = $value;
		/**
		 * @var JsonStringEnumValueMixedTestBuilder<__Has_child__, __Has_local__, "OK", __Has_root__, __Has_sibling__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Type\JsonStringEnum::Name|null
	 */
	public function getRoot()
	{
		return $this->root;
	}

	/**
	 * @param \JCG\Test\generated\Type\JsonStringEnum::Name $value
	 * @return JsonStringEnumValueMixedTestBuilder<__Has_child__, __Has_local__, __Has_parent__, "OK", __Has_sibling__>
	 */
	public function setRoot($value)
	{
		$this->root = $value;
		/**
		 * @var JsonStringEnumValueMixedTestBuilder<__Has_child__, __Has_local__, __Has_parent__, "OK", __Has_sibling__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Type\parent\sibling\JsonStringEnum::Name|null
	 */
	public function getSibling()
	{
		return $this->sibling;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\sibling\JsonStringEnum::Name $value
	 * @return JsonStringEnumValueMixedTestBuilder<__Has_child__, __Has_local__, __Has_parent__, __Has_root__, "OK">
	 */
	public function setSibling($value)
	{
		$this->sibling = $value;
		/**
		 * @var JsonStringEnumValueMixedTestBuilder<__Has_child__, __Has_local__, __Has_parent__, __Has_root__, "OK"> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\tests\JsonStringEnumValueMixedTest $value
	 * @return JsonStringEnumValueMixedTestBuilder<"OK", "OK", "OK", "OK", "OK">
	 */
	public static function from($value)
	{
		return (new JsonStringEnumValueMixedTestBuilder())
			->setChild($value->child)
			->setLocal($value->local)
			->setParent($value->parent)
			->setRoot($value->root)
			->setSibling($value->sibling);
	}
}