<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\CategoryReservation;
use App\Reservation;
use App\Jemaat;
use App\User;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $reservation = Reservation::get();
        return view('reservation.index',["reservations"=>$reservation]);
    }

    public function email()
    {
        $reservation = Reservation::get();
        return view('emails.ReservationMail',["categoryReservation"=>$reservation]);
    }
    
    public function details(Request $request)
    {
        $data = Reservation::find($request->id);
        return view('reservation.detail',["category"=>$data]);
    }
    
    public function validateBooking(Request $request) 
    {
        $data = CategoryReservation::find($request->id);
        $reservations = Reservation::where('category_reservation_id', $request->id)->get();
        $total_rsvp = 0;
        foreach($reservations as $key => $reservation){
            $total_rsvp = $total_rsvp + $reservation->jumlah_orang;
        }
        $total_kursi = $request->kursi;
        $total_reservation = Reservation::where('category_reservation_id', $request->id)->count();
        $sisa_kursi = $total_kursi - $total_reservation;
        $sisa_kursi = $total_kursi - $total_rsvp;
        return $sisa_kursi;
    }

    public function show(Request $request)
    {
        $data = CategoryReservation::find($request->id);
        $categoryReservation = CategoryReservation::get();
        $jemaat = Jemaat::get();
        return view('reservation.detail',["reservation"=>$data, "categories"=>$categoryReservation, "Jemaat"=>$jemaat]);
    }

    public function update(Request $request)
    {
        
        //select book
        if($request->id){
            $data = Reservation::find($request->id);
        }else{
            $data = new Reservation;
        }

        //store image upload
        if($request->photos){
            $path = $request->file('photos')->store('post');
            $data->photos = $path;
        }

        $data1 = new User;

        // update data variable
        
        $data->category_reservation_id =  $request->category_reservation_id;
        $data->jemaat_id =  $request->jemaat_id;
        $data->nama =  $request->nama;
        $data->jumlah_orang =  $request->jumlah_orang;
        $data->note =  $request->note;
        $validateBooking = $this->validateBooking($request);
        $categoryReservation = Reservation::where([
            'category_reservation_id' => $request->category_reservation_id,
            'jemaat_id' => $request->jemaat_id
        ])->first();

        if(empty($categoryReservation)){
        //     //record data to database
        $status = $data->save();
            \Mail::send('emails.ReservationMail', ['user' => $data], 
            function ($message) use($data) {
                $message->to(auth()->user()->email, $data->nama);
                $message->subject('Selamat anda sudah booking');
            });
            if($status){
                return redirect()->back()->with('success', 'Selamat kamu sudah terdaftar');
            }
            
        } else {
            return redirect()->back()->with('error', 'Kamu Sudah terdaftar');
            
        }
        
        // redirect with message
        
        
    }

    public function delete($id)
    {
        $categoryReservation = Reservation::find($id);
        $categoryReservation->delete();

        return redirect()->back()->with('success', 'Berhasil Hapus');
    }
    

}
