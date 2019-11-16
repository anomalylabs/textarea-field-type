{{ asset_add("scripts.js", "anomaly.field_type.textarea::js/autosize.min.js", ["as:jackmoore/autosize.js"]) }}
{{ asset_add("scripts.js", "anomaly.field_type.textarea::js/input.js") }}

<textarea
        {!! html_attributes($fieldType->attributes([
        'value'         => null,
        'type'          => 'text',
        'maxlength'     => $fieldType->config('max'),
        'data-max'      => $fieldType->config('max'),
        'rows'          => $fieldType->config('rows', 6),
        'data-autogrow' => $fieldType->config('autogrow'),
    ])) !!}>{{ $fieldType->value }}</textarea>

@if ($fieldType->config('show_counter'))
    <small class="counter text-muted">
        @if ($fieldType->config('max'))
            <span class="count"></span> {{ trans('anomaly.field_type.textarea::input.characters_remaining') }}
        @else
            {{ trans('anomaly.field_type.textarea::input.character_length') }}: <span class="count"></span>
        @endif
    </small>
@endif
