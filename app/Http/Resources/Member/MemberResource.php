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
    //雖然get請求不太會用到$request這個參數，但JsonResource的toArray函式預設就是預期會有toArray($request)參數，所以不能亂刪
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
