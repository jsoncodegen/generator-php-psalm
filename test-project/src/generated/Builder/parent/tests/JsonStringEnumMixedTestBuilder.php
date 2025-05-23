<?php

namespace JCG\Test\generated\Builder\parent\tests;

/**
 * This tests string enum fields.
 * @template __Has_child__
 * @template __Has_local__
 * @template __Has_parent__
 * @template __Has_root__
 * @template __Has_sibling__
 */
final class JsonStringEnumMixedTestBuilder
{

	/**
	 * @var \JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue|null
	 */
	private $child = null;

	/**
	 * @var \JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null
	 */
	private $local = null;

	/**
	 * @var \JCG\Test\generated\Type\parent\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\JsonStringEnum::NameOfEmptyValue|null
	 */
	private $parent = null;

	/**
	 * @var \JCG\Test\generated\Type\JsonStringEnum::Name|\JCG\Test\generated\Type\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\JsonStringEnum::NameOfEmptyValue|null
	 */
	private $root = null;

	/**
	 * @var \JCG\Test\generated\Type\parent\sibling\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\sibling\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\sibling\JsonStringEnum::NameOfEmptyValue|null
	 */
	private $sibling = null;

	/**
	 * @return \JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue|null
	 */
	public function getChild()
	{
		return $this->child;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue $value
	 * @return JsonStringEnumMixedTestBuilder<"OK", __Has_local__, __Has_parent__, __Has_root__, __Has_sibling__>
	 */
	public function setChild($value)
	{
		$this->child = $value;
		/**
		 * @var JsonStringEnumMixedTestBuilder<"OK", __Has_local__, __Has_parent__, __Has_root__, __Has_sibling__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null
	 */
	public function getLocal()
	{
		return $this->local;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue $value
	 * @return JsonStringEnumMixedTestBuilder<__Has_child__, "OK", __Has_parent__, __Has_root__, __Has_sibling__>
	 */
	public function setLocal($value)
	{
		$this->local = $value;
		/**
		 * @var JsonStringEnumMixedTestBuilder<__Has_child__, "OK", __Has_parent__, __Has_root__, __Has_sibling__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Type\parent\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\JsonStringEnum::NameOfEmptyValue|null
	 */
	public function getParent()
	{
		return $this->parent;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\JsonStringEnum::NameOfEmptyValue $value
	 * @return JsonStringEnumMixedTestBuilder<__Has_child__, __Has_local__, "OK", __Has_root__, __Has_sibling__>
	 */
	public function setParent($value)
	{
		$this->parent = $value;
		/**
		 * @var JsonStringEnumMixedTestBuilder<__Has_child__, __Has_local__, "OK", __Has_root__, __Has_sibling__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Type\JsonStringEnum::Name|\JCG\Test\generated\Type\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\JsonStringEnum::NameOfEmptyValue|null
	 */
	public function getRoot()
	{
		return $this->root;
	}

	/**
	 * @param \JCG\Test\generated\Type\JsonStringEnum::Name|\JCG\Test\generated\Type\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\JsonStringEnum::NameOfEmptyValue $value
	 * @return JsonStringEnumMixedTestBuilder<__Has_child__, __Has_local__, __Has_parent__, "OK", __Has_sibling__>
	 */
	public function setRoot($value)
	{
		$this->root = $value;
		/**
		 * @var JsonStringEnumMixedTestBuilder<__Has_child__, __Has_local__, __Has_parent__, "OK", __Has_sibling__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Type\parent\sibling\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\sibling\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\sibling\JsonStringEnum::NameOfEmptyValue|null
	 */
	public function getSibling()
	{
		return $this->sibling;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\sibling\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\sibling\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\sibling\JsonStringEnum::NameOfEmptyValue $value
	 * @return JsonStringEnumMixedTestBuilder<__Has_child__, __Has_local__, __Has_parent__, __Has_root__, "OK">
	 */
	public function setSibling($value)
	{
		$this->sibling = $value;
		/**
		 * @var JsonStringEnumMixedTestBuilder<__Has_child__, __Has_local__, __Has_parent__, __Has_root__, "OK"> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\tests\JsonStringEnumMixedTest $value
	 * @return JsonStringEnumMixedTestBuilder<"OK", "OK", "OK", "OK", "OK">
	 */
	public static function from($value)
	{
		return (new JsonStringEnumMixedTestBuilder())
			->setChild($value->child)
			->setLocal($value->local)
			->setParent($value->parent)
			->setRoot($value->root)
			->setSibling($value->sibling);
	}
}