<?php

// REGEX
$regex = [
    'name' => '/^[A-zÄ-ÿ]{1,}([ \'-]{1}[A-zÄ-ÿ]{1,}){0,}$/',
    'address' => '/^([0-9]{1,4}( ?[a-z]{1,})? )?([A-zÄ-ÿ0-9]){2,}([- ]{1}[A-zÄ-ÿ0-9]{1,}){1,}$/',
    'zipCode' => '/^(([0-8]{1}[0-9]{1})|(9[0-5]{1}))[0-9]{3}$/',
    'city' => '/^[A-zÄ-ÿ]{1,}([ \'-]{1}[A-zÄ-ÿ]{1,}){0,}$/',
    'phoneNumber' => '/(^0[1-79]){1}( [0-9]{2}){4}$/',
    'password' => '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{8,}$/',
    'hut' => '/^[A-zÄ-ÿ0-9]{1,}[ \-\',A-zÄ-ÿ0-9\?\!\:\/]{1,}$/',
    'description' => '/(<script>|(&lt;script&gt;))/',
    'date' => '/^[0-9]{4}(-[0-9]{2}){2}$/',
];