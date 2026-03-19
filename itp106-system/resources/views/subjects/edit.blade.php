<link rel="stylesheet" href="/style.css">
<canvas id="matrixCanvas"></canvas>
<div class="container">

<h1>Edit Subject</h1>

<form method="POST" action="/subjects/update/{{ $subject->id }}">
@csrf

Code:<br>
<input type="text" name="code" value="{{ $subject->code }}"><br>

Title:<br>
<input type="text" name="title" value="{{ $subject->title }}"><br>

Units:<br>
<input type="number" name="units" value="{{ $subject->units }}"><br>

Level:<br>
<select name="level_id">

@foreach ($levels as $level)
<option value="{{ $level->id }}"
@if($subject->level_id == $level->id) selected @endif>
{{ $level->name }}
</option>
@endforeach

</select>

<br><br>

<button type="submit">Update</button>

</form>
<script src="/matrix.js"></script>
</div>