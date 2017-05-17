@extends('layouts.app')
@section('content')

    <table class="table table-bordered">
        <tr class="title">
            <td>Subjects</td>
            <td>Teacher</td>
            <td>Evaluation</td>
            <td>Data</td>
        </tr>

        @foreach($user->subjects as $subject)
            <tr>
                <td>{{$subject->subject}}</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @endforeach




    </table>

@endsection