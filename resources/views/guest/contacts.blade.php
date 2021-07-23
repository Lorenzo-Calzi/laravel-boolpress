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

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
            Agree to terms and conditions
            </label>
        </div>

        <button type="submit"class="btn btn-primary btn-block">Send</button>
    </form>
</div>
@endsection