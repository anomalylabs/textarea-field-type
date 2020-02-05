<?php namespace Anomaly\TextareaFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;

/**
 * Class TextareaFieldTypePresenter
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class TextareaFieldTypePresenter extends FieldTypePresenter
{

    /**
     * The decorated object.
     * This is for IDE hinting.
     *
     * @var TextareaFieldType
     */
    protected $object;

    /**
     * Return a specific line.
     *
     * @param  int $number
     * @return string
     */
    public function line($number = 1)
    {
        return array_get($this->lines(), $number - 1);
    }

    /**
     * Return the lines.
     *
     * @param  int $limit
     * @return array
     */
    public function lines($limit = 9999)
    {
        return array_map(
            function ($line) {
                return trim($line);
            },
            explode("\n", $this->object->getValue(), $limit)
        );
    }

    /**
     * Return a limited string.
     *
     * @param  int $limit
     * @param  string $end
     * @return string
     */
    public function limit($limit = 100, $end = '...')
    {
        return str_limit($this->object->getValue(), $limit, $end);
    }
}
