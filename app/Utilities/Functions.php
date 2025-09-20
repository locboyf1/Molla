<?php

function create_alias($string)
{
    // 1. Chuyển chuỗi về dạng UTF-8
    // Lợi ích: Đảm bảo xử lý đúng các ký tự đặc biệt và dấu
    $string = mb_strtolower($string, 'UTF-8');

    // 2. Chuẩn hóa chuỗi bằng Normalizer
    // Loại bỏ dấu, ví dụ: "á" -> "a"
    $string = Normalizer::normalize($string, Normalizer::FORM_NFD);

    // 3. Loại bỏ các ký tự dấu còn lại
    // Tùy thuộc vào phiên bản PHP và hệ điều hành, có thể còn lại một vài dấu, 
    // hàm này sẽ loại bỏ nốt.
    $string = preg_replace('/[\p{M}]/u', '', $string);

    // 4. Thay thế các ký tự không phải chữ cái hoặc số bằng dấu gạch ngang
    $string = preg_replace('/[^\p{L}\p{N}]+/u', '-', $string);

    // 5. Loại bỏ dấu gạch ngang ở đầu và cuối chuỗi
    $string = trim($string, '-');

    return $string;
}
