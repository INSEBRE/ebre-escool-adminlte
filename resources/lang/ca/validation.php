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

    'accepted'             => 'El :attribute ha de ser acceptat.',
    'active_url'           => 'El :attribute no és un URL vàlida.',
    'after'                => 'El :attribute ha de ser una data després :date.',
    'alpha'                => 'El :attribute només pot contenir lletres.',
    'alpha_dash'           => 'El :attribute només pot contenir lletres, numeros, i guions.',
    'alpha_num'            => 'El :attribute només pot contenir lletres i numeros.',
    'array'                => 'El :attribute ha de ser una array.',
    'before'               => 'El :attribute ha de ser una data anterior :date.',
    'between'              => [
        'numeric' => "El :attribute ha d'estar entre :min i :max.",
        'file'    => "El :attribute ha d'estar entre :min i :max kilobytes.",
        'string'  => "El :attribute ha d'estar entre :min and :max caracters.",
        'array'   => 'El :attribute ha de tenir entre :min i :max articles.',
    ],
    'boolean'              => 'El :attribute camp ha de ser vertader o fals.',
    'confirmed'            => 'El :attribute confirmació no coincideix.',
    'date'                 => 'El :attribute no és una data vàlida.',
    'date_format'          => 'El :attribute no coincideix amb el format :format.',
    'digits'               => 'El :attribute ha de ser :digits dígits.',
    'digits_between'       => "El :attribute ha d'estar entre :min i :max dígits.",
    'email'                => 'El :attribute ha de ser una adreça vàlida de correu electrònic.',
    'exists'               => 'El :attribute selecionat no es vàlid.',
    'filled'               => 'El :attribute es requereix un camp.',
    'image'                => 'El :attribute ha de ser una imatge.',
    'in'                   => 'El :attribute selecionat no es vàlid.',
    'integer'              => 'El :attribute ha de ser un enter.',
    'ip'                   => 'El :attribute ha de ser una adreça IP vàlida.',
    'json'                 => 'El :attribute ha de ser una cadena JSON vàlida.',
    'max'                  => [
        'numeric' => 'El :attribute no pot ser més gran que :max.',
        'file'    => 'El :attribute no pot ser més gran que :max kilobytes.',
        'string'  => 'El :attribute no pot ser més gran que :max caracters.',
        'array'   => 'El :attribute no pot tenir més de :max articles.',
    ],
    'mimes'                => 'El :attribute ha de ser un arxiu de type: :values.',
    'min'                  => [
        'numeric' => 'El :attribute ha de ser com a mínim :min.',
        'file'    => 'El :attribute ha de ser com a mínim :min kilobytes.',
        'string'  => 'El :attribute ha de ser com a mínim :min characters.',
        'array'   => 'El :attribute ha de tenir almenys :min items.',
    ],
    'not_in'               => 'El :attribute selecionat no es vàlid.',
    'numeric'              => 'El :attribute ha de ser un nombre.',
    'regex'                => 'El :attribute format no és vàlid.',
    'required'             => 'El :attribute es requereix un camp.',
    'required_if'          => 'El :attribute es requereix un camp quan :other es :value.',
    'required_unless'      => 'El :attribute camp és obligatori a menys :other està dins :values.',
    'required_with'        => 'El :attribute es requereix un camp quan :values està present.',
    'required_with_all'    => 'El :attribute es requereix un camp quan :values està present.',
    'required_without'     => 'El :attribute es requereix un camp quan :values no està present.',
    'required_without_all' => 'El :attribute es requereix un camp quan cap de :values són presents.',
    'same'                 => 'El :attribute hi ha de coincidir amb :other.',
    'size'                 => [
        'numeric' => 'El :attribute ha de ser :size.',
        'file'    => 'El :attribute ha de ser :size kilobytes.',
        'string'  => 'El :attribute ha de ser :size caracters.',
        'array'   => 'El :attribute ha de contenir :size article.',
    ],
    'string'               => 'El :attribute ha de ser una cadena.',
    'timezone'             => 'El :attribute ha de ser una zona vàlida.',
    'unique'               => "El :attribute ja s'ha introduït aquest codi.",
    'url'                  => 'El :attribute format no és vàlid
.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
