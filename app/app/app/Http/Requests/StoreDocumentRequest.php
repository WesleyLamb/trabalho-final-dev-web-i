<?php

namespace App\Http\Requests;

use App\Rules\Base64;
use Illuminate\Foundation\Http\FormRequest;

class StoreDocumentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return request()->user()->hasPermission('documents:create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'publication_year' => ['required', 'integer', 'max:'.date('Y')],
            'abstract' => ['nullable', 'string'],
            'file' => ['required', 'file', 'mimetypes:application/pdf'],
        ];
    }
}
