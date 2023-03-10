<?php

namespace JCG\Test\generated\Type\parent\tests;

/**
 * This tests string enum fields.
 */
final class JsonStringEnumMixedTest
{

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue
	 */
	public $child;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue
	 */
	public $local;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\JsonStringEnum::NameOfEmptyValue
	 */
	public $parent;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\JsonStringEnum::Name|\JCG\Test\generated\Type\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\JsonStringEnum::NameOfEmptyValue
	 */
	public $root;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\sibling\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\sibling\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\sibling\JsonStringEnum::NameOfEmptyValue
	 */
	public $sibling;

	/**
	 * @param \JCG\Test\generated\Builder\parent\tests\JsonStringEnumMixedTestBuilder<"OK", "OK", "OK", "OK", "OK"> $builder
	 * @throws \Exception
	 */
	public function __construct($builder)
	{
		$builder_child = $builder->getChild();
		$builder_local = $builder->getLocal();
		$builder_parent = $builder->getParent();
		$builder_root = $builder->getRoot();
		$builder_sibling = $builder->getSibling();
		
		if (is_null($builder_child)) throw new \Exception('JsonStringEnumMixedTest: child must not be null.');
		if (is_null($builder_local)) throw new \Exception('JsonStringEnumMixedTest: local must not be null.');
		if (is_null($builder_parent)) throw new \Exception('JsonStringEnumMixedTest: parent must not be null.');
		if (is_null($builder_root)) throw new \Exception('JsonStringEnumMixedTest: root must not be null.');
		if (is_null($builder_sibling)) throw new \Exception('JsonStringEnumMixedTest: sibling must not be null.');
		
		$this->child = $builder_child;
		$this->local = $builder_local;
		$this->parent = $builder_parent;
		$this->root = $builder_root;
		$this->sibling = $builder_sibling;
	}
}