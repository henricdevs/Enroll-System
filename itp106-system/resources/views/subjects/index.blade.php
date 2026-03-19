<link rel="stylesheet" href="/style.css">
<canvas id="matrixCanvas"></canvas>
<div class="container">

<h1>Subjects</h1>

<a href="/subjects/create">Add Subject</a>

<table border="1">
<tr>
<th>ID</th>
<th>Code</th>
<th>Title</th>
<th>Units</th>
<th>Level</th>
<th>Actions</th>
</tr>

@foreach ($subjects as $subject)
<tr>
<td>{{ $subject->id }}</td>
<td>{{ $subject->code }}</td>
<td>{{ $subject->title }}</td>
<td>{{ $subject->units }}</td>
<td>{{ $subject->level->name }}</td>
<td>
<a href="/enroll/1/{{ $subject->id }}">
<button>Enroll</button>
</a>
</td>
<td>
<a href="/subjects/edit/{{ $subject->id }}">Edit</a>
<a href="/subjects/delete/{{ $subject->id }}">Delete</a>
</td>
</tr>
@endforeach

</table>
<script src="/matrix.js"></script>
</div>