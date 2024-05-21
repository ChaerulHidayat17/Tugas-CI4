<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.'
        ]);
    }

    public function contact()
    {
        return view('contact'); // Assuming a contact.php view file exists
    }

    public function faqs()
    {
        return view('faqs'); // Assuming a faqs.php view file exists
    }

    public function tos()
    {
        return view('tos'); // Assuming a tos.php view file exists
    }
}
