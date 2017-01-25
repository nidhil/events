<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EventRequest extends Request
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
        return [
            'eventName'=>'required|alpha_num|max:255'          ,
            'eventLocation'=>'required|alpha_num|max:255',
            'eventStartTime'=>'required|',
            'eventEndTime'=>'required|',
            'eventStartDate'=>'required|date|after:today',
            'eventEndDate'=>'required|date|after:eventStartDate',
            'eventDescription'=>'required',
            'eventCategory'=>'required|',
            'eventPrice'=>'required|numeric',
            'eventTickets'=>'required|numeric',

        ];
    }
    public function messages()
    {
        return [
            'eventName' => 'this field is blank',
            'eventLocation'=> 'this field is blank',
            'eventStartTime'=> 'this field is blank',
            'eventEndTime'=> 'this field is blank',
            'eventStartDate'=> 'this field is blank',
            'eventEndDate'=> 'this field is blank',
            'eventDescription'=> 'this field is blank',
            'eventCategory'=> 'this field is blank',
            'eventPrice'=> 'this field is blank',
            'eventTickets'=> 'this field is blank',

        ];
    }
}
