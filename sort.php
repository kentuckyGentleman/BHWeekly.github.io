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
	$ignored = array('.', '..', '.DS_Store','.DS_');

	$issueLinks = array();
	$issueHeader = array();

	// Generate File names and Headers
	foreach ($pastIssues as $issue){

		$issueLinks[] = $issue;
		$issueHeader[] = substr($issue, 0, 4);

		// Remove Duplicate years from array
		$issueHeaders = array_unique($issueHeader);
	}

	// Display Year Headers and respective issues
	foreach ($issueHeaders as $issueHead){

			if (in_array($issueHead, $ignored)) continue;
			echo '<div class="pastIssues">';
			echo '<h1>';
			echo $issueHead;
			echo '</h1>';
			
			foreach ($pastIssues as $issue){
				if ((substr($issue, 0, 4)) == $issueHead ){

					if (in_array($issue, $ignored)) continue;

					//Remove year prefix and '.pdf' from filenames
					$removePrefix = substr($issue, 0, 5);
					$fileIgnore =  array($removePrefix, ".pdf");
					$removeExt = str_replace($fileIgnore,"", $issue);

					//display link
					echo '<a class="pastIssuesLink" href="';
					echo $pastDir."/".$issue;
					echo '"target="blank">';
					echo $removeExt;
					echo '</a>';
				}

			}
			echo '</div>';
	}
}

?>