@extends('layouts.head')

@section('body')
<div class="well well-lg">
    <h1>Burmistrov Shop</h1>
</div>

<!-- Create Registration Form -->
<div class="container" id="create_account">
    <div class="row">
        <form class="form-horizontal">
            <fieldset>

                <!-- Form Name -->
                    <legend>Register Here</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">First Name</label>
                    <div class="col-md-4">
                        <input id="textinput" name="textinput" placeholder="Insert your First Name" class="form-control input-md" required="" type="text">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Last Name</label>
                    <div class="col-md-4">
                        <input id="textinput" name="textinput" placeholder="Insert your Last Name" class="form-control input-md" required="" type="text">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Email</label>
                    <div class="col-md-4">
                        <input id="textinput" name="textinput" placeholder="Insert your Email" class="form-control input-md" required="" type="text">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Password</label>
                    <div class="col-md-4">
                        <input id="textinput" name="textinput" placeholder="Insert your Password" class="form-control input-md" required="" type="text">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Confirm Password</label>
                    <div class="col-md-4">
                        <input id="textinput" name="textinput" placeholder="Confirm your Password" class="form-control input-md" required="" type="text">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"> </label>
                    <div class="col-md-4">
                        <button id="singlebutton" name="singlebutton" class="btn btn-primary center-block" >Submit</button>
                    </div>
                </div>

            </fieldset>
        </form>

    </div>
</div>

@endsection