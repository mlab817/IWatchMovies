<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
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
            'title'     => $this->title,
            'image'     => $this->image,
            'rating'    => (float) $this->rating,
//            'url'       => env('MOVIES_URL', 'http://localhost:8000') . $this->url,
            'url'  => env('MOVIES_URL', 'http://localhost:8000') . '/watch-movie' . str_replace('/movie','', $this->url)
        ];
    }
}
