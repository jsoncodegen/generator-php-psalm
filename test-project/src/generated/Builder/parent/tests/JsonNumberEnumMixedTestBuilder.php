<?php

namespace JCG\Test\generated\Builder\parent\tests;

/**
 * This tests number enum fields.
 * @template __Has_child__
 * @template __Has_local__
 * @template __Has_parent__
 * @template __Has_root__
 * @template __Has_sibling__
 */
final class JsonNumberEnumMixedTestBuilder
{

	/**
	 * @var \JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum|null
	 */
	private $child = null;

	/**
	 * @var \JCG\Test\generated\Type\parent\tests\JsonNumberEnum|null
	 */
	private $local = null;

	/**
	 * @var \JCG\Test\generated\Type\parent\JsonNumberEnum|null
	 */
	private $parent = null;

	/**
	 * @var \JCG\Test\generated\Type\JsonNumberEnum|null
	 */
	private $root = null;

	/**
	 * @var \JCG\Test\generated\Type\parent\sibling\JsonNumberEnum|null
	 */
	private $sibling = null;

	/**
	 * @return \JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum|null
	 */
	public function getChild()
	{
		return $this->child;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum $value
	 * @return JsonNumberEnumMixedTestBuilder<"OK", __Has_local__, __Has_parent__, __Has_root__, __Has_sibling__>
	 */
	public function setChild($value)
	{
		$this->child = $value;
		/**
		 * @var JsonNumberEnumMixedTestBuilder<"OK", __Has_local__, __Has_parent__, __Has_root__, __Has_sibling__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Type\parent\tests\JsonNumberEnum|null
	 */
	public function getLocal()
	{
		return $this->local;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\tests\JsonNumberEnum $value
	 * @return JsonNumberEnumMixedTestBuilder<__Has_child__, "OK", __Has_parent__, __Has_root__, __Has_sibling__>
	 */
	public function setLocal($value)
	{
		$this->local = $value;
		/**
		 * @var JsonNumberEnumMixedTestBuilder<__Has_child__, "OK", __Has_parent__, __Has_root__, __Has_sibling__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Type\parent\JsonNumberEnum|null
	 */
	public function getParent()
	{
		return $this->parent;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\JsonNumberEnum $value
	 * @return JsonNumberEnumMixedTestBuilder<__Has_child__, __Has_local__, "OK", __Has_root__, __Has_sibling__>
	 */
	public function setParent($value)
	{
		$this->parent = $value;
		/**
		 * @var JsonNumberEnumMixedTestBuilder<__Has_child__, __Has_local__, "OK", __Has_root__, __Has_sibling__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Type\JsonNumberEnum|null
	 */
	public function getRoot()
	{
		return $this->root;
	}

	/**
	 * @param \JCG\Test\generated\Type\JsonNumberEnum $value
	 * @return JsonNumberEnumMixedTestBuilder<__Has_child__, __Has_local__, __Has_parent__, "OK", __Has_sibling__>
	 */
	public function setRoot($value)
	{
		$this->root = $value;
		/**
		 * @var JsonNumberEnumMixedTestBuilder<__Has_child__, __Has_local__, __Has_parent__, "OK", __Has_sibling__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Type\parent\sibling\JsonNumberEnum|null
	 */
	public function getSibling()
	{
		return $this->sibling;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\sibling\JsonNumberEnum $value
	 * @return JsonNumberEnumMixedTestBuilder<__Has_child__, __Has_local__, __Has_parent__, __Has_root__, "OK">
	 */
	public function setSibling($value)
	{
		$this->sibling = $value;
		/**
		 * @var JsonNumberEnumMixedTestBuilder<__Has_child__, __Has_local__, __Has_parent__, __Has_root__, "OK"> $that
		 */
		$that = $this;
		return $that;
	}
}