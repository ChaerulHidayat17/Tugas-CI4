<?php
namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman about yang menjelaskan tentang isi
        halaman ini.'
        ]);
    }
    public function contact()
    {
        return view('contact', [
            'title' => 'Halaman Kontak',
            'content' => 'Ini halaman Kontak'
        ]);
    }
    public function faqs()
    {
        return view('faqs', [
            'title' => 'Halaman FAQ',
            'content' => 'Ini halaman FAQ'
        ]);
    }
    public function tos()
    {
        return view('tos', [
            'title' => 'Halaman ToS',
            'content' => 'ini halaman Term of Services'
        ]);
    }
}