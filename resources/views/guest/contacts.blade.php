@extends('layouts.app')

@section('content')
<form class="container">
    <div class="col-md-4 mb-3">
        <h2>Contacs Us</h2>
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
  </form>
@endsection