<?php

// $key = "secret_key_" . rand(100000,999999);

function custom_encrypt($data, $key) {
    
    $data = json_encode($data);

    $key_bytes = array_map('ord', str_split($key));
    $key_len = count($key_bytes);
    
    $ciphertext = '';

    for ($i = 0; $i < strlen($data); $i++) {
        $char_code = ord($data[$i]);

        $char_code ^= $key_bytes[$i % $key_len];

        $shift_value = $key_bytes[$i % $key_len] % 26;  
        $char_code += $shift_value;

        if ($char_code > 255) {
            $char_code -= 256;
        }

        $ciphertext .= chr($char_code);
    }

    return str_replace(['+', '='], [',', '-'], base64_encode($ciphertext));
}
?>
