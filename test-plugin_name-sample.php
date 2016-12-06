<?php

class PluginName_Sample extends WP_UnitTestCase
{

    function test_get_option_allow_data_success()
    {
        // mock a class
        $data = new \stdClass();
        $data->success = true;
        $data = array(
            "some_data"  =>  "true"
        );

        $mock_object = $this->createMock(Sample::class);
	    $mock_object->method('get_options')
                ->willReturn($data);

        $this->assertEquals(true, array_key_exists("allow_data_collect", $mock_object->get_options()));
    }
}
