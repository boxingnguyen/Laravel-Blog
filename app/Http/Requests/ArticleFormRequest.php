<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;
class ArticleFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     * phan quyen, vi du trong truong hop website nhieu user
     * khong cho phep user nay sua bai user kia
     * default = false;
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
			'title' =>  'required|min:10|alpha_num', // so ky hieu toi thieu
			'content'   => 'required|min:20'
        ];
    }
}
