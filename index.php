<html>
	<head>

	<meta charset="utf-8">
	<title>romanesco</title>

	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/romanesco.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/screen.css">
</head>

<body>
	<div "container-fluid">
		<div class="col-sm-9">
			<canvas id="mainCanvas" width="800" height="600"></canvas>
			<img id="previewCursor" >
		</div>
		<div class="col-sm-3">

			<div id="saveButton" onclick="saveImage()"> Enregistrer image </div>

			<h3>Changer la taille</h3>
			<form>
				<input type="number" data-type="range" name="infoSize" id="infoSize" min="4" max="200" onchange="updateBrush()" value="64">
			</form>

			<h3>Sélectionne une brosse</h3>
			<div id="brushs">
				<?php
					foreach (glob("content/brush/*.*") as $id => $brush) {
						echo '<img width="32" id="selectImg'.$id.'" src="'.$brush.'">';
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>
