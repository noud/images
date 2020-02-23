<?php

namespace App\Models;

use App\Models\Base\Image as BaseImage;

class Image extends BaseImage
{
	protected $fillable = [
		'image_type_id',
		'name',
		'filename',
		'filename_extension_id',
		'uploaded_at',
		'uploaded_with_time',
		'height',
		'width'
	];
	
	public function getUriPartDateAttribute()
	{
		return $this->uploaded_at->format('Y').'/'.$this->uploaded_at->format('m').'/'.$this->uploaded_at->format('d').'/';
	}
}
