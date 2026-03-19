<link rel="stylesheet" href="/style.css">
<canvas id="matrixCanvas"></canvas>
<div class="container">

<h1>Student Progress</h1>

<h2>Student: {{ $student->first_name }} {{ $student->last_name }}</h2>

<hr>

<h3>Completed Subjects</h3>

<ul>
@foreach ($completed as $subject)
<li>✔ {{ $subject->code }}</li>
@endforeach
</ul>

<hr>

<h3>Ongoing Subjects</h3>

<ul>
@foreach ($ongoing as $subject)
<li>• {{ $subject->code }}</li>
@endforeach
</ul>

<hr>

<h3>Eligible Subjects</h3>

<ul>
@foreach ($eligible as $subject)
<li>• {{ $subject->code }}</li>
@endforeach
</ul>
<script src="/matrix.js"></script>
</div>