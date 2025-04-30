<?php

return [
    'fields' => [
        'email' => [
            'label' => 'Email',
            'placeholder' => 'Enter your email',
            'tooltip' => 'Enter a valid email address'
        ],
        'phone' => [
            'label' => 'Phone',
            'placeholder' => 'Enter your phone number',
            'tooltip' => 'Enter a valid phone number'
        ],
        'password' => [
            'label' => 'Password',
            'placeholder' => 'Enter your password',
            'tooltip' => 'Password must be at least 8 characters long'
        ],
        'password_confirmation' => [
            'label' => 'Confirm Password',
            'placeholder' => 'Confirm your password',
            'tooltip' => 'Re-enter your password for confirmation'
        ],
        'terms' => [
            'label' => 'I accept the terms and conditions',
            'tooltip' => 'You must accept the terms and conditions to proceed'
        ],
        'newsletter' => [
            'label' => 'Subscribe to newsletter',
            'tooltip' => 'Receive updates and news via email'
        ]
    ],
    'buttons' => [
        'register' => 'Register'
    ],
    'messages' => [
        'success' => 'Registration completed successfully!',
        'error' => 'An error occurred during registration.'
    ]
]; 