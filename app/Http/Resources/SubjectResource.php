<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubjectResource extends JsonResource
{
    /**
     * The resource instance.
     *
     * @var \App\Models\Subject
     */
    public $resource;

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'code' => $this->resource->code,
            'name' => $this->resource->name,
            'day' => $this->resource->day,
            'schedule' => $this->resource->schedule,
            'classroom' => $this->resource->classroom->classroom_number,
        ];
    }
}
