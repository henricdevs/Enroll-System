<link rel="stylesheet" href="/style.css">
<canvas id="matrixCanvas"></canvas>
<div class="container">

<h1>Add Student</h1>

<form method="POST" action="/students/store">
@csrf

Student Number:<br>
<input type="text" name="student_number"><br>

First Name:<br>
<input type="text" name="first_name"><br>

Last Name:<br>
<input type="text" name="last_name"><br>

Year Level:<br>
<input type="text" name="year_level"><br><br>

<button type="submit">Save</button>

</form>
<script src="/matrix.js"></script>
</div>