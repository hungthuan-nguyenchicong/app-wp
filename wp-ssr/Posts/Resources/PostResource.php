<?php

namespace Wp\Posts\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray($data): array
    {
        return [
            'id' => $this->ID,
            'slug' => $this->post_name,
            'title' => $this->post_title,
            'content' => $this->post_content,
        ];
    }
}
