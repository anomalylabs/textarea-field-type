@php
    assets('scripts.js')->add('public::vendor/anomaly/field_type/textarea/js/index.js');
@endphp

<v-input>
    <v-textarea
    {!! html_attributes([
        'value'    => $fieldType->getValue(),
        'label'    => $fieldType->getLabel(),
        'name'     => $fieldType->getInputName(),
        'messages' => $fieldType->getInstructions(),
        
        'autogrow'  => (bool)$fieldType->config('autogrow'),
        'rows'      => $fieldType->config('rows', 3),
        'maxlength' => $fieldType->config('max'),

        'readonly' => $fieldType->isReadonly() ? true : false,
        'disabled' => $fieldType->isDisabled() ? true : false,
    
        // 'data-field'      => $fieldType->getField(),
        // 'data-provides'   => $fieldType->getNamespace(),
        // 'data-field_name' => $fieldType->getFieldName(),
    
        // 'class' => $fieldType->getClass(),
        // 'id'    => $fieldType->getInputName(),
    ]) !!}
    
    outlined
    clearable
    ></v-textarea>
</v-input>

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
