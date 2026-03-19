<link rel="stylesheet" href="/style.css">
<canvas id="matrixCanvas"></canvas>
<div class="container">

<h1>Mark Subject Completion</h1>

<form method="POST" action="/completions/store">
@csrf

Student:
<select name="student_id">
@foreach($students as $student)
<option value="{{ $student->id }}">
{{ $student->first_name }} {{ $student->last_name }}
</option>
@endforeach
</select>

<br><br>

Subject:
<select name="subject_id">
@foreach($subjects as $subject)
<option value="{{ $subject->id }}">
{{ $subject->code }}
</option>
@endforeach
</select>

<br><br>

<button type="submit">Mark Completed</button>

</form>

<hr>

<h2>Completed Subjects</h2>

<table border="1">

<tr>
<th>Student</th>
<th>Subject</th>
</tr>

@foreach($completions as $c)

<tr>
<td>
{{ $students->find($c->student_id)->first_name }}
{{ $students->find($c->student_id)->last_name }}
</td>

<td>
{{ $subjects->find($c->subject_id)->code }}
</td>

</tr>

@endforeach

<script src="/matrix.js"></script>
</table>
</div>