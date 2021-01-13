<?php

namespace Tests;

use Orchestra\Testbench\TestCase;

class ContentTest extends TestCase
{
    /**
     * @test
     */
    public function strings_and_arrays_pass_through()
    {
        $string = 'This is the output';
        $array = [
            'code' => 200,
            'message' => 'Endpoint was successful',
        ];

        $this->assertSame(
            $string,
            processContent($string)
        );

        $this->assertSame(
            $array,
            processContent($array)
        );
    }

    /**
     * @test
     */
    public function can_transform_json_resource()
    {
        $resource = new MyResource([
            'test1' => 'This is a test',
            'test2' => 'Another Test',
            'test3' => 'Another, another test',
        ]);

        $this->assertSame(
            [
                'data' => [
                    'original' => [
                        'test1' => 'This is a test',
                        'test2' => 'Another Test',
                        'test3' => 'Another, another test',
                    ],
                    'flipped' => [
                        'This is a test' => 'test1',
                        'Another Test' => 'test2',
                        'Another, another test' => 'test3',
                    ]
                ]
            ],
            \json_decode(processContent($resource), true)
        );
    }
}
