<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cipher;

class CaesarController extends Controller
{
    public function index()
    {
        return view('caesar');
    }

    public function process(Request $request)
    {
        $text = $request->text;
        $shift = $request->shift;
        $action = $request->action;

        if ($action == "decrypt") {
            $shift = -$shift;
        }

        $result = '';

        for ($i = 0; $i < strlen($text); $i++) {

            $char = $text[$i];

            if (ctype_alpha($char)) {

                $ascii = ord($char);
                $base = ctype_upper($char) ? 65 : 97;

                $result .= chr(($ascii - $base + $shift + 26) % 26 + $base);

            } else {
                $result .= $char;
            }
        }

        // SIMPAN KE DATABASE
        Cipher::create([
            'plaintext' => $text,
            'ciphertext' => $result,
            'shift' => $request->shift,
            'action' => $action
        ]);

        return view('caesar', [
            'plaintext' => $text,
            'ciphertext' => $result
        ]);
    }
}