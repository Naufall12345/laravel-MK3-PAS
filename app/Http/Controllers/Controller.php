<?php

<<<<<<< HEAD
namespace App\Http\Controllers;

abstract class Controller
{
    //
}
=======
namespace App\Controller;

use Symfony\Component\HtmlSanitizer\HtmlSanitizer;

class MyController
{
    public function sanitizeHtml($inputHtml)
    {
        // Membuat instance dari HtmlSanitizer
        $sanitizer = new HtmlSanitizer();

        // Menggunakan HtmlSanitizer untuk membersihkan HTML
        $sanitizedHtml = $sanitizer->sanitize($inputHtml);

        return $sanitizedHtml; // Mengembalikan HTML yang sudah dibersihkan
    }
}
>>>>>>> cc099c5 (first Commit)
