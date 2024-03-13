<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class DDoSCheck {

    public function handle($request, Closure $next) {
        if (!$this->isCaptchaValidationComplete()) {
            $cssCoordinates = $this->validateCaptcha($request);
            if ($cssCoordinates !== true) {
                //   abort(429, view('captcha')->with('cssCoordinates', $cssCoordinates)->render());
                return new Response(view('captcha')->with('cssCoordinates', $cssCoordinates)->render(), 429);
            }
        }


        if ($this->isCaptchaValidationComplete()) {
            if ($request->is('ddos_check')) {
                return redirect('/');
            }
            return $next($request);
        }
    }

    private function isCaptchaValidationComplete() {
        return session()->has('validatedddos');
    }

    private function validateCaptcha($request) {
        
        // }
        $expectedValue = session('captcha_text');
    
        if ($request->isMethod('post')) {
            $inputValue = strtoupper($request->input('c1') . $request->input('c2') . $request->input('c3'). $request->input('c4'). $request->input('c5'));
           
            if ($inputValue == $expectedValue) {
                session(['validatedddos' => true]);
                return true;
            } else {
                $cssCoordinates = $this->generateCssCoordinates();
                return $cssCoordinates; // Return the coordinates for display in the view
            }
        } else {
            $cssCoordinates = $this->generateCssCoordinates();
            return $cssCoordinates;
        }
    }
    private function generateCssCoordinates() {
    // $characters = 'ABCDEFGHIJK123456789';
    

    // Define static coordinates for each character
    // $coordinates = [
    //     'A' => ['x' => rand(0, 100), 'y' => rand(0, 100)],
    //     'B' => ['x' => rand(0, 100), 'y' => rand(0, 100)],
    //     'C' => ['x' => rand(0, 100), 'y' => rand(0, 100)],
    //     'D' => ['x' => rand(0, 100), 'y' => rand(0, 100)],
    //     'E' => ['x' => rand(0, 100), 'y' => rand(0, 100)],
    //     'F' => ['x' => rand(0, 100), 'y' => rand(0, 100)],
    //     'G' => ['x' => rand(0, 100), 'y' => rand(0, 100)],
    //     'H' => ['x' => rand(0, 100), 'y' => rand(0, 100)],
    //     'I' => ['x' => rand(0, 100), 'y' => rand(0, 100)],
    //     'J' => ['x' => rand(0, 100), 'y' => rand(0, 100)],
    //     'K' => ['x' => rand(0, 100), 'y' => rand(0, 100)],
    //      '1' => ['x' => rand(0, 100), 'y' => rand(0, 100)],
    //       '2' => ['x' => rand(0, 100), 'y' => rand(0, 100)],
    //      '3' => ['x' => rand(0, 100), 'y' => rand(0, 100)],
    //       '4' => ['x' => rand(0, 100), 'y' => rand(0, 100)],
    //     '5' => ['x' => rand(0, 100), 'y' => rand(0, 100)],
    //     '6' => ['x' => rand(0, 100), 'y' => rand(0, 100)],
    //     '7' => ['x' => rand(0, 100), 'y' => rand(0, 100)],
    //     '8' => ['x' => rand(0, 100), 'y' => rand(0, 100)],
    //     '9' => ['x' => rand(0, 100), 'y' => rand(0, 100)],
      
    // ];
     $characters = '1369ACEGPRVS';
     $coordinates = [
  '1' => ['x' => 5, 'y' => 81],
  '3' => ['x' => 39, 'y' => 18],
  '3' => ['x' => 46, 'y' => 42],
  '6' => ['x' => 64, 'y' => 21],
  '6' => ['x' => 63, 'y' => 19],
  '9' => ['x' => 61, 'y' => 61],
  'A' => ['x' => 50, 'y' => 80],
  'A' => ['x' => 46, 'y' => 78],
  'C' => ['x' => 20, 'y' => 30],
  'C' => ['x' => 20, 'y' => 38],
  'E' => ['x' => 0, 'y' => 0],
  'E' => ['x' => 63, 'y' => 78],
  'G' => ['x' => 87, 'y' => 12],
  'P' => ['x' => 18, 'y' => 60],
  'P' => ['x' => 53, 'y' => 20],
  'P' => ['x' => 25, 'y' => 59],
  'R' => ['x' => 06, 'y' => 58],
  '3' => ['x' => 86, 'y' => 40],
  'V' => ['x' => 43, 'y' => 35],
  'V' => ['x' => 59, 'y' => 41],
  'S' => ['x' => 63, 'y' => 3],
 ];
 
    // Shuffle the characters
    $shuffledCharacters = substr(str_shuffle($characters), 0, 5);

    // Displaying the coordinates for each character
    foreach (str_split($shuffledCharacters) as $char) {
        echo "$char: x = {$coordinates[$char]['x']}, y = {$coordinates[$char]['y']}\n<br>"; 
    }

    // Output the CSS for the shuffled characters
    $cssCoordinates = '';
    foreach (str_split($shuffledCharacters) as $i => $char) {
        $x = $coordinates[$char]['x'];
        $y = $coordinates[$char]['y'];

        $cssCoordinates .= "input[name=c" . ($i + 1) . "]:focus ~ .image {
            background-position: -{$x}px -{$y}px;
        }\n";
    }

    // Save the image
    $imagePath = 'output.png'; // Set your desired output image path

    // Output the CSS
    $imageCss = "
    .image {
        width: 20px;
        height: 20px;
        transform-origin: center;
        transform: scale(6);
        transition: all 0.2s ease-in;
        border-radius: 50%;
        border: 0.5px solid #ff5050;
        margin: auto;
        margin-bottom: 60px;
        margin-top: 80px;
        background: url('$imagePath') no-repeat;
    }\n";

    // Save CSS and image path in sessions
    Session::put('cssCoordinates', $cssCoordinates);
    Session::put('captcha_image', $imageCss);
    Session::put('captcha_text', $shuffledCharacters);
}


}
 
