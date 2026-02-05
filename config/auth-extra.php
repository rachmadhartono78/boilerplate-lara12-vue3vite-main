<?php

return [
    'email_verification_enabled' => env('EMAIL_VERIFICATION_ENABLED', true),

    // kalau diisi, semua email verifikasi akan dikirim ke email ini
    // cocok untuk staging / development
    'email_verification_test_redirect' => env('EMAIL_VERIFICATION_TEST_REDIRECT', null),
];
