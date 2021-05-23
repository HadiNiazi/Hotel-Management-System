<?php

namespace App\Http\Requests\Publisher\Listing;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'cityAddress' => 'required|min:5|max:300',
            'existing_roommates' => 'nullable',
            'elevator' => 'required',
            'parking' => 'required',
            'furniture' => 'required',
            'ac' => 'required',
            'bedroom_furniture' => 'required',
            // 'furniture_detail' => 'nullable|min:5',
            'total_bedroom' => 'required',
            'sqm' => 'required|numeric',
            'price' => 'required|numeric',

            // 'kitchen_br1' => 'bail|required|image|dimensions:min_width=50, min_height=50|dimensions:max_width=2000,max_height=1335',
            // 'kitchen_br2' => 'bail|required|image|dimensions:min_width=50, min_height=50|dimensions:max_width=2000,max_height=1335',
            // 'kitchen_br3' => 'bail|required|image|dimensions:min_width=50, min_height=50|dimensions:max_width=2000,max_height=1335',

            // 'bedroom_br1' => 'bail|required|image|dimensions:min_width=50, min_height=50|dimensions:max_width=2000,max_height=1335',
            // 'bedroom_br2' => 'bail|required|image|dimensions:min_width=50, min_height=50|dimensions:max_width=2000,max_height=1335',
            // 'bedroom_br3' => 'bail|required|image|dimensions:min_width=50, min_height=50|dimensions:max_width=2000,max_height=1335',

            // 'bathroom_br1' => 'bail|required|image|dimensions:min_width=50, min_height=50|dimensions:max_width=2000,max_height=1335',
            // 'bathroom_br2' => 'bail|required|image|dimensions:min_width=50, min_height=50|dimensions:max_width=2000,max_height=1335',
            // 'bathroom_br3' => 'bail|required|image|dimensions:min_width=50, min_height=50|dimensions:max_width=2000,max_height=1335',

            // 'living_room_br1' => 'bail|required|image|dimensions:min_width=50, min_height=50|dimensions:max_width=2000,max_height=1335',
            // 'living_room_br2' => 'bail|required|image|dimensions:min_width=50, min_height=50|dimensions:max_width=2000,max_height=1335',
            // 'living_room_br3' => 'bail|required|image|dimensions:min_width=50, min_height=50|dimensions:max_width=2000,max_height=1335',

            // 'general_br1' => 'bail|required|image|dimensions:min_width=50, min_height=50|dimensions:max_width=2000,max_height=1335',
            // 'video' => 'bail|required|max:30000',
        ];
    }
}
