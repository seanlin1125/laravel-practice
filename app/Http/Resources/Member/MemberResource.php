<?php

namespace App\Http\Resources\Member;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MemberResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return
        [
            'id' => $this->id,
            'name' => $this->name,
            'age' => $this->age,
            'title' => $this->title,
            'intro' => $this->intro,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}