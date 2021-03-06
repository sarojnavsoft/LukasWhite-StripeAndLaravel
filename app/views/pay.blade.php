@extends('layouts.default')

@section('content')

<h1>Your Order</h1>

<h2>{{ $download->name }}</h2>

<p>&pound;{{ ($download->price/100) }}</p>

<form action="" method="POST" id="payment-form" role="form">

  <input type="hidden" name="did" value="{{ $download->id }}" />
  
  <div class="payment-errors alert alert-danger" style="display:none;"></div>

  <div class="form-group">
    <label>
      <span>Card Number</span>
      <input type="text" size="20" data-stripe="number" class="form-control input-lg" />
    </label>
  </div>

  <div class="form-group">
    <label>
      <span>CVC</span>
      <input type="text" size="4" data-stripe="cvc" class="form-control input-lg" />
    </label>
  </div>

  <div class="form-group">  
    <label>
      <span>Expires</span>      
    </label>
    <div class="row">
      <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3">
        <input type="text" size="2" data-stripe="exp-month" class="input-lg" placeholder="MM" />
      </div>  
      <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3">
        <input type="text" size="4" data-stripe="exp-year" class="input-lg" placeholder="YYYY" />
      </div>
    </div>
  </div>

    <div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg">Submit Payment</button>
  </div>
</form>

@stop


