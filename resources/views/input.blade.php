{{ asset_add("scripts.js", "anomaly.field_type.textarea::js/autosize.min.js", ["as:jackmoore/autosize.js"]) }}
{{ asset_add("scripts.js", "anomaly.field_type.textarea::js/input.js") }}

<textarea
        name="{{ $fieldType->input_name }}"
        data-max="{{ $fieldType->config('max') }}"
        rows="{{ $fieldType->config('rows', 6) }}"
        data-autogrow="{{ $fieldType->config('autogrow') }}"
        placeholder="{{ trans($fieldType->placeholder) }}"

        @if ($fieldType->config('max'))
            maxlength="{{ $fieldType->config('max') }}"
        @endif

        {{ html_attributes($fieldType->attributes) }}>{{ $fieldType->value }}</textarea>

@if ($fieldType->config('show_counter'))
    <small class="counter text-muted">
        @if ($fieldType->config('max'))
            <span class="count"></span> {{ trans('anomaly.field_type.textarea::input.characters_remaining') }}
        @else
            {{ trans('anomaly.field_type.textarea::input.character_length') }}: <span class="count"></span>
        @endif
    </small>
@endif
