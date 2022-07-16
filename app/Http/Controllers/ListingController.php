<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Listing;
class ListingController extends Controller
{
    //show all listings 
    public function index(Request $request){
        // dd($request);
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }


    //show single listing 
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //show create form 
    public function create(){
        return view('listings.create');
    }

    //create job
    public function createJob(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        Listing::create($formFields);
        return redirect('/')->with('message', 'Listing created successfully');
    }
}
