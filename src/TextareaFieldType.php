<?php

namespace Anomaly\TextareaFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;

/**
 * Class TextareaFieldType
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class TextareaFieldType extends FieldType
{

    /**
     * The database column type.
     *
     * @var string
     */
    protected $columnType = 'text';

    /**
     * The input view.
     *
     * @var string
     */
    protected $inputView = 'anomaly.field_type.textarea::input';

    /**
     * The field config.
     *
     * @var array
     */
    public $config = [
        'rows'     => 3,
        'storage'  => null,
        'autogrow' => true,
    ];

    /**
     * Return the rules.
     *
     * @param array $rules
     * @return array
     */
    public function rules(array $rules = [])
    {
        if ($min = $this->config('min')) {
            $rules[] = 'min:' . $min;
        }

        if ($max = $this->config('max')) {
            $rules[] = 'max:' . $max;
        }

        return parent::rules($rules);
    }
}
