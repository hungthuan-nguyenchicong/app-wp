<?php

namespace Wp\Categories\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    public function toArray($data): array
    {
        // dd($data);

        return [
            'id' => $this->term_id,
            'name' => $this->term?->name,
            'slug' => $this->term?->slug,
        ];
    }
}
