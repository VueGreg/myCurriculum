<?php

namespace App\Http\Resources;

use App\Models\Resource;
use Illuminate\Http\Request;
use App\Models\GalleryResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'duration' => $this->duration,
            'website_link' => $this->website_link,
            'github_link' => $this->github_link,
            'resources' => Resource::select('name', 'type_ressources_id', 'image_adress')
                ->whereIn('id' , GalleryResource::select('resources_id')->where('projects_id', $this->id))->get()
        ];
    }
}
