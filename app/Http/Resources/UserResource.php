<?php

namespace App\Http\Resources;

use App\Models\Experience;
use App\Models\Motivation;
use Illuminate\Http\Request;
use App\Http\Resources\ExperienceResource;
use App\Http\Resources\MotivationResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'name' => $this->name,
            'surname' => $this->surname,
            'email' => $this->email,
            'adress' => $this->adress,
            'postal_code' => $this->postal_code,
            'city' => $this->city,
            'cuntry' => $this->cuntry,
            'job' => $this->job,
            'profil_description' => $this->profil_description,
            'adress_resume_pdf' => $this->adresse_resume_pdf,
            'linked_in' => $this->linked_in,
            'phone_number' => $this->phone_number,
            'motivations' => MotivationResource::collection(Motivation::all()),
            'experiences' => ExperienceResource::collection(Experience::all())
        ];
    }
}
