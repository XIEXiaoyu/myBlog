<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
    	//first method: $name = "Jeffery Way";
    	//return view('pages.about')->with('name', $name);

    	//second method: : first is key and Jeffery is the value 
    	// turn key into variable and value to the value of the variable
    	// return view('pages.about')->with([
    	// 	'first' => 'Jeffery',
    	// 	'last' => 'Way'
    	// ]);

    	//third method:
    	// $data = [];
    	// $data['first'] = 'Xie';
    	// $data['last'] = 'Jun';
    	// return view('pages.about', $data);

    	//Forth method:
    	// $first = 'Xie';
    	// $last = 'Jun';
    	// return view('pages.about', compact('first', 'last'));

        $people = [
            'Taylor Otwell', 'Dayle Rees', 'Eric Barnes'
        ];
        
        return view('pages.about', compact('people'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
