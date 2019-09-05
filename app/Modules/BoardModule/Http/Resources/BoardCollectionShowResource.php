<?php

namespace BoardModule\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BoardCollectionShowResource extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data'       => $this->collection
            , 
            'status'     => 'Success',
            'statusCode' => 200
        ];
    }
}
