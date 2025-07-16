<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'        => $this->id,
            'number'    => $this->number,
            'operator'  => $this->operator,
            'price'     => (float) $this->price,
            'voice_url' => $this->voice_url,
            'video_url' => $this->video_url,
            'created_at'=> $this->created_at->toDateTimeString(),
        ];
    }
}
