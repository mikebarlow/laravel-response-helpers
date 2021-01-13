<?php

namespace Tests;

use Illuminate\Http\Resources\Json\JsonResource;

class MyResource extends JsonResource
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
            'original' => $this->resource,
            'flipped'  => array_flip($this->resource),
        ];
    }
}
