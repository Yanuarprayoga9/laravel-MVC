@extends('layouts.components.MainLayout')
@section('title','Home')
@section('content')
<div class="my-5">
    <a href="/student-add" class="btn btn-success">add data</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>Nis</th>
            <th>gender</th>
            <th>opsi</th>
            {{-- <th>Kelas id</th>
            <th>Kelas</th>
            <th>Extra</th>
            <th>walikelas</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach ($studentList as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['nis'] }}</td>
            <td>{{ $item['gender'] }}</td>
            {{-- <td>{{ $item['class_id'] }}</td>
            <td>{{ $item->class['name'] }}</td>
            <td>
                 @foreach ($item->extracurriculars as $extracurricular)
                    {{ $extracurricular->name }} <br>
                @endforeach    
            </td>
            <td>{{ $item->class->homeroomTeacher->name }}</td> --}}
            <td>
                <a href="student/{{ $item->id }}" class="btn btn-warning">
                    detail
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection