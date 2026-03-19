<link rel="stylesheet" href="/style.css">
<canvas id="matrixCanvas"></canvas>
<div class="container">
<h1>Edit Level</h1>

<form method="POST" action="/levels/update/{{ $level->id }}">
@csrf

Level Name:<br>
<input type="text" name="name" value="{{ $level->name }}"><br><br>

<button type="submit">Update</button>

</form>
<script src="/matrix.js"></script>
</div>