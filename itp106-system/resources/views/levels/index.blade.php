<link rel="stylesheet" href="/style.css">
<canvas id="matrixCanvas"></canvas>
<div class="container">
<h1>Curriculum Levels</h1>

<a href="/levels/create">Add Level</a>

<table border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Actions</th>
</tr>

@foreach ($levels as $level)
<tr>
<td>{{ $level->id }}</td>
<td>{{ $level->name }}</td>
<td>
<a href="/levels/edit/{{ $level->id }}">Edit</a>
<a href="/levels/delete/{{ $level->id }}">Delete</a>
</td>
</tr>
@endforeach

</table>
<script src="/matrix.js"></script>
</div>