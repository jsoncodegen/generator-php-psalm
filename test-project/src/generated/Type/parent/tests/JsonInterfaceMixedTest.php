<?php

namespace JCG\Test\generated\Type\parent\tests;

/**
 * This tests interface fields.
 */
final class JsonInterfaceMixedTest
{

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\tests\child\JsonInterface
	 */
	public $child;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\tests\JsonInterface
	 */
	public $local;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\JsonInterface
	 */
	public $parent;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\JsonInterface
	 */
	public $root;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\sibling\JsonInterface
	 */
	public $sibling;

	/**
	 * @param \JCG\Test\generated\Builder\parent\tests\JsonInterfaceMixedTestBuilder<"OK", "OK", "OK", "OK", "OK"> $builder
	 * @throws \Exception
	 */
	public function __construct($builder)
	{
		$builder_child = $builder->getChild();
		$builder_local = $builder->getLocal();
		$builder_parent = $builder->getParent();
		$builder_root = $builder->getRoot();
		$builder_sibling = $builder->getSibling();
		
		if (is_null($builder_child)) throw new \Exception('JsonInterfaceMixedTest: child must not be null.');
		if (is_null($builder_local)) throw new \Exception('JsonInterfaceMixedTest: local must not be null.');
		if (is_null($builder_parent)) throw new \Exception('JsonInterfaceMixedTest: parent must not be null.');
		if (is_null($builder_root)) throw new \Exception('JsonInterfaceMixedTest: root must not be null.');
		if (is_null($builder_sibling)) throw new \Exception('JsonInterfaceMixedTest: sibling must not be null.');
		
		$this->child = $builder_child;
		$this->local = $builder_local;
		$this->parent = $builder_parent;
		$this->root = $builder_root;
		$this->sibling = $builder_sibling;
	}
}