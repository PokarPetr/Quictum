<?php

declare(strict_types=1);

class Validator {
    public function __construct(string $text){
        $this->text = $text;
    }
    public function string_validation(): bool
    {
        return boolval(count(explode("{", $this->text)) === count(explode("}", $this->text)));
    }
}

$text_1 = "{{lajkdhf{adfa}{}adfasdfadf{}}}";
$validator_1 = new Validator($text_1);
$text_2 = "{{lajkdhf{adfa";
$validator_2 = new Validator($text_2);

print_r($validator_1->string_validation());
var_dump($validator_2->string_validation());