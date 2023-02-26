<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class StartTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    // public function test_is_value_true(){
    //     $this->browser(function(Browser $browser){

    //     });
    // }

    public function test_array_indexes()
    {
        $array = [1, 2, 3, 4, 5, 6];

        $this->assertEquals($array[0], 1);

        $this->assertEquals(6, $array[count($array) - 1]);

        $this->assertEquals(count($array), 6);
    }

    public function test_i_can_remove_from_array()
    {
        $array = ["ali", "reza", "hassan"];

        $this->assertEquals("hassan", array_pop($array));
    }
}
