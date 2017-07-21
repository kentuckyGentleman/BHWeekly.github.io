<?php include "header.php" ?>
<?php include "nav.php" ?>
<?php include "sort.php" ?>


<!-- Section Header -->
<div class="sectionHeader issuesBackground">
	<div class="sectionHeaderInfo">
		<div class="container">
			<div class="sectionHeaderLogo">
				<img src="img/logo/bhWeekly_horizontal.png">
			</div>
			<h1>Read Past Issues of <span class="sectionHeaderBlue">Beverly Hills Weekly</span></h1>
			<h3>
				We’ve covered everything Beverly Hills since 1999.  
Relive important moments or get your dose of nostalgia.
			</h3>
			<div class="hrHeavy"></div>
		</div>
	</div>
</div>

<div class="container">
	<div class="pastIssuesContainer">
		<?php echo pastIssues("issues/pdf"); ?>
	</div>
</div>

<?php include "footer.php" ?>

</body>
</html>