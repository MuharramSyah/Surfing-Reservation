<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
class StoreVisitor extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\+]+)$/', // Basic phone number format validation (adjust as needed)
            'country' => 'required|exists:countries,country', // Assuming countries config
            'rating' => 'required|integer|between:0,10',
            'visit_date' => 'required|date',
            'board' => 'required|exists:boards,name', // Assuming 'board' field maps to 'board_id' foreign key
            'attachment' => 'required|file|max:2048|mimes:jpeg,jpg,png,gif', // Attachment validation
        ];
    }

    /**
     * Get custom validation messages (optional).
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Name is required.',
            'name.min' => 'Name must be at least 3 characters long.',
            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'Phone number is required.',
            'phone.regex' => 'Please enter a valid phone number format.',
            'country.required' => 'Country is required.',
            'country.in' => 'Please select a valid country.',
            'rating.required' => 'Rating is required.',
            'rating.integer' => 'Rating must be an integer.',
            'rating.between' => 'Rating must be between 0 and 10.',
            'visit_date.required' => 'Visit date is required.',
            'visit_date.date' => 'Please enter a valid date.',
            'board_id.required' => 'Board selection is required.',
            'board_id.exists' => 'The selected board does not exist.',
            'attachment.required' => 'An attachment is required.',
            'attachment.file' => 'The attachment must be a file.',
            'attachment.max' => 'The attachment must be no larger than 2 MB.',
            'attachment.mimes' => 'The attachment must be an image (jpeg, jpg, png, or gif).',
        ];
    }
}
