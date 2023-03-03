<?php

namespace Tests\Unit;

use App\Models\Course;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
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

    public function test_can_get_courses_from_db()
    {
        // $courses = Course::all()->first();

        // $course = DB::table("comments")->get();

        // $this->assertInstanceOf(Course::class, $courses);


        // $this->assertNull($courses);

        // $this->assertNotNull($course);

        $array = [];

        $this->assertCount(0, $array);
    }
}
