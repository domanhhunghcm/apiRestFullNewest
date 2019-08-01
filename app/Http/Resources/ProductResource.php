<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//         name
// description
// price
// stock: nếu ko có thì cho hiển thị out of stock
// discount
// totalPrice làm tròn đến vị trí thứ 2=> ra được giá cần thiết
// rating: xem thử có review không, nếu có thì tính trung bình số làm tròn đến số thứ 2, nếu ko có thì rating yet
// href => [review => page review id product]()
        return [
            'name'=>$this->name,
            'description'=>$this->detail,
            'price'=>$this->price,
            'stock'=>$this->stock==0?'Out of stock':$this->stock,
            'discount'=>$this->discount,
            'totalPrice'=>round(((100-$this->discount)/100)*$this->price),
            'rating'=>$this->reviews->count('star')>0 ? $this->reviews->sum('star')/$this->reviews->count('star') : 'not rating yet',
            'herf'=>[
                'link'=>route('review.index',$this->id),
            ],

        ];
        
    }
}
