<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class NumbersController extends Controller
{
    /**
     * Fungsi untuk mengambil bilangan fibonacci ke $n
     *
     * Contoh
     *   - n = 4, Fb(4) = 3
     */

    /** 
     * Refactoring the fibonancci from referense bellow here
     * https://en.wikipedia.org/wiki/Fibonacci_number#Computation_by_rounding
    */
    public function fibonacci($number)
    {
        // $fibos = [];
        // for ($i = 0; $i <= $n; $i++) {
        //     if ($i == 0) {
        //         $fibos[$i] = 0;
        //     } elseif ($i == 1) {
        //         $fibos[$i] = 1;
        //     } else {
        //         $fibos[$i] = $fibos[$i-1] + $fibos[$i-2];
        //     }
        // }

        // return [
        //     'result' => $fibos[$n],
        // ];

        // New Fibonacci rules
        $fibonacci = round( pow( ( sqrt(5) + 1 ) / 2, (int) $number ) / sqrt(5) );
        return [
            'result' => $fibonacci,
        ];
    }

    /**
     * buatlah fungsi penjumlahan 2 bilangan dari deret fibonacci
     *
     * - ambil bilangan fibonacci ke $n1
     * - ambil bilangan fibonacci ke $n2
     * - jumlahkan bilangan tersebut
     * - kembalikan hasilnya
     * - contoh
     *     - n1 = 1, Fb(1) = 1
     *     - n2 = 4, Fb(4) = 3
     *     - Fb(1) + Fb(4) = 4
     */

    
    public function fibonacciProduct($number1, $number2)
    {
        $fibOne = $this->fibonacci($number1);
        $fibTwo = $this->fibonacci($number2);

        $fibonacciSum = $fibOne['result'] + $fibTwo['result'];

        return [
            'result' => $fibonacciSum,
        ];
    }
}
