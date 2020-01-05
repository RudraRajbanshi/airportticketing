<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;

class TicketController extends Controller
{
    public function ticket(){
        $tickets = Ticket::paginate(10);
        return view('admin.ticket',compact('tickets'));
    }
    public function create(){
        return view('admin.create_ticket');
    }
    public function store(Request $request){
        $validation = array(
            'flight_name'=>'required',
            'price'=>'required|integer',
            'time'=>'required',
            'date'=>'required',
            'image'=>'required|mimes:jpeg,bmp,png,gif|max:3500'
            );

    $request->validate($validation);

        $image = '';
        if($request->hasFile('image')){
            $file = $request->file('image');
            $image = date('ymdhis').$file->getClientOriginalName();
            $path = public_path().'/uploads';
            $file->move($path,$image);
        }

        $ticket = new Ticket;
        $ticket->flight_name = $request->get('flight_name');
        $ticket->from = $request->get('from');
        $ticket->to = $request->get('to');
        $ticket->price = $request->get('price');
        $ticket->time = $request->get('time');
        $ticket->date = $request->get('date');
        $ticket->image = $image;
        $ticket->save();
        return redirect('/ticket/create')->with('msg','Successfully Saved');
    }
}
