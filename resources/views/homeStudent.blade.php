@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="post" action="{{route('insert_student')}}">
                            <div class="panel-heading">Select class</div>
                            <select   class="form-control"  name="class" id="status">
                                <option  value="" selected="selected"></option>
                                <option value="5A">5A</option>
                                <option value="5B">5B</option>
                                <option value="6A">6A</option>
                                <option value="6B">6B</option>
                                <option value="7A">7A</option>
                                <option value="7B">7B</option>
                                <option value="8A">8A</option>
                                <option value="8B">8B</option>
                                <option value="9A">9A</option>
                                <option value="9B">9B</option>
                            </select>

                            <div class="panel-heading">Select subjects</div>
                            {{ csrf_field() }}
                            @foreach($subjects as $subject)
                                <label><input type="checkbox" name='subjects[]' value="{{$subject->id}}">{{$subject->subject}}</label><br>
                            @endforeach

                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

