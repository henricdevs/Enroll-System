<link rel="stylesheet" href="/style.css">
<canvas id="matrixCanvas"></canvas>
<div class="container">

<h1>Add Subject</h1>

<form method="POST" action="/subjects/store">
@csrf

Code:<br>
<input type="text" name="code"><br>

Title:<br>
<input type="text" name="title"><br>

Units:<br>
<input type="number" name="units"><br>

Level:<br>
<select name="level_id">
@foreach ($levels as $level)
<option value="{{ $level->id }}">{{ $level->name }}</option>
@endforeach
</select>

<br><br>

<button type="submit">Save</button>

</form>
<script src="/matrix.js"></script>
</div>