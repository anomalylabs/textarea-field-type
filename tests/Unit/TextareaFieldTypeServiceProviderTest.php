<?php

use Anomaly\TextareaFieldType\TextareaFieldType;
use Anomaly\TextareaFieldType\TextareaFieldTypeServiceProvider;

class TextareaFieldTypeServiceProviderTest extends TestCase
{

    public function testProvides()
    {
        $provider = app(TextareaFieldTypeServiceProvider::class, ['app' => app()]);

        $provides = $provider->provides();

        $this->assertTrue(in_array(TextareaFieldType::class, $provides));
        $this->assertTrue(in_array('anomaly.field_type.textarea', $provides));
    }
}
