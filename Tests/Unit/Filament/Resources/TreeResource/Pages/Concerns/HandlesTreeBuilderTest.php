<?php

namespace Modules\UI\Filament\Resources\TreeResource\Tests\Unit\Pages\Concerns;

use Modules\UI\Filament\Resources\TreeResource\Pages\Concerns\HandlesTreeBuilder;
use Tests\TestCase;

/**
 * Class HandlesTreeBuilderTest.
 *
 * @covers \Modules\UI\Filament\Resources\TreeResource\Pages\Concerns\HandlesTreeBuilder
 */
final class HandlesTreeBuilderTest extends TestCase
{
    private HandlesTreeBuilder $handlesTreeBuilder;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->handlesTreeBuilder = $this->getMockBuilder(HandlesTreeBuilder::class)
            ->setConstructorArgs([])
            ->getMockForTrait();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->handlesTreeBuilder);
    }

    public function testSortNavigation(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testAddChild(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testRemoveItem(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testDeleteItem(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testEditItem(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testCreateItem(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testUpdateItem(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testStoreChildItem(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testStoreItem(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
