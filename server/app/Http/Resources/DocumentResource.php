<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DocumentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->uuid,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'publication_year' => $this->publication_year,
            'filename' => $this->filename,
            // 'authors' => DocumentAuthorsResource::collection($this->authors)
        ];
    }
}
