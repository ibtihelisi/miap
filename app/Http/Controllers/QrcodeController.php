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
        // Fetch user data from the database
        $user = Auth::user();
        $data = [
            'id' => $user->id,
            'name' => $user->restaurant_name,
        ];
    
        // Generate the QR code
        $qrCode = QrCode::size(300)->generate(json_encode($data));
    
        return view('client.qrcode.index', compact('qrCode'));
    }


    
    public function downloadQRCode()
    {
        // Fetch user data from the database
        $user = Auth::user();
        $data = [
            'id' => $user->id,
            'name' => $user->restaurant_name,
        ];
    
        // Generate the QR code
        $qrCode = QrCode::size(300)->generate(json_encode($data));
    
        // Convert QR code image to PNG format
        $imageData = base64_decode($qrCode);
    
        // Define the path to save the QR code image
        $qrCodePath = public_path('uploads/qrcodes/qrcode.png');
    
        // Save the QR code image to the specified path
        file_put_contents($qrCodePath, $imageData);
    
        // Set the download response
        $headers = [
            'Content-Type' => 'image/png',
            'Content-Disposition' => 'attachment; filename=qrcode.png',
 
           
        ];
    // Return the download response with the file contents
        return response()->file($qrCodePath,  $headers);
    }
    


}
