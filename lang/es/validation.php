<?php





return 
[
    'accepted' => "El :attribute  debe ser aceptado.",
    'accepted_if' => "La :attribute  debe aceptarse cuando :other  es :value .",
    'active_url' => "La :attribute  no es una URL válida.",
    'after' => "El :attribute  debe ser una fecha posterior a :date.",
    'after_or_equal' => "La :attribute  debe ser una fecha posterior o igual a :date.",
    'alpha' => "La :attribute  solo debe contener letras.",
    'alpha_dash' => "La :attribute  solo debe contener letras, números, guiones y guiones bajos.",
    'alpha_num' => "La :attribute  solo debe contener letras y números.",
    'array' => "El :attribute  debe ser una matriz.",
    'ascii' => "El :attribute  solo debe contener caracteres alfanuméricos y símbolos de un solo byte.",
    'before' => "El :attribute  debe ser una fecha anterior a :date.",
    'before_or_equal' => "La :attribute  debe ser una fecha anterior o igual a :date.",
    'between' => 
        [
            'array' => "El :attribute  debe tener elementos entre :min  y :max .",
            'file' => "El :attribute  debe estar entre :min  y :max  kilobytes.",
            'numeric' => "El :attribute  debe estar entre :min  y :max .",
            'string' => "El :attribute  debe estar entre los caracteres :min  y :max .",
        ],

    'boolean' => "El campo :attribute  debe ser verdadero o falso.",
    'confirmed' => "La confirmación :attribute  no coincide.",
    'current_password' => "La contraseña es incorrecta.",
    'date' => "La :attribute  no es una fecha válida.",
    'date_equals' => "El :attribute  debe ser una fecha igual a :date.",
    'date_format' => "El :attribute  no coincide con el formato :format.",
    'decimal' => "La :attribute  debe tener :dateecimales decimales.",
    'declined' => "El :attribute  debe ser rechazado.",
    'declined_if' => "El :attribute  debe ser declinado cuando :other  es :value .",
    'different' => "El :attribute  y :other  deben ser diferentes.",
    'digits' => "El :attribute  debe ser :dateigits dígitos.",
    'digits_between' => "El :attribute  debe estar entre :min  y :max  dígitos.",
    'dimensions' => "El :attribute  tiene dimensiones de imagen no válidas.",
    'distinct' => "El campo :attribute  tiene un valor duplicado.",
    'doesnt_end_with' => "El :attribute  no puede terminar con uno de los siguientes: :value s.",
    'doesnt_start_with' => "El :attribute  no puede comenzar con uno de los siguientes: :value s.",
    'email' => "El :attribute  debe ser una dirección de correo electrónico válida.",
    'ends_with' => "El :attribute  debe terminar con uno de los siguientes: :value s.",
    'enum' => "El :attribute  seleccionado no es válido.",
    'exists' => "El :attribute  seleccionado no es válido.",
    'file' => "El :attribute  debe ser un archivo.",
    'filled' => "El campo :attribute  debe tener un valor.",
    'gt' => 
        [
            'array' => "El :attribute  debe tener más de :value  elementos.",
            'file' => "El :attribute  debe ser mayor que :value  kilobytes.",
            'numeric' => "El :attribute  debe ser mayor que :value .",
            'string' => "Los caracteres :attribute  deben ser mayores que :value .",
        ],

    'gte' => 
        [
            'array' => "El :attribute  debe tener elementos :value  o más.",
            'file' => "El :attribute  debe ser mayor o igual que :value  kilobytes.",
            'numeric' => "El :attribute  debe ser mayor o igual que :value .",
            'string' => "El :attribute  debe ser mayor o igual que los caracteres :value .",
        ],

    'image' => "El :attribute  debe ser una imagen.",
    'in' => "El :attribute  seleccionado no es válido.",
    'in_array' => "El campo :attribute  no existe en :other .",
    'integer' => "El :attribute  debe ser un número entero.",
    'ip' => "La :attribute  debe ser una dirección IP válida.",
    'ipv4' => "El :attribute  debe ser una dirección IPv4 válida.",
    'ipv6' => "El :attribute  debe ser una dirección IPv6 válida.",
    'json' => "El :attribute  debe ser una cadena JSON válida.",
    'lowercase' => "La :attribute  debe estar en minúsculas.",
    'lt' => 
        [
            'array' => "El :attribute  debe tener menos de :value  elementos.",
            'file' => "El :attribute  debe ser menor que :value  kilobytes.",
            'numeric' => "El :attribute  debe ser menor que :value .",
            'string' => "El :attribute  debe tener menos de :value  caracteres.",
        ],

    'lte' => 
        [
            'array' => "El :attribute  no debe tener más de :value  elementos.",
            'file' => "El :attribute  debe ser menor o igual que :value  kilobytes.",
            'numeric' => "El :attribute  debe ser menor o igual que :value .",
            'string' => "El :attribute  debe ser menor o igual que :value  caracteres.",
        ],

    'mac_address' => "La :attribute  debe ser una dirección MAC válida.",
    'max' => 
        [
            'array' => "El :attribute  no debe tener más de :max  elementos.",
            'file' => "El :attribute  no debe ser mayor que :max  kilobytes.",
            'numeric' => "El :attribute  no debe ser mayor que :max .",
            'string' => "El :attribute  no debe ser mayor que :max  caracteres.",
        ],

    'max_digits' => "El :attribute  no debe tener más de :max  dígitos.",
    'mimes' => "El :attribute  debe ser un archivo de tipo: :value s.",
    'mimetypes' => "El :attribute  debe ser un archivo de tipo: :value s.",
    'min' => 
        [
            'array' => "El :attribute  debe tener al menos :min  elementos.",
            'file' => "El :attribute  debe tener al menos :min  kilobytes.",
            'numeric' => "El :attribute  debe ser al menos :min .",
            'string' => "El :attribute  debe tener al menos :min  caracteres.",
        ],

    'min_digits' => "El :attribute  debe tener al menos :min  dígitos.",
    'multiple_of' => "El :attribute  debe ser múltiplo de :value .",
    'not_in' => "El :attribute  seleccionado no es válido.",
    'not_regex' => "El formato :attribute  no es válido.",
    'numeric' => "El :attribute  debe ser un número.",
    'password' => 
        [
            'letters' => "La :attribute  debe contener al menos una letra.",
            'mixed' => "La :attribute  debe contener al menos una letra mayúscula y una minúscula.",
            'numbers' => "La :attribute  debe contener al menos un número.",
            'symbols' => "La :attribute  debe contener al menos un símbolo.",
            'uncompromised' => "El :attribute  dado ha aparecido en una fuga de datos. Por favor, elija una diferente: a.",
        ],

    'present' => "El campo :attribute  debe estar presente.",
    'prohibited' => "El campo :attribute  está prohibido.",
    'prohibited_if' => "El campo :attribute  está prohibido cuando :other  es :value .",
    'prohibited_unless' => "El campo :attribute  está prohibido a menos que :other  esté en :value s.",
    'prohibits' => "El campo :attribute  prohíbe que :other  esté presente.",
    'regex' => "El formato :attribute  no es válido.",
    'required' => "El campo :attribute  es obligatorio.",
    'required_array_keys' => "El campo :attribute  debe contener entradas para: :value s.",
    'required_if' => "El campo :attribute  es obligatorio cuando :other  es :value .",
    'required_if_accepted' => "El campo :attribute  es obligatorio cuando :secondse acepta.",
    'required_unless' => "El campo :attribute  es obligatorio a menos que :other  esté en :value s.",
    'required_with' => "El campo :attribute  es obligatorio cuando :value s está presente.",
    'required_with_all' => "El campo :attribute  es obligatorio cuando :value s están presentes.",
    'required_without' => "El campo :attribute  es obligatorio cuando :value s no está presente.",
    'required_without_all' => "El campo :attribute  es obligatorio cuando ninguno de los :value  está presente.",
    'same' => "El :attribute  y :other  deben coincidir.",
    'size' => 
        [
            'array' => "El :attribute  debe contener elementos :secondsize .",
            'file' => "El :attribute  debe ser :secondsize  kilobytes.",
            'numeric' => "El :attribute  debe ser :secondsize .",
            'string' => "Los caracteres :attribute  deben ser :secondsize .",
        ],

    'starts_with' => "El :attribute  debe comenzar con uno de los siguientes: :value s.",
    'string' => "El :attribute  debe ser una cadena.",
    'timezone' => "El :attribute  debe ser una zona horaria válida.",
    'unique' => "El :attribute  ya ha sido tomado.",
    'uploaded' => "El :attribute  no se pudo cargar.",
    'uppercase' => "La :attribute  debe estar en mayúsculas.",
    'url' => "El :attribute  debe ser una URL válida.",
    'ulid' => "El :attribute  debe ser un ULID válido.",
    'uuid' => "El :attribute  debe ser un UUID válido.",
    'custom' => 
        [
            'attribute-name' => 
                [
                    'rule-name' => "mensaje personalizado",
                ],

        ],

    'attributes' => 
        [
        ],

];