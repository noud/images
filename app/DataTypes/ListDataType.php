<?php

namespace App\DataTypes;

class ListDataType
{
	public $shortcut;

    public $collection;
    
    public function __construct($shortcut, $collection)
    {
        $this->shortcut = $shortcut;
        $this->collection = $collection;
    }
}
