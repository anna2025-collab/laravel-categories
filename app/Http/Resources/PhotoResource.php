<?php

namespace App\Http\Resources;

use App\Http\Resources\Category\CategoryResourse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PhotoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'title' => $this->title,
            'description' => $this->description,
            'path' => $this->path,
            'category'=>new CategoryResourse($this->category)
        ];
    }
}
