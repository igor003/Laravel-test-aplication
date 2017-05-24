@extends('layouts.app')
@section('content')

    <table class="table table-bordered">
        <tr class="title">
            <td>Subjects</td>
            <td>Teacher</td>
            <td>Evaluation</td>
            <td>Data</td>
        </tr>
        {{--{{dd($student->evaluations)}}--}}
        @foreach($student as $evaluation)
            {{--->orderBy('created_at')--}}
            <tr>

                <td>{{$evaluation->user->teacher->subject->subject}}</td>
                <td>{{$evaluation->user->name}}</td>
                <td>{{$evaluation->evaluation}}</td>
                <td>{{$evaluation->created_at}}</td>
            </tr>
            @endforeach





    </table>

@endsection