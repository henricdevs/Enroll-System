<link rel="stylesheet" href="/style.css">
<canvas id="matrixCanvas"></canvas>
<div class="container">

<h1>Students</h1>

<a href="/students/create">Add Student</a>

<table border="1">
<tr>
<th>ID</th>
<th>Student Number</th>
<th>Name</th>
<th>Year</th>
<th>Actions</th>
</tr>

@foreach ($students as $student)
<tr>
<td>{{ $student->id }}</td>
<td>{{ $student->student_number }}</td>
<td>{{ $student->first_name }} {{ $student->last_name }}</td>
<td>{{ $student->year_level }}</td>

<td>
<a href="/students/edit/{{ $student->id }}">Edit</a>

<a href="/students/delete/{{ $student->id }}">Delete</a>

<a href="/student/{{ $student->id }}/progress">
<button>Progress</button>
</a>

</td>

</tr>
@endforeach

</table>
<script src="/matrix.js"></script>
</div>





<!-- <h1>Students</h1>

<a href="/students/create">Add Student</a>

<table border="1">
<tr>
<th>ID</th>
<th>Student Number</th>
<th>Name</th>
<th>Year</th>
<th>Actions</th>
</tr>

@foreach ($students as $student)
<tr>
<td>{{ $student->id }}</td>
<td>{{ $student->student_number }}</td>
<td>{{ $student->first_name }} {{ $student->last_name }}</td>
<td>{{ $student->year_level }}</td>
<td>
<a href="/students/edit/{{ $student->id }}">Edit</a>
<a href="/students/delete/{{ $student->id }}">Delete</a>
</td>
</tr>
@endforeach

</table> -->