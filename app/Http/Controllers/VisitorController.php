<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor;

class VisitorController extends Controller
{
    public function index(){
        $visitors = Visitor::orderBy('name')->get();
        return view ('Visitors.index', ['visitors'=>$visitors]);
    }

    public function create(){
        return view ('visitors.create');
    }

    public function edit(Visitor $visitor){
        return view ('Visitors.edit',[
            'visitor' => $visitor
        ]);
    }

    public function delete($visitor){
        Visitor::find($visitor)->delete();
        return redirect('/');
    }

    public function confirm(Visitor $visitor){
        return view ('Visitors.confirm',['visitor'=>$visitor]);
    }

    public function update(Request $request, $visitor){
        $input = $request->all();
        $visitor = Visitor::find($visitor);
        $visitor->name=$input['name'];
        $visitor->phone=$input['phone'];
        $visitor->purpose=$input['purpose'];
        $visitor->time=$input['time'];


        $visitor->save();
        return redirect('/');

    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
            'purpose' => 'required',
            'time' => 'required'
        ]);

        Visitor::create([
            'name'=>$request['name'],
            'phone' => $request['phone'],
            'purpose' => $request['purpose'],
            'time' => $request ['time'],

        ]);

        return redirect ('/')->with('info', 'A new Visitor has been added');
    }
}
