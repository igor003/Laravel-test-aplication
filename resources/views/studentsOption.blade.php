@foreach($students as $student)
    <option value="{{$student->id}}">{{$student->name}}</option>
@endforeach