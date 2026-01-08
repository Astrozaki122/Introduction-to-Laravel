<?php

namespace App\Http\Controllers;

use App\Models\Introduction;
use Illuminate\Http\Request;
use App\Models\Location;


class IntroductionController extends Controller
{
     public function index() {
      

      $introduction = Introduction::with('location')->orderBy('name', 'asc')->paginate(10);

      return view('Introduction', ['Introduction' => $introduction]);

      
     
    }

    public function show(Introduction $introduction) {
      // route --> /Introduction/{id}
      // fetch a single record & pass into show view                                          
      // $introduction = Introduction::with('location')->findOrFail($id);
      $introduction->load('location');

      return view('show', ['introduction' => $introduction]);
      // PHP programming can be case sensitive

    }

    public function create() {
      // route --> /Introduction/create
      // render a create view (with web form) to users

      $locations = Location::all();

      return view('create', ['locations' => $locations]);
    }

    public function store(Request $request) {
      // --> /Introduction/ (POST)
      // hanlde POST request to store a new ninja record in table
       $validated = $request->validate([
        'name' => 'required|string|max:255',
        'skill' => 'required|integer|min:0|max:100',
        'bio' => 'required|string|min:20|max:1000',
        'location_id' => 'required|exists:locations,id'
    ]);

       Introduction::create($validated);

       return redirect()->route('Introduction.index')->with('success', 'Introduction Created!');
    }

    public function destroy(Introduction $introduction) {
      // --> /Introduction/{id} (DELETE)
      // handle delete request to delete a Introduction record from table
      // $introduction = Introduction::findOrFail($id);

      $introduction->delete();

      return redirect()->route('Introduction.index')->with('success', 'Introduction Deleted!');
    }

    

}
