<style>
@media(max-width:800px) {
.scrollable-menu {
    height: auto;
    max-height: 200px;
    overflow-x: hidden;
} }
</style>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark navbar-shadow">
  <a class="navbar-brand hvr-bounce-in" href="http://cccup.osiskanisius.org">
  <img src="images/01_logo/logo-horizontal.png" style="height:36px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto text-center oswald small-caps">
      <li class="nav-item">
        <a class="hvr-underline-from-center nav-link" href="http://cccup.osiskanisius.org">Home</a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle hvr-underline-from-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Competitions</a>
			<div class="dropdown-menu scrollable-menu" aria-labelledby="navbarDropdown">
				<?php 
				include('php/cccup-variables.php');
				$lomba = array($badminton, $band, $basket, $billiard, $chess, $moderndance, $paskibra, $pencaksilat, $photography, $shortmovie, $soccer, $tabletennis,  $taekwondo, $volley,  $wallclimbing, $womenfutsal);
				foreach ($lomba as $value) {
				  echo "<a class='dropdown-item hvr-sweep-to-right oswald' href='competitions#$value[0]'>$value[1]</a>";
				}
				?>
			</div>
		</li>
		<li class="nav-item">
			<a class="hvr-underline-from-center nav-link" href="about">About</a>
		</li>
		<li class="nav-item">
			<a class="hvr-underline-from-center nav-link" href="registration">Registration</a>
		</li>
		<li class="nav-item">
			<a class="hvr-underline-from-center nav-link" href="https://www.mediafire.com/file/k3rd6tj002l57cx/Proposal%20Undangan%20Online.pdf" target="blank">Proposal</a>
		</li>
    </ul>
	</div>
</nav>
<script type="text/javascript">
// to top right away
if ( window.location.hash ) scroll(0,0);
// void some browsers issue
setTimeout( function() { scroll(0,0); }, 1);
$(function() {
var $root = $('html, body');
$('a[href^="competitions%20#"]').click(function () {
    $root.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
});
}
</script>