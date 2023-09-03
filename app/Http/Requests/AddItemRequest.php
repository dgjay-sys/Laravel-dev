<?php

namespace App\Http\Requests;

use App\Models\items;
use Illuminate\Foundation\Http\FormRequest;



class AddItemRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'item_name' => ['string', 'required'],
            'item_code' => ['string', 'required'],
            'quantity' => ['string', 'required'],
            'status' => ['string', 'required'],
            'branch' => ['string'],
            'type' => ['required', 'string'],
            'user_name' => ['require', 'string']
        ];
    }

    public function messages()
    {
        return [
            'item_name.required' => 'Please provide your item name.',
            'item_code.required' => 'Please provide an item code.',
            'quantity.required' => 'Please provide an Quantity',
            'type.required' => 'Please provide an type of item',
        ];
    }
}
