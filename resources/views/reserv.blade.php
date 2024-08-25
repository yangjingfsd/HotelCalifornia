@extends('main')
@section('content')
<div class='text-white' style='background-color:#202124;text-align: center;' id='container' >

<h3>Make a reservation</h3>

<div id="appointmentdetails" class="mt-5">

<table class="w-100">
                    <tr class="row">
                        <td id="calendertime" class="col-xl-5">

                            <span id="select" class="col-xl-5 mb-2">Select a date: &nbsp;&nbsp;
                            <input type="radio" id="checkinopt" name="reservdate" value='checkin' checked>
                            <label for="checkin">Check in&nbsp;&nbsp;</label>
                            <input type="radio" id="checkoutopt" name="reservdate" value='checkout'>
                            <label for="checkout">Check out</label>
                            </span>

                                <span>
                                <div class="col-xl-13">
                                    <hr class="row border border-primary border-1.5 opacity-50  my-1">
                                </div>
                                </span>

                            <div class="row">
                                <div id="calendertbl" class="col-xl-13 pt-4">
                                    <div class="month w-100">
                                        <ul>
                                            <li class="prev">&#10094;</li>
                                            <li class="next">&#10095;</li>
                                            <li id="calMonth">&nbsp;</li>
                                            <li style="font-size:18px" id="calYear">&nbsp;</li>
                                        </ul>
                                    </div>
                                    <div id="cal">
                                        <ul class="weekdays">
                                        <li>Su</li>
                                        <li>Mo</li>
                                        <li>Tu</li>
                                        <li>We</li>
                                        <li>Th</li>
                                        <li>Fr</li>
                                        <li>Sa</li>
                                        </ul>

                                        <ul class="days" id="calDays">
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </td>

                        <td class="col-xl-3" >
                        <span>
                                <div class="col-xl-13" style="padding:8px 0 0 0;">
                                    <hr class="row border border-primary border-1.5 opacity-50  my-4">
                                </div>
                                </span>

<div class='row' style='padding:10px 45px;'>
                    <label for="accommodations">Accommodations:</label>
                        <select id="accommodations" size="4">
                            <option value="Single">Single</option>
                            <option value="Double">Double</option>
                            <option value="Suite">Suite</option>
                            <option value="Luxury-suite">Luxury Suite</option>
                        </select>
                    <label for="adults">Adults:</label>
                        <input type="number" id="adults" min="1" max="3" value="2">
                        <label for="children">Children:</label>
                        <input type="number" id="children" min="0" max="2" value="0">
</div>


                    </td>


                    <td id="service-details" class="col-xl-4" >
                        <span class="row">
                            <span style="padding:3px 0 0 0;">Reservation Details
                                <hr class="border border-primary border-1.5 opacity-50  my-1" >
                            </span>
<form method='post' action="{{ route('next') }}">

{{csrf_field()}}


                            <div id="serdet" class="ps-4" style='text-align:left;'>
                                <p><label for='room'>Room: </lable><input type='text' id='room' name='room' value='Choose a room.' size='20' readonly></p>
                                <p><label for='checkin'>Check-in date: </lable><input type='text' id='checkin' name='checkin' value='Choose a date.' size='20' readonly></p>
                                <p><label for='checkout'>Check-out date: </lable><input type='text' id='checkout' name='checkout' value='Choose a date.' size='20' readonly></p>
                                <p><label for='stay'>Stay: </lable><input type='text' id='stay' name='stay' value='0' size='2' readonly><label for='stay'>day(s)</lable></p>
                                <p><label for='guest'>Gest: </lable><input type='text' id='guest' name='guest' value='2' size='2' readonly><label for='guest'>person(s)</lable></p>
                            </div>

                            <hr class="border border-primary border-1.5 opacity-50  my-1" >
                         </span >
<input type="submit" id="make-appointment" class="button-click" value="Next">
                    </td>
                    </tr>
                    </table>
                </form>
            </div>
<br><br>
</div>
<script type="text/javascript" src="{{ asset('styles/js/calender.js') }}"></script>
@endsection
