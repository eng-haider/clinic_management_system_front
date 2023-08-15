<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class SubCategoryCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        

        return [
            'data' => SubCategoryResource::collection($this->collection),
            'meta' => ['count' => $this->collection->count()],
            'sucess'=>true
           ];
    }
}
