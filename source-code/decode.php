<?php
function custom_decrypt($ciphertext_base64, $key) {

    $ciphertext = base64_decode($ciphertext_base64);
    
    $key_bytes = array_map('ord', str_split($key));
    $key_len = count($key_bytes);

    $data = '';

    for ($i = 0; $i < strlen($ciphertext); $i++) {

        $char_code = ord($ciphertext[$i]);

        $shift_value = $key_bytes[$i % $key_len] % 26;
        $char_code -= $shift_value;

        $char_code ^= $key_bytes[$i % $key_len];

        if ($char_code < 0) {
            $char_code += 256;
        }

        $data .= chr($char_code);
    }

    return $data;
}

?>