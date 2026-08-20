<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
      

  return [
        'title' => ['required', 'string', 'min:3', 'max:255'],

        'description' => ['required', 'string', 'min:10'],

        'category_id' => ['required', 'exists:categories,id'],

        'priority' => ['required', 'in:niedrig,mittel,hoch'],
    ]; 



    }

public function messages(): array
{
    return [
        'title.required' => 'Bitte geben Sie einen Titel ein.',
        'title.min' => 'Der Titel muss mindestens 3 Zeichen lang sein.',
        'title.max' => 'Der Titel darf maximal 255 Zeichen lang sein.',

        'description.required' => 'Bitte geben Sie eine Beschreibung ein.',
        'description.min' => 'Die Beschreibung muss mindestens 10 Zeichen lang sein.',

        'category_id.required' => 'Bitte wählen Sie eine Kategorie aus.',
        'category_id.exists' => 'Die ausgewählte Kategorie existiert nicht.',

        'priority.required' => 'Bitte wählen Sie eine Priorität aus.',
        'priority.in' => 'Die ausgewählte Priorität ist ungültig.',
    ];
}

}
