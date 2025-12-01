<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    // app/Http/Requests/StoreProductRequest.php

public function rules(): array
{
    return [
        'sku' => ['required', 'string', 'max:255', 'unique:products'], // Harus unik
        'name' => ['required', 'string', 'max:255'],
        'stock' => ['required', 'integer', 'min:0'],
        'description' => ['nullable', 'string'],
    ];
}
}
