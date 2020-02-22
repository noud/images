<?php

namespace App\DataTypes;

class ImagesListDataType
{
	public $shortcut;

    public $collection;
    
    public function __construct($shortcut, $collection)
    {
        $this->shortcut = $shortcut;
        $this->collection = $collection;
    }
}
