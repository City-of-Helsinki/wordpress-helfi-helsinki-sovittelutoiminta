<?php

namespace App\Blocks;

class QuestionAndAnswer extends NativeBlock
{
    public $name = 'hds/question-and-answer';

    public function with()
    {
        return [
            'question' => $this->attributes->question ?? '',
        ];
    }
}
