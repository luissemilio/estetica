@extends('website.layouts.main')

@section('content')
<div class="container-fluid">
    <form action="{{ route('website.schedule-meeting') }}" method="POST">
        @csrf
        <div class="mb-3 my-4">
            <label for="exampleMail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleMail" placeholder="name@example.com" name="email">
        </div>
        <div class="mb-3">
            <label for="examplePhone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="examplePhone" name="phone"></input>
        </div>
        <div class="mb-3">
            <label for="exampleName" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleName" name="name"></input>
        </div>

        <button type="submit" class="btn btn-block btn-info">Enviar</button>
    </form>
</div>


@endsection
