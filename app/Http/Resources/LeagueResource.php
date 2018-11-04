<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LeagueResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'sport_id' => $this->sport_id,
            'name' => $this->name,
            'is_public' => $this->is_public,
            'created_by_id' => $this->created_by_id,
            'admin_id' => $this->admin_id
        ];
    }
}
