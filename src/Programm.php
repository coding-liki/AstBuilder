<?php
declare(strict_types=1);

class Programm
{
    public function __construct(private string $tagsScript, private string $rulesScript)
    {
    }

    public function exec(string $str)
    {
        $rules = \CodingLiki\GrammarParser\GrammarRuleParser::parse($this->rulesScript);
        print_r($rules);
    }
}