<?php

namespace App\Models;

use App\Models\Base\ImageCategory as BaseImageCategory;

class ImageCategory extends BaseImageCategory
{
	protected $fillable = [
		'image_category_type_id',
		'image_category_type_order',
		'image_id'
	];

	public function imageCategoryType()
	{
		return $this->belongsTo(ImageCategoryType::class);
	}
}
