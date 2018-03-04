<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // memo: not allowed access but from 'hello'.
        if ($this->path() == 'hello') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'entry_name' => 'required',
            'entry_email' => 'email',
            'entry_video' => 'required|mimes:mp4',
        ];
    }

    public function messages()
    {
        return [
            'entry_name.required' => 'name is required.',
            'entry_email.email' => 'please enter valid email address.',
            'entry_video.required' => 'video is required.'
        ];
    }
}
