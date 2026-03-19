<link rel="stylesheet" href="/style.css">
<canvas id="matrixCanvas"></canvas>
<div class="container"><h1>Add Level</h1>

<form method="POST" action="/levels/store">
@csrf

Level Name:<br>
<input type="text" name="name"><br><br>

<button type="submit">Save</button>

</form>
<script src="/matrix.js"></script>
</div>