<?php

namespace App\Http\Resources;
use App\Models\Permissions;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
        ['id'=>$this->id,
        'name'=>$this->name,
        'phone'=>$this->phone,
        'email'=>$this->email,
         'Doctor'=>$this->Doctor,
         'Clinics'=>$this->Doctor->Clinics,
         'img_file'=>$this->img_name,
         'Permissions'=>Permissions::get()



    ];


    }
}
