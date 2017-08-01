<?php include "header.php" ?>
<?php include "nav.php" ?>
<?php include "sort.php" ?>


<!-- Navigation and Logo Header -->
<div class="homeNavContainer">
	<div class="homeServingButtons">
		<div class="navSubAd">
			<a class="button buttonSecondary" href="/subscribe.php">Subscribe</a>
		  	<a class="button buttonMain" href="/advertise.php">Advertise with us</a>
		</div>
		<div class="logoServingContainer">
			<img src="img/logo/serving.png">
		</div>
	</div>
	<div class="logoContainer">
		<img class="bhWeekly_logo_nav" src="img/logo/bhWeekly_large.png">
	</div>
	<div class="navItems">
	   	<div class="navItemsHolder">
	   		<ul>
	   	      <li><a class='navLinkOverlay linkCurrent' href="/">This Week</a></li>
	   	      <li><a class='navLinkOverlay' href="/bhweeklystaff.php">Staff</a></li>
	   	      <li><a class='navLinkOverlay' href="/pastissues.php">Past Issues</a></li>
	   	      <li><a class='navLinkOverlay' href="/contact.php">Contact</a></li>
	   	    </ul>
		</div>
   	</div>
</div>

<!-- Header and Recent Issue Image -->
<div class="container">
	<!-- Header -->
	<div class="homeContainer">
		<div class="homeHeader">
			<h1>Read <span>this week&rsquo;s issue</span></h1>
		</div>
		<div class="recentIssue">
			<div class="recentIssueImage">
				<a class="issueLink" href="<?php echo issuePreview("issues/pdf"); ?>" target="_blank"><img src="<?php echo issuePreview("issues/preview"); ?>"/></a>
			</div>
			<a class="button buttonMain buttonHome" href="<?php echo issuePreview("issues/pdf"); ?>" target="_blank">Read this week's issue</a>
		</div>
	</div>
</div>

<?php include "footer.php" ?>

</body>
</html>