<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CultureResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'category' => new CategoryResource($this->whenLoaded('category')),
            'main_image' => $this->main_image,
            'images' => $this->images,
            'provincy' => $this->provincy,
            'city' => $this->city,
            'view_count' => $this->view_count,
            'is_popular' => $this->is_popular,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
