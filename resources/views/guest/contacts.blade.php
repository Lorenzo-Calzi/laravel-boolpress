@extends('layouts.app')

@section('content')


<div class="container">
    <h2>Contact Us</h2>

    @include('partials.errors')
    @if(session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>{{session('message')}}</strong> 
        </div>
        
        <script>
          $(".alert").alert();
        </script>
    @endif

    <form action="{{route('contacts.send')}}" method="post">
        @csrf
        <div class="form-group">
          <label for="">Full name</label>
          <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Mario Rossi" 
          aria-describedby="helpId" minlength="5" maxlength="255" value="{{old('full_name')}}" required>
          <small id="fullNameHeper" class="text-muted">Type here your full name</small>
        </div>

        <div class="form-group">
          <label for="">Email Address</label>
          <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" 
          placeholder="example@example" value="{{old('emil')}}" required>
          <small id="emailHelpId" class="form-text text-muted">Type here your email</small>
        </div>

        <div class="form-group">
          <label for="">Message</label>
          <textarea class="form-control" name="message" id="message" rows="5">{{old('message')}}</textarea>
        </div>

        <button type="submit"class="btn btn-primary btn-block">📧 Send</button>
    </form>
</div>



{{-- <form class="container">
    <div class="col-md-4 mb-3">
        <h2>Contact Us</h2>
    </div>

    <div>
        <div class="col-md-4 mb-3">
            <label for="validationDefault01">First name</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="" required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="validationDefault01">Last name</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="Last name" value="" required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="validationDefaultUsername">Email</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                 </div>
                <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label for="validationDefaultUsername">Comment</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text">Text</span>
                </div>
                <textarea class="form-control" aria-label="With textarea" placeholder="Comment"></textarea>
            </div>
        </div>
        
        <div class="col-md-4 mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                Agree to terms and conditions
                </label>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <button class="btn btn-primary" type="submit">Submit form</button>   
        </div>
    </div>
  </form> --}}
@endsection