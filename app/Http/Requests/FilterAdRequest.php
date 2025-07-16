<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilterAdRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // اجازه ارسال درخواست
    }

    public function rules(): array
    {
        return [
            'operator' => 'nullable|in:mci,irancell,rightel',
            'per_page' => 'nullable|integer|min:1|max:100'
        ];
    }

    public function messages(): array
    {
        return [
            'operator.in' => 'مقدار فیلد operator باید یکی از mci، irancell یا rightel باشد.',
            'per_page.integer' => 'مقدار per_page باید عدد صحیح باشد.',
            'per_page.min' => 'حداقل مقدار per_page باید ۱ باشد.',
            'per_page.max' => 'حداکثر مقدار per_page باید ۱۰۰ باشد.',
        ];
    }
}
