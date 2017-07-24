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