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
	$pastIssues = scandir($pastDir, $sorting_order = SCANDIR_SORT_DESCENDING);

	// Set files to be ignored during scan
	$ignored = array('.', '..', '.DS_Store','.DS_');

	$issueHeader = array();

	// Generate File names and Headers
	foreach ($pastIssues as $issue){

		$pastIssues = array_reverse($pastIssues);
		$issueHeader[] = substr($issue, 0, 4);

		// Remove Duplicate years from array
		$issueHeaders = array_unique($issueHeader);
	}

	// Display Year Headers and respective issues
	foreach ($issueHeaders as $issueHead){

			if (in_array($issueHead, $ignored)) continue;
			echo '<div class="pastIssues '.$issueHead.'">';
			echo '<h1 class="issuesHeader">';
			echo $issueHead;
			echo '</h1>';
			echo '<h3 class="issuesSubHeader">';
			echo 'Issue No.';
			echo '</h3>';
			echo '<div class="pastIssuesLinks">';
			
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
			echo '<a class="backToTop button buttonTertiary" href="">Back to Top</a>';
			echo '</div>';
	}
}

?>