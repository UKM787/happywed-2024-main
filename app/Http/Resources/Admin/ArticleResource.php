<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);

       return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body
       ];
    }

    public function with($request)  {
        return [
            'version' => '1.0.0',
            'author_url' => url('http://google.com')
        ];
    }
}
