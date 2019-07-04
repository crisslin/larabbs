<?php

namespace App\Http\Requests;

/**
 * @property $content
 * 解决content在RepliesController.php报错问题
 */
class ReplyRequest extends Request
{
    public function rules()
    {
        return [
            'content' => 'required|min:2',
        ];
    }

    public function messages()
    {
        return [
            // Validation messages
        ];
    }
}
