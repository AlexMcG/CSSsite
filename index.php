<?php require 'insert.php'; head(); nav(__FILE__); ?>
		
		<div class="container">

		    <!-- Main hero unit for a primary marketing message or call to action -->
		    <div id="splash" class="splash hero-unit">
			<p><h1>Computer Science Society</h1></p>
		        <p><h3>of Depaul University</h3></p>
		        <p>
			  <a class="btn btn-primary btn-large" href="about.php">Learn more &raquo;</a>
			  <a class="btn btn-large" onClick="dismiss()">Dismiss</a>
			</p>
		    </div>
		    <p><h2>NEWS</h2></p>
		    <?php news(); ?>
		</div> <!-- /container -->

		<?php scripts(); ?>
