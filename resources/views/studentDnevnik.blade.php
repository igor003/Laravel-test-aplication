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
        @foreach($student->evaluations as $evaluation)

            <tr>
                <td></td>
                <td>{{$evaluation->user->name}}</td>
                <td>{{$evaluation->user->teacher->subject->subject}}</td>
                <td>{{$evaluation->user->evaluations}}</td>
                {{dd($evaluation->student->evaluation->evaluation)}}
                <td></td>
            </tr>
            @endforeach





    </table>

@endsection