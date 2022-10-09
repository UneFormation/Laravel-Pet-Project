@extends('admin.base')

@section('content')
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
                </tr>
            @endforeach
            </tbody>
        </table>
        <ul class="pagination justify-content-center mb-4">
            {{$surveys->links("pagination::bootstrap-4")}}
        </ul>
    @endif
@endsection
