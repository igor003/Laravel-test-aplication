@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="post" action="{{route('insert_teacher')}}">
                            <div class="panel-heading">Select subject</div>
                            {{ csrf_field() }}
                            <select class="form-control"  name="subject" id="">
                                @foreach($subjects as $subject)
                                    <option value="{{$subject->id}}">{{$subject->subject}}</option>
                                @endforeach
                            </select><br>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection