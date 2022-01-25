<?php

namespace Modules\Core\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class OptionResponse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            $this->key=> json_decode($this->value)
        ];
    }
}
