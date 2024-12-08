<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function sendOrder(Request $request)
    {
        $cart = $request->input('cart');
        $contactNumber = $request->input('contact_number'); // Número de contacto del cliente

        if (empty($cart)) {
            return response()->json(['message' => 'El carrito está vacío'], 400);
        }

        if (empty($contactNumber)) {
            return response()->json(['message' => 'El número de contacto es obligatorio'], 400);
        }

        // Dirección fija para el correo
        $fixedEmail = 'ventas@cactaceacosmeticanatural.mx';

        // Obtener el correo del usuario autenticado
        $user = Auth::user();
        $userEmail = $user ? $user->email : null;

        try {
            // Enviar el correo
            Mail::send('emails.order', ['cart' => $cart, 'contactNumber' => $contactNumber], function ($message) use ($fixedEmail, $userEmail) {
                $message->to($fixedEmail)->subject('Nuevo Pedido'); // Correo fijo

                if ($userEmail) {
                    $message->cc($userEmail); // Enviar copia al usuario autenticado
                }
            });

            return response()->json(['message' => 'Pedido enviado con éxito'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al enviar el correo: ' . $e->getMessage()], 500);
        }
    }
}
