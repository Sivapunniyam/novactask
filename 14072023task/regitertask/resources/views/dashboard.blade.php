@extends('layout')

  

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Profile') }}</div>
                <div class="card-body">
                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="fname" class="col-md-2 col-form-label text-md-right">First Name</label>
                            <div class="col-md-6">
                                <input type="text" id="fname" class="form-control" name="fname" required autofocus>
                                @if ($errors->has('fname'))
                                    <span class="text-danger">{{ $errors->first('fname') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-md-2 col-form-label text-md-right">Last Name</label>
                            <div class="col-md-6">
                                <input type="text" id="lname" class="form-control" name="lname" required autofocus>
                                @if ($errors->has('lname'))
                                    <span class="text-danger">{{ $errors->first('lname') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>
                            <div class="col-md-6">
                                <input type="email" id="email" class="form-control" name="email" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mobileno" class="col-md-2 col-form-label text-md-right">Mobile No</label>
                            <div class="col-md-6">
                                <input type="mobileno" id="mobileno" class="form-control" name="mobileno" required autofocus>
                                @if ($errors->has('mobileno'))
                                    <span class="text-danger">{{ $errors->first('mobileno') }}</span>
                                @endif
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4 col-md-2 margin-left: 15.5rem  ">
                            Submit
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

