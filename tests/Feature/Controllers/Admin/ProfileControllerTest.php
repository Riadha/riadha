<?php

namespace Tests\Feature\Controllers\Admin;

use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProfileControllerTest extends TestCase
{
    private $payload;

    function __construct($name = null, array $data = [], $dataName = '')
    {
        $this->payload = [
            'first_name'     =>     'An',
            'last_name'     =>     'Athlete',
            'middle_name' => 'Middle',
            'country' => 'KEN'
        ];

        parent::__construct($name, $data, $dataName);
    }

    /**
     * Anon Users should not access the url.
     *
     * @return void
     */
    public function testStoreProfileAccess()
    {
        $response = $this->json('POST','/admin/v1/profiles',$this->payload);

        $response->assertStatus(401);
    }


}
