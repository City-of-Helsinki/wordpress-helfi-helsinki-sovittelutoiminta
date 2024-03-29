<?php

namespace App\Blocks;

class Link extends NativeBlock
{
    public $name = 'hds/link';

    public function with()
    {
        $url = $this->attributes->url ?? '';
        $isTel = $url && strpos($url, 'tel:') === 0;
        return [
            'text' => $this->attributes->text ?? '',
            'url' => $this->attributes->url ?? '',
            'isExternal' => $this->attributes->isExternal ?? '',
            'isCompact' => $this->attributes->isCompact ?? '',
            'isTel' => $isTel ?? '',
        ];
    }
}
