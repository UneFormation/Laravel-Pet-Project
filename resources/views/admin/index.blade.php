@extends('admin.base')

@section('content')
    <form method="get" class="row gap-3">
        <input type="hidden" name="page" value="1">
        <div class=" col-9">
            <input class="form-control" type="text" placeholder="Email..." aria-label="default input example" name="q" value="{{$query}}">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Search</button>
        </div>
    </form>
    @if(!$surveys->total())
        <div class="alert alert-primary">Not exist surveys.</div>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($surveys as $survey)
                <tr>
                    <th scope="row">{{$survey->id}}</th>
                    <td>{{$survey->firstname}}</td>
                    <td>{{$survey->lastname}}</td>
                    <td>{{$survey->email}}</td>
                    <td><a href="{{ route('admin.survey', ['survey' => $survey->id]) }}" class="btn btn-sm btn-primary">Show</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <ul class="pagination justify-content-center mb-4">
            {{$surveys->links("pagination::bootstrap-4")}}
        </ul>
    @endif
@endsection
