@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card h-100">
                <div class="card-body">
<h1 class="text-primary">Contact Page</h1>
<p class="pt-3">Name: Millen Michael</p>
<p class="pt-3">Email: millen372@gmail.com</p>
<p class="pt-3">Phone: +255-624-643-714</p>
<p class="pt-3">Location: Dar Es Salaam</p>
</div>
</div>
</div>

          <div class="col-md-6 mb-3">
            <div class="card h-100">
              <div class="card-body">
               <form action="/contact" method="post">

@if (session('success'))
<div class="alert alert-success">
{{ session('success') }}
    </div>
@endif

                @csrf
    <label class="form-label">Enter Name:</label>
    <input type="text" id="username" name="name" class="form-control pt-3 mb-3">

    <label class="form-label">Email:</label>
    <input type="email" name="email" id="email" class="form-control pt-3 mb-3">
    
    <label class="form-label">Message</label>
    <textarea name="message" id="message" cols="30" rows="5" class="form-control mb-3"></textarea>
     @error('message')
        <div class="text-danger">{{ $message }}</div>
    @enderror

    <button type= "submit" class="btn btn-primary">Send</button>

</form>   
 </div>
</div>
</div>
</div>
</div>

@endsection













