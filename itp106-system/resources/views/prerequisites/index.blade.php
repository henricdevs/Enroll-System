<link rel="stylesheet" href="/style.css">
<canvas id="matrixCanvas"></canvas>
<div class="container">

<h1>Assign Prerequisite</h1>

<form method="POST" action="/prerequisites/store">
@csrf

Subject:
<select name="subject_id">
@foreach($subjects as $subject)
<option value="{{ $subject->id }}">
{{ $subject->code }}
</option>
@endforeach
</select>

<br><br>

Prerequisite:
<select name="prerequisite_id">
@foreach($subjects as $subject)
<option value="{{ $subject->id }}">
{{ $subject->code }}
</option>
@endforeach
</select>

<br><br>

<button type="submit">Assign</button>

</form>

<hr>

<h2>Existing Prerequisites</h2>

<table border="1">

<tr>
<th>Subject</th>
<th>Requires</th>
</tr>

@foreach($prerequisites as $p)

<tr>
<td>{{ optional($subjects->find($p->subject_id))->code }}</td>
<td>{{ optional($subjects->find($p->prerequisite_subject_id))->code }}</td>
</tr>

@endforeach

</table>
<script src="/matrix.js"></script>
</div>