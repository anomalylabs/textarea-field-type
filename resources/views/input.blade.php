@php
    assets('scripts.js')->add('public::vendor/anomaly/field_type/textarea/js/index.js');
@endphp

<textarea-field-type {!! html_attributes($fieldType->attributes([
    'autogrow' => $fieldType->config('autogrow'),
    'maxlength' => $fieldType->config('max'),
    'rows' => $fieldType->config('rows', 3),
])) !!}/>

{{-- <textarea {!! html_attributes($fieldType->attributes()) !!}>{{ $fieldType->value }}</textarea> --}}

{{-- @if ($fieldType->config('show_counter'))
    <small class="counter text-muted">
        @if ($fieldType->config('max'))
            <span class="count"></span> {{ trans('anomaly.field_type.textarea::input.characters_remaining') }}
        @else
            {{ trans('anomaly.field_type.textarea::input.character_length') }}: <span class="count"></span>
        @endif
    </small>
@endif --}}
