@extends('layouts\app')

@section('content')

<style>
    .container {
      max-width: 800px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Add Employee
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="">
          <div class="form-group">
              @csrf
              <label for="accountno">Account No</label>
              <input type="text" class="form-control" name="accountno"/>
          </div>
          <div class="form-group">
              <label for="date">Date</label>
              <input type="date" class="form-control" name="date"/>
          </div>
          <div class="form-group">
              <label for="basicpay">Basic pay</label>
              <input type="text" class="form-control" name="basicpay"/>
          </div>
          <div class="form-group">
              <label for="bounus">Bouns</label>
              <input type="text" class="form-control" name="bounus"/>
          </div>
           <div class="form-group">
              <label for="da">DA</label>
              <input type="text" class="form-control" name="da"/>
          </div>
           <div class="form-group">
              <label for="hra">HRA</label>
              <input type="text" class="form-control" name="hra"/>
          </div>
           <div class="form-group">
              <label for="it">IT</label>
              <input type="text" class="form-control" name="it"/>
          </div>
          <div class="form-group">
              <label for="esi">ESI</label>
              <input type="text" class="form-control" name="esi"/>
          </div>
          <div class="form-group">
              <label for="pf">PF</label>
              <input type="text" class="form-control" name="pf"/>
          </div>
          <div class="form-group">
              <label for="pt">PT</label>
              <input type="text" class="form-control" name="pt"/>
          </div><br>

          <button type="submit" class="btn btn-block btn-primary">Netpay</button><br/>

           <div class="form-group">
              <input type="text" class="form-control" name="netpay"/>
          </div>
      </form>
  </div>
</div>
@endsection