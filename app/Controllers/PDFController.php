<?php

namespace App\Controllers;

class PDFController extends BaseController
{
    public function viewPDF()
    {
         // Mengatur Content-Type menjadi application/pdf
         $this->response->setContentType('application/pdf');

         // Menyediakan file PDF yang ingin ditampilkan
         $pdfFile = 'public/pdf/';
 
         // Mengirim file PDF ke browser untuk tampilan
         return $this->response->download($pdfFile, null, true);
    }
}
