@extends('main')
@section('content')
@if (session('Msg'))
<div class='alert alert-danger' role='alert'> {{ session('Msg') }} </div>
@endif
@if (!session('Msg'))
<br><br><br>
@endif
<br><br><br><br><br>

<div id='container' style='margin:auto;width:50%;padding:40px 0px;'>
<div id="signin" style='margin:auto;width:59%;'>
        <form id="sign_in" method="post" action="{{ route('signin') }}">

{{csrf_field()}}

        <fieldset id="field">
            <legend>Please log in</legend>
            <table id="signinform" style='border-collapse:separate;border-spacing:6px;'>
                <tr>
                    <td><label for="emailaddr">Email</label></td>
                    <td><input type="email" name='email' id="emailaddr" size="35" maxlength="30" required="required" placeholder="name@example.com"</td>
                </tr>
                <tr>
                    <td><label for="pwd">Password</label></td>
                    <td><input type="password" id="pwd" name='pwd' size="35" maxlength="30" required="required"></td>
                </tr>
                <tr>
                    <td colspan="2" align="right"><input type="submit" id="sign_in" class="signbutton" value="Log In"></td>
                </tr>
            </table>
        </fieldset>
        </form>

    </div>
</div>
<br><br><br><br><br><br><br><br><br>
@endsection