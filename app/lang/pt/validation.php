<?php

return array(

  /*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| such as the size rules. Feel free to tweak each of these messages.
	|
	*/

	"accepted"       => "O :attribute deve ser aceite.",
	"active_url"     => "O :attribute não é uma URL válida.",
	"after"          => "O :attribute deve ser uma data após :date.",
	"alpha"          => "O :attribute só pode conter letras.",
	"alpha_dash"     => "O :attribute só pode conter letras, números e traços.",
	"alpha_num"      => "O :attribute só pode conter letras e números.",
	"array"          => "O :attribute deve ser uma lista.",
	"before"         => "O :attribute deve ser uma data anterior à :date.",
	"between"        => array(
		"numeric" => "O :attribute deve estar entre :min - :max.",
		"file"    => "O :attribute deve estar entre :min - :max kilobytes.",
		"string"  => "O campo :attribute deve estar entre :min - :max caracteres.",
		"array"   => "O :attribute deve estar entre :min e :max itens.",
	),
	"boolean"          => "O campo :attribute deve ser verdadeiro ou falso.",
	"confirmed"        => "O :attribute confirmação não coincide.",
	"date"             => "O :attribute não é uma data válida.",
	"date_format"      => "O :attribute não corresponde ao formato :format.",
	"different"        => "O :attribute e :other deve ser diferente.",
	"digits"           => "O :attribute deve ter :digits dígitos.",
	"digits_between"   => "O :attribute deve ter entre :min e :max dígitos.",
	"email"            => "O :attribute não é um e-mail válido.",
	"exists"           => "O :attribute selecionado é inválido.",
	"image"            => "O :attribute deve ser uma imagem.",
	"in"               => "O :attribute selecionado é inválido.",
	"integer"          => "O :attribute deve ser um inteiro.",
	"ip"               => "O :attribute deve ser um endereço IP válido.",
	"max"              => array(
		"numeric" => "O :attribute deve ser inferior a :max.",
		"file"    => "O :attribute deve ser inferior a :max kilobytes.",
		"string"  => "O campo :attribute deve ser inferior a :max caracteres.",
        "array"   => "O :attribute não deve ter mais do que :max itens.",
	),
	"mimes"            => "O :attribute deve ser um arquivo do tipo: :values.",
	"min"              => array(
		"numeric" => "O :attribute deve conter pelo menos :min.",
		"file"    => "O :attribute deve conter pelo menos :min kilobytes.",
		"string"  => "O campo :attribute deve conter pelo menos :min caracteres.",
        "array"   => "O :attribute deve conter pelo menos :min itens.",
	),
	"not_in"           => "O :attribute selecionado é inválido.",
	"numeric"          => "O :attribute deve ser um número.",
	"regex"            => "O :attribute não é válido.",
	"required"         => "O campo :attribute deve ser preenchido.",
	"required_if"      => "O campo :attribute deve ser preenchido quando :other é :value.",
	"required_with"    => "O campo :attribute deve ser preenchido quando :values está presente.",
    "required_with_all"=> "O campo :attribute deve ser preenchido quando :values está presente.",
	"required_without" => "O campo :attribute deve ser preenchido quando :values não está presente.",
    "required_without_all"  => "O campo :attribute deve ser preenchido quando nenhum dos :values está presente.",
	"same"             => "O :attribute e :other devem ser iguais.",
	"size"             => array(
		"numeric" => "O :attribute deve ser :size.",
		"file"    => "O :attribute deve ter :size kilobyte.",
		"string"  => "O campo :attribute deve ter :size caracteres.",
        "array"   => "O :attribute deve conter :size itens.",
	),
	"unique"           => "Este :attribute já existe.",
	"url"              => "O formato :attribute é inválido.",
	"timezone"    	   => "O :attribute deve ser um fuso horário valido.",

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

	'custom' => array(),

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

	'attributes' => array(),

);
