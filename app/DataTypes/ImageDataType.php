<?php

namespace App\DataTypes;

class ImageDataType
{
	public $shortcut;

    public $src;
    
    public function __construct($shortcut, $src)
    {
        $this->shortcut = $shortcut;
        $this->src = $src;
    }
}
