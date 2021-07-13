<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = [
            ['type' => 'hawaiian', 'base' => 'cheesy crust'],
            ['type' => 'volcan', 'base' => 'garlic crust'],
            ['type' => 'veg superme', 'base' => 'thin & crispy']
        ];

        return view('pizzas', [
            'pizzas' => $pizzas,
        ]);
    }

    public function show($id)
    {
        return view('details', ['id' => $id]);
    }
}
