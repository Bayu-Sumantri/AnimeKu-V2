<?php

namespace App\Http\Controllers;

use App\Models\User;
use PhpOffice\PhpWord\PhpWord;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AnimeKu;
use Barryvdh\DomPDF\Facade\Pdf;

use PhpOffice\PhpWord\Writer\PDF as WriterPDF;

class CetakController extends Controller
{   
    
    public function index()
    {
    $user = User::orderBy('created_at','DESC')->simplePaginate(10);
    return view('report_user.index',compact('user'));
    }
    
    public function cetakPDF()
    {
        $R_user = User::orderby('created_at','DESC')->get();
        $pdf = Pdf::loadview('report_user.lapuser', compact('R_user'));
        // return $R_user;
        return $pdf->stream();
    }
    
    public function cetakPDFanime()
    {
        $R_animeku = AnimeKu::orderby('created_at','DESC')->get();
        
        $pdf = Pdf::loadview('report_animeku.report_animeku', compact('R_animeku'));

            // //Set timeout
            // $pdf->setTimeout(300);
    
        // return $R_user;
        return $pdf->stream();
    }

    public function cetakWord()
    {
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();
        $section->addText('Hello, World!');

        $file = storage_path('app/dokumen.docx');
        $phpWord->save($file);

        return response()->download($file);
    }
}