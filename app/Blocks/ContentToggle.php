<?php

namespace App\Blocks;

class ContentToggle extends NativeBlock
{
    public $name = 'hds/content-toggle';

    public function with()
    {
        return [
            'text' => $this->attributes->text ?? '',
            'id' => uniqid()
        ];
    }
}
