<?php
require_once 'vendor/Autoload.php';
use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
	/** @test */
	public function empty_inst_collection_return_no_items()
	{
		$collection = new \App\Support\Collection;

		$this->assertEmpty($collection->get());
	}

	/** @test */
	public function count_collection()
	{
		$collection = new \App\Support\Collection([
			'one','two','three'
		]);

		$this->assertEquals(3,$collection->count());
	}

	/** @test */
	public function match_items()
	{
		$collection = new \App\Support\Collection([
			'one','two',
		]);
		$this->assertEquals($collection->get()[0],'one');
		$this->assertEquals($collection->get()[1],'two');
	}
	/** @test */
	public function instant_of()
	{
		$collection = new \App\Support\Collection();

		$this->assertInstanceOf(IteratorAggregate::class,$collection);
	}

	/** @test */
	public function collection_can_be_iterated()
	{
		$collection = new \App\Support\Collection([
			'one','two',
		]);
		$items = [];
		foreach ($collection as  $value) {
			$items[] = $value;
		}
		$this->assertEquals(2,count($items));
	}

	/** @test */
	public function collection_merge()
	{
		$collection1 = new \App\Support\Collection(['1','2']);
		$collection2 = new \App\Support\Collection(['3','4','5']);

		$collection1 = $collection1->merge($collection2);

		$this->assertCount(5,$collection1->get());
		$this->assertEquals(5,count($collection1->get()));
	}
}
?>