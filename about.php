<?php require 'insert.php'; head(); nav(__FILE__); ?>
        
		<div class="container">

		    <!-- Main hero unit for a primary marketing message or call to action -->   
		    <div id="about" class="hero-unit">
				<p><h2>About</h2></p>
				<p>The Computer Science Society at Depaul is a group of students involved in technology who want to further their studies in an extracurricular environment.
				The group is inactive over the summer and will start up again in September when school starts.</p>
				<br>
				<div class="accordion" id="accordion2">
		            <div class="accordion-group" id="Projects">
		              <div class="accordion-heading">
		                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
					<p>Projects</p>
		                </a>
		              </div>
		              <div id="collapseOne" class="accordion-body collapse" style="height: 0px;">
		                <div class="accordion-inner">
		                  	<p><a href="https://github.com/cindablock/CSSsite">Website</a>: The source code for this website. It is under continued development.</p>
		                </div>
		              </div>
		            </div>
		            <div class="accordion-group" id="Members">
		              <div class="accordion-heading">
		                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
					<p>Members</p>
		                </a>
		              </div>
		              <div id="collapseTwo" class="accordion-body collapse" style="height: 0px;">
		                <div class="accordion-inner">
					<p>Over 25 members. See <a href="https://www.facebook.com/groups/355557804557408/">Facebook</a> group for the full list.</p>
		                </div>
		              </div>
		            </div>
		            <div class="accordion-group" id="Events">
		              <div class="accordion-heading">
		                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
					<p>Events</p>
		                </a>
		              </div>
		              <div id="collapseThree" class="accordion-body collapse" style="height: 0px;">
		                <div class="accordion-inner">
					<p>TBA: on summer break.</p>
		                </div>
		              </div>
		            </div>
		        </div>
			</div>

		</div> <!-- /container -->

		<?php scripts(); ?>
