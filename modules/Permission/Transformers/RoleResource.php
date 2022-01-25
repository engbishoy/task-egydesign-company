<?php

namespace Modules\Permission\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class RoleResource extends JsonResource
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
          'value' => $this->name,
          'permissions' => PermissionResource::collection($this->whenLoaded('permissions')),
        ];
    }
}
