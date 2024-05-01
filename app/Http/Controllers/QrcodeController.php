<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrcodeController extends Controller
{
    //



    
    public function showCategories($userId)
{
    $user = User::findOrFail($userId);
    $categories = $user->categories()->pluck('name');
    
    return response()->json(['categories' => $categories]);
}

public function scanQrCode(Request $request)
{
    // Récupérer l'ID de l'utilisateur à partir des données du QR code
    $userId = $request->input('user_id');

    // Vérifier si l'utilisateur existe dans la base de données
    $user = User::find($userId);

    if (!$user) {
        // Si l'utilisateur n'existe pas, retourner une erreur ou rediriger vers une page d'erreur
        return redirect()->route('error')->with('message', 'Utilisateur introuvable.');
    }

    // Rediriger l'utilisateur vers la page appropriée, par exemple, la page affichant ses catégories
    return redirect()->route('user.categories', ['userId' => $userId]);
}











public function generateQrCode(Request $request)
{
    $userId = $request->input('user_id');
    $user = User::find($userId);

    if (!$user) {
        return redirect()->route('error')->with('message', 'Utilisateur introuvable.');
    }

    // Génération du QR code
    $qrCode = QrCode::size(200)->generate($user->email);

    // Enregistrement de l'URL du QR code dans la base de données
    $qrcode = Qrcode::updateOrCreate(
        ['user_id' => $userId],
        ['qr_code_url' => $qrCode]
    );

    return redirect()->route('user.categories', ['userId' => $userId]);
}

}
