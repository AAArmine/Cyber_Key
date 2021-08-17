<?php

return [
    'email'=>[
        'required'=>'The email field is required.',
        'email'=>'Submit a valid email address.',
        'unique'=>'This email has already been submitted',
    ],
    'success'=>'Your email has been successfully submitted.',

    
    'success_contact'=>'*Your message has been successfully sent.',
    'userName'=>[
        'required'=>'*The "Name" field is required.',
        'min'=>'*The number of characters in the "Name" field is too small.',
        'max'=>'*The number of characters in the "Name" field is too large.',
    ],
    'userPhone'=>[
        'required'=>'*The "Phone number" field is required.',
        'regex'=>'*Enter a valid phone number.',
        
    ],
    'userEmail'=>[
        'required'=>'*The "Email" field is required.',
        'email'=>'*Enter valid Email address.',
        
    ],
    'userCountry'=>[
        'required'=>'*The "Country" field is required.',
        'min'=>'*The number of characters in the "Country" field is too small.',
        'max'=>'*The number of characters in the "Country" field is too large.',
    ],
    'userMessage'=>[
        'min'=>'*The number of characters in the "Message" field is too small.',
        'required'=>'*The "Message" field is required.',
        
    ],
];
