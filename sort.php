<?php
//Get file path to most recenty uploaded pdf and jpeg to display on home page
function issuePreview($dir){

	$files = array();
	$files = scandir($dir);

	echo $dir."/".end($files);
}

// Sort through and display all previous issues
function pastIssues($pastDir){

	// Scan pdf folder
	$pastIssues = array();
	$pastIssues = scandir($pastDir);

	// Set files to be ignored during scan
	$ignored = array('.', '..', '.DS_Store');

	// Turn each filename into a link
	foreach ($pastIssues as $issue){
		
		if (in_array($issue, $ignored)) continue;
		//Remove '.pdf' from filenames
		$removeExt = str_replace(".pdf","", $issue);
		echo '<a class="pastIssuesLink" href="';
		echo $pastDir."/".$issue;
		echo '"target="blank">';
		echo $removeExt;
		echo '</a>';
	}
}

// function pastIssues($pastFile,$pastImg){

// 	$pastPDFS = scandir($pastFile);
// 	$pastPreviews = scandir($pastImg);

// 	foreach ($pastPDFS as $pastPDF){
// 		echo '<a href="';
// 		echo $pastFile."/".$pastPDF;
// 		echo '"target="blank">';
// 		echo '<img class="thumbnail" src="';
// 		echo $pastImg."/".$pastPreview;
// 		echo '"/>';
// 		echo '</a>';
// 	}
// }
?>