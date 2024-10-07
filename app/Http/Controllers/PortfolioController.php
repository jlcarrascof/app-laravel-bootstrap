<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $portfolio = [
            ['title' => 'Project #1'],
            ['title' => 'Project #2'],
            ['title' => 'Project #3'],
            ['title' => 'Project #4'],
        ];

        return view('portfolio', compact('portfolio'));
    }
}
