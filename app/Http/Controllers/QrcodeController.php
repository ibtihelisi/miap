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
    
            // Définir les en-têtes de la réponse pour indiquer qu'il s'agit d'une image PNG à télécharger
            $response->header('Content-Type', 'image/png');
            $response->header('Content-Disposition', 'attachment; filename="qrcode.png"');
    
            return $response;
        }
    
    
    


}
