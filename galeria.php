<?php
	$dir = "./assets/galeria/";
	$files = scandir($dir);
	$counter = 1;
	foreach ($files as $file) {
    if (in_array($file, array(".", ".."))) continue;
    echo '<img src="'.$dir.$file.'" alt="'.$file.'" draggable="false" data-bs-toggle="modal" data-bs-target="#modal'.$counter.'"/></a>';
    echo '<div class="modal fade" id="modal'.$counter.'" tabindex="-1" aria-labelledby="modal'.$counter.'" aria-hidden="true">';
		echo '<div class="modal-dialog">';
			echo '<div class="modal-content">';
				echo '<div class="modal-header">';
					echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
				echo '</div>';

				echo '<div class="modal-body">';
					echo '<img src="'.$dir.$file.'" alt="'.$file.'"/></a>';
					echo '<div id="zoom">';
					echo '<img id="zoom-img">';
					echo '</div>';
				echo '</div>';

				echo '<div class="modal-footer">';
					echo '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>';
				echo '</div>';
			echo '</div>';
		echo '</div>';
    echo '</div>';
    $counter += 1;
  }
?>
