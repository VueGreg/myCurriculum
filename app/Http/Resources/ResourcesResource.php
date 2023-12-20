<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Models\TypeRessource;
use App\Http\Resources\TypeResourcesResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ResourcesResource extends JsonResource
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
            'image_adresse' => $this->image_adresse,
            'type' => TypeResourcesResource::make(TypeRessource::findOrFail($this->type_ressources_id))
        ];
    }
}
