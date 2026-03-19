<link rel="stylesheet" href="/style.css">
<canvas id="matrixCanvas"></canvas>
<div class="container">

<!DOCTYPE html>
<html>
<head>
    <title>Enrollment Dashboard</title>
</head>

<body>

<h1>Academic Enrollment System</h1>

<hr>

<h2>Management</h2>

<a href="/students">
<button>Manage Students</button>
</a>

<a href="/levels">
<button>Manage Levels</button>
</a>

<a href="/subjects">
<button>Manage Subjects</button>
</a>

<br><br>

<h2>Academic Controls</h2>

<a href="/prerequisites">
<button>Assign Prerequisites</button>
</a>

<a href="/completions">
<button>Mark Subject Completion</button>
</a>

<script src="/matrix.js"></script>
</body>
</html>
</div>


<!-- <!DOCTYPE html>
<html>
<head>
    <title>Enrollment System</title>
</head>
<body>

<h1>Student Enrollment System</h1>

<h2>Students</h2>
<ul>
@foreach ($students as $student)
    <li>
        {{ $student->first_name }} {{ $student->last_name }}
        (ID: {{ $student->id }})
    </li>
@endforeach
</ul>

<h2>Subjects</h2>
<table border="1" cellpadding="10">
<tr>
    <th>Code</th>
    <th>Title</th>
    <th>Enroll Student 1</th>
</tr>

@foreach ($subjects as $subject)
<tr>
    <td>{{ $subject->code }}</td>
    <td>{{ $subject->title }}</td>
    <td>
        <a href="/enroll/1/{{ $subject->id }}">Enroll</a>
    </td>
</tr>
@endforeach

</table>

</body>
</html> -->