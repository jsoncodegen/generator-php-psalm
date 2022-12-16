<?php

namespace JCG\Test\generated\Type\parent\tests;

/**
 * This tests number enum value fields.
 */
final class JsonNumberEnumValueMixedTest
{

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name
	 */
	public $child;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name
	 */
	public $local;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\JsonNumberEnum::Name
	 */
	public $parent;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\JsonNumberEnum::Name
	 */
	public $root;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\sibling\JsonNumberEnum::Name
	 */
	public $sibling;

	/**
	 * @param \JCG\Test\generated\Builder\parent\tests\JsonNumberEnumValueMixedTestBuilder<"OK", "OK", "OK", "OK", "OK"> $builder
	 * @throws \Exception
	 */
	public function __construct($builder)
	{
		$builder_child = $builder->getChild();
		$builder_local = $builder->getLocal();
		$builder_parent = $builder->getParent();
		$builder_root = $builder->getRoot();
		$builder_sibling = $builder->getSibling();
		
		if (is_null($builder_child)) throw new \Exception('JsonNumberEnumValueMixedTest: child must not be null.');
		if (is_null($builder_local)) throw new \Exception('JsonNumberEnumValueMixedTest: local must not be null.');
		if (is_null($builder_parent)) throw new \Exception('JsonNumberEnumValueMixedTest: parent must not be null.');
		if (is_null($builder_root)) throw new \Exception('JsonNumberEnumValueMixedTest: root must not be null.');
		if (is_null($builder_sibling)) throw new \Exception('JsonNumberEnumValueMixedTest: sibling must not be null.');
		
		$this->child = $builder_child;
		$this->local = $builder_local;
		$this->parent = $builder_parent;
		$this->root = $builder_root;
		$this->sibling = $builder_sibling;
	}
}