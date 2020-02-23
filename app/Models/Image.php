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

	public function category()
	{
		return $this->hasOne(ImageCategory::class);
	}
	
	// @todo not used
	// public function imageCategoryTypes()
	// {
    //     return $this->hasManyThrough(ImageCategoryType::class, ImageCategory::class);
	// }

	public function getUriPartAttribute()
	{
		return '/'.$this->uri_part_path.'/'.(!isset($this->category) || isset($this->category) && $this->category->image_category_type->uri_part_date ? $this->uri_part_date.'/' : '');
	}
	
	public function getUriPartPathAttribute()
	{
		return isset($this->category) ? $this->category->image_category_type->uri_part_path : 'images';
	}
	
	public function getUriPartDateAttribute()
	{
		return $this->uploaded_at->format('Y/m/d');
	}
	
	public function getExtensionAttribute()
	{
		return $this->image_type ? $this->image_type->name : 'gif';
	}
	
	public function getSrcAttribute()
	{
		return $this->uri_part.$this->filename.'.'.$this->extension;
	}
}
