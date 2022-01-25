<?php

namespace Modules\Permission\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Lang;

class PermissionResource extends JsonResource
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
            'module' => Lang::get("{$this->module}::permission.resources.{$this->asset}.title"),
            'action_group' => Lang::get("{$this->module}::permission.resources.{$this->asset}.{$this->action_group}.title"),
            'value' => 
             Lang::get("{$this->module}::permission.resources.{$this->asset}.title").'.'. 
             Lang::get("{$this->module}::permission.resources.{$this->asset}.{$this->action_group}.title").'.'.
             Lang::get("{$this->module}::permission.resources.{$this->asset}.{$this->action_group}.{$this->action}.title") ,
            'name' => $this->name,
            'tag_description' => Lang::get("{$this->module}::permission.resources.{$this->asset}.{$this->action_group}.{$this->action}.description"),
        ];
    }
}
