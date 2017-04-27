@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <form class="form-horizontal" action="http://shop-bags.dev">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Order</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinputname">Full Name</label>
                        <div class="col-md-4">
                            <input id="textinputname" name="customer_name" type="text" placeholder="Full Name" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinputmobile">Mobile</label>
                        <div class="col-md-4">
                            <input id="textinputmobile" name="phone" type="text" placeholder="Mobile No" class="form-control input-md">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinputcity">City</label>
                        <div class="col-md-4">
                            <input id="textinputcity" name="city" type="text" placeholder="Where are you from" class="form-control input-md">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinputcomment">Comment</label>
                        <div class="col-md-4">
                            <textarea type="text" name="comment" placeholder="Your wishes about your order" class="form-control input-md"></textarea>
                        </div>
                    </div>

                    <!-- Number input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinputamount">Amount</label>
                        <div class="col-md-4">
                            <input id="textinputamount" name="amount" type="number" placeholder="Amount" class="form-control input-md">

                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebuttonsubmit"></label>
                        <div class="col-md-4">
                            <button id="singlebuttonsubmit" name="singlebuttonsubmit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
@endsection
