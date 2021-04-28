<?php

namespace Tests\Feature;

use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class UuidModelFieldTest extends TestCase
{
    /**
     * Test for check if the id retrieving from model
     * is of type string and returns a UUID value.
     * 
     * @return void
     */
    public function test_model_uuid() {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->get('/tag', ['id' => '582cba61-cdb7-4d99-95ce-b0104985cd98"']);
        
        $uuid = $response[0]['id'];

        assertEquals($uuid, '582cba61-cdb7-4d99-95ce-b0104985cd98"');
    }
}