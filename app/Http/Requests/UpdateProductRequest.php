<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
public function rules(): array
{
    // Mendapatkan ID produk yang sedang diupdate dari route
    $productId = $this->route('product')->id;

    return [
        // SKU harus unik, TAPI ABAIKAN (ignore) SKU milik produk yang sedang diedit
        'sku' => ['required', 'string', 'max:255', Rule::unique('products')->ignore($productId)],
        'name' => ['required', 'string', 'max:255'],
        'stock' => ['required', 'integer', 'min:0'],
        'description' => ['nullable', 'string'],
    ];
}
}

