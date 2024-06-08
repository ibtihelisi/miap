<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrcodeController extends Controller
{
    //
    public function generateQRCode()
    {
        // Lien vers la page que vous voulez que le QR code ouvre
        $url = route('QRMenu.restaurant', ['id' => Auth::user()->id]);
    
        // Générer le code QR avec l'URL spécifique
        $qrCode = QrCode::size(300)->generate($url);
    
        // Passer les données à la vue
        return view('client.qrcode.index', compact('qrCode'));
    }
    

    


    
        public function downloadQRCode()
        {
            // Lien vers la page du restaurant spécifique
            $url = route('QRMenu.restaurant', ['id' => Auth::user()->id]);
    
            // Générer le code QR avec l'URL spécifique
            $qrCode = QrCode::size(300)->generate($url);
    
            // Générer une réponse avec l'image du code QR
            $response = Response::make($qrCode);
    
           // Retourner une réponse avec l'image du code QR en tant que fichier téléchargeable
    return Response::make($qrCode, 200, [
        'Content-Type' => 'image/png',
        'Content-Disposition' => 'attachment; filename="qrcode.png"',
    ]);
        }
    
    
    


}
