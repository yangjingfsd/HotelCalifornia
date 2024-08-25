@extends('main')
@section('content')
<br><br><br><br>

<div id='container' style='margin:auto;width:90%;padding:40px 0px;'>

@if($errors->any())
@foreach ($errors->all() as $error)
<div class='alert alert-danger' role='alert'>
    {{ $error }}
<div>
@endforeach
@endif

<form id="np-hotel-reservarion" method="post" action="{{ route('store') }}">

{{csrf_field()}}

<table style='margin:auto;width:70%;'>
<tr>
<td class="col-xl-5">
<span class="row">
                            <span style="padding:3px 0 0 0;">Reservation Details
                                <hr class="border border-primary border-1.5 opacity-50  my-1" >
                            </span>
                            <div id="serdet" class="ps-4" style='text-align:left;'>
                                <p><label for='room'>Room: </lable><input type='text' id='room' name='room' value="<?php echo $_GET['room'] ?>" size='30' maxlength="30" readonly></p>
                                <p><label for='checkin'>Check-in date: </lable><input type='text' id='checkin' name='checkin' value="<?php echo $_GET['checkin'] ?>" size='24' maxlength="30" readonly></p>
                                <p><label for='checkout'>Check-out date: </lable><input type='text' id='checkout' name='checkout' value="<?php echo $_GET['checkout'] ?>" size='23' maxlength="30" readonly></p>
                                <p><label for='stay'>Stay: </lable><input type='text' id='stay' name='stay' value="<?php echo $_GET['stay'] ?>" size='31' readonly></p>
                                <p><label for='guest'>Guest: </lable><input type='text' id='guest' name='guest' value="<?php echo $_GET['guest'] ?>" size='30' readonly></p>
                            </div>

<td>
<td class="col-xl-6">
<div style='text-align:center;'>
            <h3>Guest Personal Information</h3>
</div>
            <table id="guest-info" style='border-collapse:separate;border-spacing:3px;'>
                <tr>
                    <td>
                        <label for="first-name">First Name:</label>
                    </td>
                    <td>
                        <input type="text" id="first-name" name='firstname' size="30" maxlength="15" autofocus="autofocus"
                            required="required"> <span><sup>*</sup></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="last-name">Last Name:</label>
                    </td>
                    <td>
                        <input type="text" id="last-name" name='lastname' size="30" maxlength="15" required="required">
                        <span><sup>*</sup></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address">Address:</label>
                    </td>
                    <td>
                        <input type="text" id="address" size="30" maxlength="30">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="city">City:</label>
                    </td>
                    <td>
                        <input type="text" id="city" size="30" maxlength="15">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>State / Zipcode</label>
                    </td>
                    <td>
                        <label for="state">State:</label>
                        <input type="text" id="state" size="2" maxlength="2">
                        <label for="zipcode">Zipcode:</label>
                        <input type="text" id="zipcode" size="12" maxlength="10">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email-address">Email Address:</label>
                    </td>
                    <td>
                        <input type="email" id="email-address" name='email' size="30" maxlength="30" required="required"
                            placeholder="john.smith@smith.com"><span><sup>*</sup></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="phone">Phone number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    </td>
                    <td>
                        <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                            required="required" placeholder="123-456-7890" size="30">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pwd">Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    </td>
                    <td>
                        <input type="password" id="pwd" name="pwd" required="required" size="30"><span><sup>*</sup></span>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" style='text-align:center;'>
                        <input type="submit" id="signup" class="button-click" value="Submit" style='margin:10px;'>
                        <input type="reset" id="clearinfo" class="button-click" value="Clear" style='margin:10px;'>
                    </td>
                </tr>

            </table>
</td>
</tr>
</table>
</div>
<br><br><br><br><br>
@endsection