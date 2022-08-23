<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class EngWordsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        return [
            'id' => $this->uuid,
            'uuid' => $this->uuid,
            'eng' => $this->eng,
            'rus' => $this->rus,
            'description' => $this->description,
        ];
        //return parent::toArray($request);
    }
}
