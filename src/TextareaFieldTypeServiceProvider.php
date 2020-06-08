<?php

namespace Anomaly\TextareaFieldType;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;

/**
 * Class TextareaFieldTypeServiceProvider
 *
 * @link   http://pyrocms.com/
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class TextareaFieldTypeServiceProvider extends AddonServiceProvider implements DeferrableProvider
{

    /**
     * The addon alilases.
     *
     * @var array
     */
    public $aliases = [
        'textarea' => 'anomaly.field_type.textarea'
    ];

    /**
     * Return the provided services.
     */
    public function provides()
    {
        return [TextareaFieldType::class, 'anomaly.field_type.textarea', 'textarea'];
    }
}
