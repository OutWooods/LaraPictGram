<?php

namespace Tests\Unit;

use App\Pict;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PictModelTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function it_has_all_key_features()
    {
        $pict = factory(Pict::class)->create([
            'question' => 'What do you do?',
            'answer' => 'Maths',
        ]);

        $this->assertEquals('What do you do?', $pict->question);
        $this->assertEquals('Maths', $pict->answer);
    }
}
