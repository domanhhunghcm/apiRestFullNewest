<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
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
            'id'=>$this->id,
            'name'=>$this->name,
            'detail'=>$this->detail,
            'price'=>$this->price,
            'stock'=>$this->stock,
            'herf'=>[
                'link'=>route('product.show',$this->id),
            ],

        ];
    }
}
