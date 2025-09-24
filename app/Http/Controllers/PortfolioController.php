<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{

    public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

        'name' => 'Electronics',

        'description' => 'Electronics refers to the branch of technology that deals with the design, development,
        and use of devices and systems that operate using electricity to control the flow of electrons,
        enabling functions such as communication, computation, and automation.',

        'about' => 'Electronics is the field of science and technology focused on the control and use of electrical energy
        through circuits, components, and systems. It plays a vital role in modern life, powering devices like smartphones,
        computers, TVs, and countless other tools that enable communication, automation, entertainment, and innovation.',

        'Contact' => '+639074562134',

        'location' => 'PH, Manila',

        'profile_image' => 'https://via.placeholder.com/300x300?text=Your+Photo',

        ];

        return view('portfolio.index', compact('portfolio'));

    }

}