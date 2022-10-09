@extends('base')

@section('content')
    <main>
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h2>Survey</h2>
            <p class="lead">This is a survey of your personal desires. Please fill it in as faithfully as possible. The answers will then be analyzed by our teams. You can only answer once.</p>
        </div>

        <div class="row g-5">
            <div class="col-12">

                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @else
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="m-0 p-0 list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="needs-validation" novalidate action="" method="post" action="{{ action('App\Http\Controllers\SurveyController@store') }}">

                        @csrf

                        <h4 class="mb-3">You</h4>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" value="{{ old('firstname') }}" name="firstname" class="form-control" id="firstName" placeholder="" required="">
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" value="{{ old('lastname') }}" name="lastname" class="form-control" id="lastName" placeholder="" required="">
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                                <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="email" placeholder="you@example.com">
                            </div>

                            <div class="col-12">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" value="{{ old('location') }}" name="location" class="form-control" id="location" placeholder="1234 Main St" required="">
                            </div>

                            <div class="col-12">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" value="{{ old('country') }}" name="country" class="form-control" id="country" placeholder="France" required="">
                            </div>
                        </div>

                        <hr class="my-4">

                        <h4 class="mb-3">Desires</h4>
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="comment" class="form-label">Location</label>
                                <textarea class="form-control" name="comment" id="comment" placeholder="Your desires is ?" required="">{{ old('comment') }}</textarea>
                            </div>

                            <div class="col-12">
                                <label for="rate" class="form-label">Rate of us</label>
                                <select class="form-select" id="rate" value="{{ old('rate') }}" name="rate">
                                    <option selected>Select your rate</option>
                                    @for($value = 1; $value <= 5; $value++)
                                        <option value="{{ $value }}" @if($value == old('rate')) selected="selected" @endif>{{ $value }}/5</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <button class="w-100 btn btn-primary btn-lg mt-5" type="submit">Submit</button>
                    </form>
                @endif
            </div>
        </div>
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2022 David Patiashvili</p>
        </footer>
    </main>
@endsection
