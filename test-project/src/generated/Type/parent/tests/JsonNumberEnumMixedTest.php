<?php

namespace JCG\Test\generated\Type\parent\tests;

/**
 * This tests number enum fields.
 */
final class JsonNumberEnumMixedTest
{

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::NameOfFractionValue
	 */
	public $child;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue
	 */
	public $local;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\JsonNumberEnum::NameOfFractionValue
	 */
	public $parent;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\JsonNumberEnum::Name|\JCG\Test\generated\Type\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\JsonNumberEnum::NameOfFractionValue
	 */
	public $root;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\sibling\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\sibling\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\sibling\JsonNumberEnum::NameOfFractionValue
	 */
	public $sibling;

	/**
	 * @param \JCG\Test\generated\Builder\parent\tests\JsonNumberEnumMixedTestBuilder<"OK", "OK", "OK", "OK", "OK"> $builder
	 * @throws \Exception
	 */
	public function __construct($builder)
	{
		$builder_child = $builder->getChild();
		$builder_local = $builder->getLocal();
		$builder_parent = $builder->getParent();
		$builder_root = $builder->getRoot();
		$builder_sibling = $builder->getSibling();
		
		if (is_null($builder_child)) throw new \Exception('JsonNumberEnumMixedTest: child must not be null.');
		if (is_null($builder_local)) throw new \Exception('JsonNumberEnumMixedTest: local must not be null.');
		if (is_null($builder_parent)) throw new \Exception('JsonNumberEnumMixedTest: parent must not be null.');
		if (is_null($builder_root)) throw new \Exception('JsonNumberEnumMixedTest: root must not be null.');
		if (is_null($builder_sibling)) throw new \Exception('JsonNumberEnumMixedTest: sibling must not be null.');
		
		$this->child = $builder_child;
		$this->local = $builder_local;
		$this->parent = $builder_parent;
		$this->root = $builder_root;
		$this->sibling = $builder_sibling;
	}
}