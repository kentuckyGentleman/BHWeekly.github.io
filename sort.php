<?php
//Get file path to most recenty uploaded pdf and jpeg to display on home page
function issuePreview($dir){

	$files = array();
	$files = scandir($dir);

	echo $dir."/".end($files);
}

// Sort through and display all previous issues
// function pastIssues($pastDir){

// 	$pastIssues = array();
// 	$pastIssues = scandir($pastDir);

// 	foreach ($pastIssues as $issue){
// 		// echo '<a href="'.$pastDir."/".$issue'" target="_blank">'$issue'</a>';
// 		echo '<a href="';
// 		echo $pastDir."/".$issue;
// 		echo '"target="blank">';
// 		echo $issue;
// 		echo '</a>';
// 	}
// }

function pastIssues($pastFile,$pastImg){

	$pastPDFS = scandir($pastFile);
	$pastPreviews = scandir($pastImg);

	foreach ($pastPDFS as $pastPDF){
		echo '<a href="';
		echo $pastFile."/".$pastPDF;
		echo '"target="blank">';
		echo '<img class="thumbnail" src="';
		echo $pastImg."/".$pastPreview;
		echo '"/>';
		echo '</a>';
	}
}
?>