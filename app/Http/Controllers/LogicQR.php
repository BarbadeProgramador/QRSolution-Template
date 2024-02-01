<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use Exception;
use Illuminate\Support\Facades\Redirect;




class LogicQR extends Controller
{
    
    public function index(){

        return view('formulario');
    }

    public function pdf(Request $request){


    $codigoPrenda = $request->code;
    $textDocument = $request->textDocument;
    $qr = $request->file('qr')->store('temp');
    $rutaImagen = Storage::path($qr);
// dd($rutaImagen);
    $pdfOffline = PDF::loadView(
        'pdf.documentoQR',
        [
        'codigoPrenda' => $codigoPrenda,
        'textDocument' =>$textDocument,
        'qrPath' => $rutaImagen,
        ]
        );

        return $pdfOffline->stream($codigoPrenda);
    }
        
    
    
    }

    

