<?php

return [
    'fields' => [
        'first_name' => [
            'label' => 'First Name',
            'placeholder' => 'Enter your first name',
            'tooltip' => 'Enter your first name',
            'help' => 'Enter your first name',
        ],
        'last_name' => [
            'label' => 'Last Name',
            'placeholder' => 'Enter your last name',
            'tooltip' => 'Enter your last name',
            'help' => 'Enter your last name',
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'Enter your email',
            'tooltip' => 'Enter a valid email address',
            'help' => 'Enter your email address',
        ],
        'phone' => [
            'label' => 'Phone',
            'placeholder' => 'Enter your phone number',
            'tooltip' => 'Enter a valid phone number',
            'help' => 'Enter your phone number',
        ],
        'address' => [
            'label' => 'Address',
            'placeholder' => 'Enter your address',
            'tooltip' => 'Enter your residential address',
            'help' => 'Enter your address',
        ],
        'city' => [
            'label' => 'City',
            'placeholder' => 'Enter your city',
            'tooltip' => 'Enter your city of residence',
            'help' => 'Enter your city',
        ],
        'postal_code' => [
            'label' => 'Postal Code',
            'placeholder' => 'Enter postal code',
            'tooltip' => 'Enter your postal code',
            'help' => 'Enter postal code',
        ],
        'province' => [
            'label' => 'Province',
            'placeholder' => 'Enter province',
            'tooltip' => 'Enter your province of residence',
            'help' => 'Enter province',
        ],
        'country' => [
            'label' => 'Country',
            'placeholder' => 'Enter country',
            'tooltip' => 'Enter your country of residence',
            'default' => 'Italy',
            'help' => 'Enter your country of residence',
        ],
        'password' => [
            'label' => 'Password',
            'placeholder' => 'Enter your password',
            'tooltip' => 'Password must be at least 8 characters long',
            'help' => 'Enter your password',
        ],
        'password_confirmation' => [
            'label' => 'Confirm Password',
            'placeholder' => 'Confirm your password',
            'tooltip' => 'Re-enter your password for confirmation',
        ],
        'terms' => [
            'label' => 'I accept the terms and conditions',
            'tooltip' => 'You must accept the terms and conditions to proceed',
        ],
        'newsletter' => [
            'label' => 'Subscribe to newsletter',
            'tooltip' => 'Receive updates and news via email',
            'help' => 'Confirm your password',
        ],
    ],
    'buttons' => [
        'register' => 'Register',
        'next' => 'Next',
        'back' => 'Back',
        'complete' => 'Complete Registration',
    ],
    'messages' => [
        'success' => 'Registration completed successfully!',
        'error' => 'An error occurred during registration.',
        'validation_error' => 'Please fill in all required fields to proceed.',
    ],
    'steps' => [
        'personal_data' => [
            'title' => 'Personal Data',
            'description' => 'Enter your personal information',
        ],
        'contacts' => [
            'title' => 'Contacts and Address',
            'description' => 'Enter your contact information and address',
        ],
        'isee' => [
            'title' => 'ISEE Data',
            'description' => 'Enter ISEE data (optional)',
        ],
        'confirmation' => [
            'title' => 'Confirm Data',
            'description' => 'Verify your information before completing registration',
        ],
    ],
];
