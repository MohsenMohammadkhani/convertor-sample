<?php

namespace App\Http\Controllers;

use App\Services\Convertor\Contract\FactoryConfig;
use Illuminate\Http\Request;

class ConvertorUnitController extends Controller
{
    public function convertForm()
    {
        return view('form');
    }

    public function convert(Request $request)
    {
        $from = $request->input('from');
        $to = $request->input('to');
        $amount = $request->input('amount');

        $convertor = $this->getConvert($from, $to);
        $newAmount = $convertor->convert($amount);
        return view("answer", compact(
            'from',
            'to',
            'amount',
            'newAmount',
        ));
    }

    private function getConvert(string $from, string $to)
    {
        return FactoryConfig::getInstance()->getFactory($from . "-to-" . $to);
    }
}
