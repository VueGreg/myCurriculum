<?php

namespace App\Http\Resources;

use Illuminate\Support\Carbon;
use App\Models\Project;
use App\Models\Structure;
use Illuminate\Http\Request;
use App\Models\TypeExperience;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\StructureResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ExperienceResource extends JsonResource
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
            'type' => TypeExperience::select('type')->where('id' , $this->type_experiences_id)->get(),
            'description' => $this->description,
            'structure' => StructureResource::collection(Structure::all()),
            'projects' => ProjectResource::collection(Project::all()->where('experiences_id', $this->id)),
            'date_start' => Carbon::create($this->date_start)->translatedFormat('d/m/Y'),
            'date_end' => Carbon::create($this->date_end)->translatedFormat('d/m/Y'),
        ];
    }
}
