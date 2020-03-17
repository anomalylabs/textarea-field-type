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

    public function boot()
    {
        parent::boot();

        assets("scripts.js", "anomaly.field_type.textarea::js/autosize.min.js", ["as:jackmoore/autosize.js"]);
        assets("scripts.js", "anomaly.field_type.textarea::js/input.js");
    }

    /**
     * Return the provided services.
     */
    public function provides()
    {
        return [TextareaFieldType::class, 'anomaly.field_type.textarea'];
    }
}
