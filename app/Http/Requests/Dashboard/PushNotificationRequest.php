<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class PushNotificationRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $route =  $this->route()->getName();

        if($route == "Dashboard.PushNotification.store")
        {
            $rules =  [
                'title' => ['required' , 'string'],
                'body'  => ['required' , 'string'],
                'users' => ['required' , 'array']
            ];
        }



        return $rules;
    }
}
