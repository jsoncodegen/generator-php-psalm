<?php

namespace JCG\Test\generated\Type\parent\tests;

/**
 * This tests string enum value fields.
 */
final class JsonStringEnumValueMixedTest
{

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name
	 */
	public $child;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name
	 */
	public $local;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\JsonStringEnum::Name
	 */
	public $parent;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\JsonStringEnum::Name
	 */
	public $root;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\sibling\JsonStringEnum::Name
	 */
	public $sibling;

	/**
	 * @param \JCG\Test\generated\Builder\parent\tests\JsonStringEnumValueMixedTestBuilder<"OK", "OK", "OK", "OK", "OK"> $builder
	 * @throws \Exception
	 */
	public function __construct($builder)
	{
		$builder_child = $builder->getChild();
		$builder_local = $builder->getLocal();
		$builder_parent = $builder->getParent();
		$builder_root = $builder->getRoot();
		$builder_sibling = $builder->getSibling();
		
		if (is_null($builder_child)) throw new \Exception('JsonStringEnumValueMixedTest: child must not be null.');
		if (is_null($builder_local)) throw new \Exception('JsonStringEnumValueMixedTest: local must not be null.');
		if (is_null($builder_parent)) throw new \Exception('JsonStringEnumValueMixedTest: parent must not be null.');
		if (is_null($builder_root)) throw new \Exception('JsonStringEnumValueMixedTest: root must not be null.');
		if (is_null($builder_sibling)) throw new \Exception('JsonStringEnumValueMixedTest: sibling must not be null.');
		
		$this->child = $builder_child;
		$this->local = $builder_local;
		$this->parent = $builder_parent;
		$this->root = $builder_root;
		$this->sibling = $builder_sibling;
	}
}