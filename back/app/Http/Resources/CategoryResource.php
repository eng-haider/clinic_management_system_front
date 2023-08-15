<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Category;
class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return 
        [
            'id'=>$this->id,
            'name'=>$this->category_name,
            'icon'=>$this->icon,
            'images'=>$this->image,
            'sub_category'=>SubCategoryResource::collection($this->sub_category),
        ];
       
    }
}
