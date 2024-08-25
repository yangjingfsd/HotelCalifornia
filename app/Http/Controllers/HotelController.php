<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;
use Validator;
use Illuminate\Support\Facades\Hash;    

class HotelController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function signup(){
        return view('signup');
    }

    public function loginreserv(){
        return view('loginreserv');
    }

    public function login(){
        return view('login');
    }

    public function update(){

    if(isset($_COOKIE['email'])){

        $email = $_COOKIE['email'];

        $client = Clients::where('email',$email)->first();

        return view('update', compact('client'));

    } else {

        return redirect(route('home'))->with('successMsg',"Session is expired, please login again.");
    }

    }


    public function logout(){

        if (isset($_COOKIE['logname'])) {

            $name = $_COOKIE['logname'];

            unset($_COOKIE['logname']); 
            unset($_COOKIE['email']);

            setcookie("logname", "", time() - 3600);
            setcookie("email", "", time() - 3600);

        return redirect(route('home'))->with('successMsg',"Goodbye, $name, see you soon.");

    } else {

        return redirect(route('home'))->with('successMsg',"No cookie to remove.");

    }

    }

    public function signin(Request $request){
 /*
        $this->validate($request, [
            'email' => 'required',
            'pwd' => 'required'
        ]);
*/
        $email = $request->email;
        $password = $request->pwd;

        $client = Clients::where('email',$email)->first();

    if($client) {

        $name = $client->firstname;

        if(Hash::check($password, $client->password)) {

            $time = time() + 10 * 60;

            setcookie("logname" , $name , $time);
            setcookie('email', $email, $time);
    
            return redirect(route('home'))->with('successMsg',"Welcome $name.");
            

        } else {

            return redirect(route('login'))->with('Msg',"Password and user name do not match!");

        }

    } else {

        return redirect(route('login'))->with('Msg',"User name does not exist!");

    }
}

    public function next(Request $resinfo){

        $room = $resinfo->room;
        $checkin = $resinfo->checkin;
        $checkout = $resinfo->checkout;
        $stay = $resinfo->stay;
        $guest = $resinfo->guest;

    if (isset($_COOKIE['email'])) {

        $email = $_COOKIE['email'];

        $client = Clients::where('email',$email)->first();

        if($client) {
            return redirect(route('loginreserv',['room'=>$room, 'checkin'=>$checkin, 
            'checkout'=>$checkout, 'stay'=>$stay, 'guest'=>$guest, 'firstname'=>$client->firstname,
            'lastname'=>$client->lastname, 'phone'=>$client->phone, 'email'=>$client->email]));

        } else {
            return redirect(route('signup',['room'=>$room, 'checkin'=>$checkin, 
            'checkout'=>$checkout, 'stay'=>$stay, 'guest'=>$guest]));
            }

        } else {
        return redirect(route('signup',['room'=>$room, 'checkin'=>$checkin, 
        'checkout'=>$checkout, 'stay'=>$stay, 'guest'=>$guest]));
    }
    }

    public function profile(Request $request, $email) {

$client =  Clients::where('email',$email)->first();

$client->firstname = $request->firstname;
$client->lastname = $request->lastname;
$client->email = $request->email;
$client->phone = $request->phone;
//$client->password = Hash::make($request->pwd);
$client->room = $request->room;
$client->checkin = $request->checkin;
$client->checkout = $request->checkout;

$client->save();

return redirect(route('home'))->with('successMsg','Profile is updated!');

}


    public function store(Request $request){
        $validator = Validator::make($request->all(), [
 //           'name' => 'required|max:255',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
//            'pwd' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect(route('signup'))
                ->withInput()
                ->withErrors($validator);
        }
            
        $client = new Clients;

        $client->firstname = $request->firstname;
        $client->lastname = $request->lastname;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->password = Hash::make($request->pwd);
        $client->room = $request->room;
        $client->checkin = $request->checkin;
        $client->checkout = $request->checkout;
 
        $client->save();

        return redirect(route('home'))->with('successMsg','Reservation successfully booked!');

    }

}
