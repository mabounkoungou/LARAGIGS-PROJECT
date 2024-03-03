@extends('front.layouts.app')

@section('main')
<section class="section-5">
    <div class="container my-5">
        <div class="py-lg-2">&nbsp;</div>

        @if(Session::has('success'))
        <div class="alert alert-success">
            <p class="mb-0 pb-0">{{ Session::get('success') }}</p>
        </div>
        @endif

        @if(Session::has('error'))
        <div class="alert alert-dismissible alert-danger">
            <p class="mb-0 pb-0">{{ Session::get('error') }}</p>
        </div>
        @endif

        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <div class="card shadow border-0 p-5">
                    <h1 class="h3" style="color: hsla(172, 80%, 15%, 0.897); text-align:center">Forgot Password</h1>
                    <form action="{{ route('account.authenticate') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="mb-2">Email<span style="color: red;">*</span></label>
                            <input type="text" value="{{ old('email') }}"  name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="example@example.com">

                            @error('email')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror

                        </div>

                        <div class="justify-content-between d-flex">
                        <button class="btn btn-primary mt-2">Reset Password</button>
                        </div>
                    </form>
                </div>
                <br>



            </div>
        </div>
        <div class="py-lg-5">&nbsp;</div>

    </div>
</section>
@endsection
