<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutRequest extends FormRequest
{
    /**
     * Détermine si l'utilisateur est autorisé à faire cette requête.
     */
    public function authorize(): bool
    {
        return true; // Modifiez cette méthode si vous avez besoin d'une logique d'autorisation
    }

    /**
     * Obtient les règles de validation qui s'appliquent à la requête.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'image1' => 'sometimes|required|string|max:255',
            'image2' => 'sometimes|required|string|max:255',
            'image3' => 'sometimes|required|string|max:255',
            'image4' => 'sometimes|required|string|max:255',
            'section1_title' => 'sometimes|required|string',
            'section1_content' => 'sometimes|required|string',
            'section2_title' => 'sometimes|required|string',
            'section2_content' => 'sometimes|required|string',
            'image5' => 'sometimes|required|string|max:255',
            'extra_info' => 'sometimes|required|string',
        ];
    }

    /**
     * Obtient les messages de validation personnalisés.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.sometimes' => 'Le titre est parfois requis.',
            'title.required' => 'Le titre est obligatoire.',
            'title.string' => 'Le titre doit être une chaîne de caractères.',
            'title.max' => 'Le titre ne peut pas dépasser 255 caractères.',
            'description.sometimes' => 'La description est parfois requise.',
            'description.required' => 'La description est obligatoire.',
            'description.string' => 'La description doit être une chaîne de caractères.',
            'image1.sometimes' => 'L\'image 1 est parfois requise.',
            'image1.required' => 'L\'image 1 est obligatoire.',
            'image1.string' => 'L\'image 1 doit être une chaîne de caractères.',
            'image1.max' => 'L\'image 1 ne peut pas dépasser 255 caractères.',
            'image2.sometimes' => 'L\'image 2 est parfois requise.',
            'image2.required' => 'L\'image 2 est obligatoire.',
            'image2.string' => 'L\'image 2 doit être une chaîne de caractères.',
            'image2.max' => 'L\'image 2 ne peut pas dépasser 255 caractères.',
            'image3.sometimes' => 'L\'image 3 est parfois requise.',
            'image3.required' => 'L\'image 3 est obligatoire.',
            'image3.string' => 'L\'image 3 doit être une chaîne de caractères.',
            'image3.max' => 'L\'image 3 ne peut pas dépasser 255 caractères.',
            'image4.sometimes' => 'L\'image 4 est parfois requise.',
            'image4.required' => 'L\'image 4 est obligatoire.',
            'image4.string' => 'L\'image 4 doit être une chaîne de caractères.',
            'image4.max' => 'L\'image 4 ne peut pas dépasser 255 caractères.',
            'section1_title.sometimes' => 'Le titre de la section 1 est parfois requis.',
            'section1_title.required' => 'Le titre de la section 1 est obligatoire.',
            'section1_title.string' => 'Le titre de la section 1 doit être une chaîne de caractères.',
            'section1_content.sometimes' => 'Le contenu de la section 1 est parfois requis.',
            'section1_content.required' => 'Le contenu de la section 1 est obligatoire.',
            'section1_content.string' => 'Le contenu de la section 1 doit être une chaîne de caractères.',
            'section2_title.sometimes' => 'Le titre de la section 2 est parfois requis.',
            'section2_title.required' => 'Le titre de la section 2 est obligatoire.',
            'section2_title.string' => 'Le titre de la section 2 doit être une chaîne de caractères.',
            'section2_content.sometimes' => 'Le contenu de la section 2 est parfois requis.',
            'section2_content.required' => 'Le contenu de la section 2 est obligatoire.',
            'section2_content.string' => 'Le contenu de la section 2 doit être une chaîne de caractères.',
            'image5.sometimes' => 'L\'image 5 est parfois requise.',
            'image5.required' => 'L\'image 5 est obligatoire.',
            'image5.string' => 'L\'image 5 doit être une chaîne de caractères.',
            'image5.max' => 'L\'image 5 ne peut pas dépasser 255 caractères.',
            'extra_info.sometimes' => 'Les informations supplémentaires sont parfois requises.',
            'extra_info.required' => 'Les informations supplémentaires sont obligatoires.',
            'extra_info.string' => 'Les informations supplémentaires doivent être une chaîne de caractères.',
        ];
    }
}
