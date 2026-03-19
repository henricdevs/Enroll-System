<link rel="stylesheet" href="/style.css">
<canvas id="matrixCanvas"></canvas>
<div class="container">

<h1>Edit Student</h1>

<form method="POST" action="/students/update/{{ $student->id }}">
@csrf

Student Number:<br>
<input type="text" name="student_number" value="{{ $student->student_number }}"><br>

First Name:<br>
<input type="text" name="first_name" value="{{ $student->first_name }}"><br>

Last Name:<br>
<input type="text" name="last_name" value="{{ $student->last_name }}"><br>

Year Level:<br>
<input type="text" name="year_level" value="{{ $student->year_level }}"><br><br>

<button type="submit">Update</button>

</form>
<script src="/matrix.js"></script>
</div>