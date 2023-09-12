@extends('main')
@section('master-page')

<div class="card">
    <div class="card-body">
        <div  class="m-sm-4">
            <form action="{{ route('admin') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Company</label>
                    <input class="form-control form-control-lg" type="text" name="company" placeholder="Enter your company name" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" />
                </div>
                <div class="text-center mt-3">
                   <input type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>

    
@endsection