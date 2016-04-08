<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

    //******************************************************
    /**
     * @return \Illuminate\View\View
     */
    public function about(){

        //$articles = Article::latest('published_at')->published()->get();

        //$name = 'Okee Dokee';
        //return view('pages.about')->with('name ', $name);

        //$data =[];
        //$data['first'] = "Doug";
        //$data['last'] = "May";
        //return view('pages.about', $data);

        $first = 'Doug';
        $last = 'May';
//        return view('pages.about', compact('first', 'last'));

        $people = [
           'Bob Smith', 'Ted Fox', 'Jim Beam'
        ];

        return view('pages.about', compact('first', 'last', 'people'));
    }

    //******************************************************
    /**
     * @return \Illuminate\View\View
     */
    public function contact(){

     return view('pages.contact');
    }

}//end of PagesController class
