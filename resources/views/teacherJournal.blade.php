@extends('layouts.app')
@section('content')
    <script>
        $(function(){
            $('#class').change(function(){
                var value = $(this).val() || $(this).text();
                $.ajax({
                    type : 'GET',
                    url : '{{route('get_st_by_class')}}',
                    data : {
                        class:value,
                        subject_id:'{{$id_subject}}',
                    },
                    success : function(data){
                        $('#students').html(data);

                    }
                });
            })
        })
    </script>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="post" action="{{route('insert_evaluations')}}">
                            {{ csrf_field() }}
                            <div class="panel-heading">Select class</div>
                            <select class="form-control" name="class" id="class">
                                <option seleted value=""></option>
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
                            <div class="panel-heading">Select student</div>
                            <select class="form-control"  name="student" id="students">
                                <option selected value="">Выберите класс</option>
                            </select>
                            <div class="panel-heading">Select evaluation</div>
                            <select class="form-control" name="evaluation" id="">
                                <option selected value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select><br>
                            <input name="subject_id" type="hidden" value="{{$id_subject}}">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection