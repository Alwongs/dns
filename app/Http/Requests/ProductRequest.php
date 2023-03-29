<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'code' => 'required|min:3|max:255|unique:products,code',
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:5',
            'price' => 'required|numeric|min:1',
            'count' => 'required|numeric|min:0',
        ];

        if ($this->route()->named('products.update')) {
            $rules['code'] .= ',' . $this->route()->parameter('product')->id;
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.min' => 'Поле "Название" должно содержать не менее :min символов',
            'name.max' => 'Поле "Название" должно содержать не более :max символов',
            'name.required' => 'Поле "Название" обязательно для ввода',

            'code.min' => 'Поле "Код" должно содержать не менее :min символов',
            'code.max' => 'Поле "Код" должно содержать не более :max символов',
            'code.required' => 'Поле "Код" обязательно для ввода',

            'description.min' => 'Поле "Описание" должно содержать не менее :min символов',
            'description.required' => 'Поле "Описание" обязательно для ввода',

            'price.min' => 'Значение поля "Цена" должно быть не меньше :min',
            'price.required' => 'Поле "Цена" обязательно для ввода',
        ];
    }
}
