<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'El :attribute debe ser aceptado.',
    'active_url' => 'El :attribute no es una URL válida.',
    'after' => 'El :attribute debe ser una fecha posterior :date.',
    'after_or_equal' => 'El :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El :attribute solo puede contener letras.',
    'alpha_dash' => 'El :attribute solo puede contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El :attribute solo puede contener letras y números.',
    'array' => 'El :attribute debe ser una matriz.',
    'before' => 'El :attribute debe ser una fecha antes :date.',
    'before_or_equal' => 'El :attribute debe ser una fecha anterior o igual to :date.',
    'between' => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file' => 'El :attribute debe estar entre :min y :max kilobytes.',
        'string' => 'El :attribute debe estar entre :min y :max caracteres.',
        'array' => 'El :attribute debe estar entre :min y :max items.',
    ],
    'boolean' => 'El :attribute el campo debe ser verdadero o falso.',
    'confirmed' => 'El :attribute la confirmación no coincide.',
    'date' => 'El :attribute no es una fecha válida.',
    'date_equals' => 'El :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El :attribute no coincide con el formato :format.',
    'different' => 'El :attribute y :other debe ser diferente.',
    'digits' => 'El :attribute debe ser :digits digits.',
    'digits_between' => 'El :attribute debe estar entre :min y :max digits.',
    'dimensions' => 'El :attribute tiene dimensiones de imagen no válidas.',
    'distinct' => 'El :attribute el campo tiene un valor duplicado.',
    'email' => 'El :attribute Debe ser una dirección de correo electrónico válida.',
    'ends_with' => 'El :attribute debe terminar con uno de los siguientes: :values.',
    'exists' => 'The selected :attributees invalido.',
    'file' => 'El :attribute debe ser un archivo.',
    'filled' => 'El :attribute el campo debe tener un valor.',
    'gt' => [
        'numeric' => 'El :attribute debe ser mayor que :value.',
        'file' => 'El :attribute debe ser mayor que :value kilobytes.',
        'string' => 'El :attribute debe ser mayor que :value caracteres.',
        'array' => 'El :attribute debe tener más de :value items.',
    ],
    'gte' => [
        'numeric' => 'El :attribute debe ser mayor o igual que :value.',
        'file' => 'El :attribute debe ser mayor o igual que :value kilobytes.',
        'string' => 'El :attribute debe ser mayor o igual que :value caracteres.',
        'array' => 'El :attribute debe tener :value items o mas.',
    ],
    'image' => 'El :attribute debe ser una imagen.',
    'in' => 'The selected :attribute es invalido.',
    'in_array' => 'El :attribute el campo no existe en :other.',
    'integer' => 'El :attribute debe ser un entero.',
    'ip' => 'El :attribute debe ser una dirección IP valida.',
    'ipv4' => 'El :attribute debe ser una dirección IPv4  valida.',
    'ipv6' => 'El :attribute debe ser una dirección IPv6  valida.',
    'json' => 'El :attribute debe ser un texto JSON  valido.',
    'lt' => [
        'numeric' => 'El :attribute debe ser menor que :value.',
        'file' => 'El :attribute debe ser menor que :value kilobytes.',
        'string' => 'El :attribute debe ser menor que :value caracteres.',
        'array' => 'El :attribute debe tener menos de :value items.',
    ],
    'lte' => [
        'numeric' => 'El :attribute debe ser menor que o igual :value.',
        'file' => 'El :attribute debe ser menor que o igual :value kilobytes.',
        'string' => 'El :attribute debe ser menor que o igual :value caracteres.',
        'array' => 'El :attribute no debe tener más de :value items.',
    ],
    'max' => [
        'numeric' => 'El :attribute no puede ser mayor que :max.',
        'file' => 'El :attribute no puede ser mayor que :max kilobytes.',
        'string' => 'El :attribute no puede ser mayor que :max caracteres.',
        'array' => 'El :attribute no puede tener más de :max items.',
    ],
    'mimes' => 'El :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => 'El :attribute debe ser al menos :min.',
        'file' => 'El :attribute debe ser al menos :min kilobytes.',
        'string' => 'El :attribute debe ser al menos :min caracteres.',
        'array' => 'El :attribute debe tener al menos :min items.',
    ],
    'not_in' => 'El :attribute seleccionado es invalido.',
    'not_regex' => 'El :attribute formato es invalido.',
    'numeric' => 'El :attribute debe ser un numero.',
    'password' => 'La contraseña es incorrecta.',
    'present' => 'El :attribute campo debe estar presente.',
    'regex' => 'El formato de :attribute es invalido.',
    'required' => 'El :attribute campo es requerido.',
    'required_if' => 'El :attribute campo es obligatorio cuando :other es :value.',
    'required_unless' => 'El :attribute campo es obligatorio a menos que :other este en :values.',
    'required_with' => 'El :attribute campo es obligatorio cuando :values está presente.',
    'required_with_all' => 'El :attribute campo es obligatorio cuando :values están presentes.',
    'required_without' => 'El :attribute campo es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El :attribute campo es obligatorio cuando ninguno de los :values están presentes.',
    'same' => 'El :attribute y :other deben coincidir.',
    'size' => [
        'numeric' => 'El :attribute debe ser :size.',
        'file' => 'El :attribute debe ser :size kilobytes.',
        'string' => 'El :attribute debe ser :size caracteres.',
        'array' => 'El :attribute debe contener :size items.',
    ],
    'starts_with' => 'El :attribute debe comenzar con uno de los siguientes: :values.',
    'string' => 'El :attribute debe ser un texto.',
    'timezone' => 'El :attribute debe ser una zona valida.',
    'unique' => 'El :attribute ya se ha tomado.',
    'uploaded' => 'El :attribute no se pudo cargar.',
    'url' => 'El :attribute formato es invalido.',
    'uuid' => 'El :attribute debe ser un UUID valido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
