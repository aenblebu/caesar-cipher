<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/caesar', function () {
    return view('caesar');
});

Route::post('/caesar', function (Request $request) {

    $text = $request->text;
    $shift = $request->shift;
    $action = $request->action;

    $result = '';

    foreach (str_split($text) as $char) {
        if (ctype_alpha($char)) {
            $ascii = ord($char);
            $base = ctype_upper($char) ? ord('A') : ord('a');

            if ($action == 'encrypt') {
                $result .= chr(($ascii - $base + $shift) % 26 + $base);
            } else {
                $result .= chr(($ascii - $base - $shift + 26) % 26 + $base);
            }

        } else {
            $result .= $char;
        }
    }

    return view('caesar', [
        'result' => $result,
        'text' => $text,
        'shift' => $shift
    ]);
});