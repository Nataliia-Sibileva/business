<?php
/*
Template Name: Home

*/
?>


<?php get_header(); ?>

<section class="about" id="about">
	<div class="wrapper">
		<div class="about-company">
			<h2>About our company</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim sed porttitor in et scelerisque blandit tincidunt in. Euismod libero diam, facilisis accumsan aliquam. Eget ipsum iaculis sapien sed. Adipiscing pellentesque.</p>
			<div class="img-hover__big">
				<img src="<?php echo get_template_directory_uri() ?>/img/about.jpg" alt="About our company">
			</div>
			
		</div>

		<div class="about-task">
			<div class="about-task__head">
				<h3>Our task – is to</h3>
				<h6>Help you</h6>
			</div>
			<div class="img-hover">
				<picture>
					 <source srcset="<?php echo get_template_directory_uri() ?>/img/task-mob.jpg" media="(max-width: 769px)">
					 <img src="<?php echo get_template_directory_uri() ?>/img/task.jpg" alt="About our company">
				</picture>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim sed porttitor in et scelerisque blandit tincidunt in.</p>

			<div class="about-task__ced">
				<div class="about-task__item">
					<h4>C</h4>
					<div>
						<h6>Consultation</h6>
						<p>Customer satisfaction guarantee</p>
					</div>
				</div>

				<div class="about-task__item">
					<h4>E</h4>
					<div>
						<h6>Evaluation</h6>
						<p>Get quick results</p>
					</div>
				</div>

				<div class="about-task__item">
					<h4>D</h4>
					<div>
						<h6>Development</h6>
						<p>All documents are rechecked</p>
					</div>
				</div>
				
			</div>
			
		</div>
		
	</div>
</section>

<section class="indicators" id="indicators">
	<div class="wrapper">
		<h3>Key indicators</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim sed porttitor in et scelerisque blandit tincidunt in.</p>

		<div class="indicators-key">
			<div class="indicators-key__item">
				<p class="key-number">37</p>
				<h6>Lorem Ipsum</h6>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
			</div>

			<div class="indicators-key__item">
				<p class="key-number">37</p>
				<h6>Lorem Ipsum</h6>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
			</div>

			<div class="indicators-key__item">
				<p class="key-number">37</p>
				<h6>Lorem Ipsum</h6>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
			</div>

			<div class="indicators-key__item">
				<p class="key-number">37</p>
				<h6>Lorem Ipsum</h6>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
			</div>
		</div>
		
	</div>
</section>

<section class="bussiness-plan" id="process">
	<div class="wrapper">
		<div class="bussiness-plan__head">
			<h3><span>HOW IS THE </span>BUSINESS PLAN FORMED</h3>
			<p>Have a look at the detailed plan and find out what you are paying</p>
		</div>

		<div class="bussiness-plan__list">
			<div class="bussiness-plan__step">
				<div>
					<p>01</p>
					<p>step</p>
				</div>
				<h6>You leave the application</h6>
				<p>Lorem Ipsum is the text "fish" often used in print and web design. </p>
			</div>

			<div class="bussiness-plan__step">
				<div>
					<p>02</p>
					<p>step</p>
				</div>
				<h6>Choose your writer</h6>
				<p>Lorem Ipsum is the text "fish" often used in print and web design. </p>
			</div>

			<div class="bussiness-plan__step">
				<div>
					<p>03</p>
					<p>step</p>
				</div>
				<h6>Tell about your plans</h6>
				<p>Lorem Ipsum is the text "fish" often used in print and web design. </p>
			</div>

			<div class="bussiness-plan__step">
				<div>
					<p>04</p>
					<p>step</p>
				</div>
				<h6>Chatting with the writer</h6>
				<p>Lorem Ipsum is the text "fish" often used in print and web design. </p>
			</div>

			<div class="bussiness-plan__step">
				<div>
					<p>05</p>
					<p>step</p>
				</div>
				<h6>Pay the first installment</h6>
				<p>Lorem Ipsum is the text "fish" often used in print and web design. </p>
			</div>

			<div class="bussiness-plan__step">
				<div>
					<p>06</p>
					<p>step</p>
				</div>
				<h6>Pay the writer you ate</h6>
				<p>Lorem Ipsum is the text "fish" often used in print and web design. </p>
			</div>
			
		</div>
		
	</div>
	
</section>

<section class="reviews" id="reviews">
	<div class="wrapper">
		<div class="reviews-head">
			<h2>What we are proud of:</h2>
			<p>Feedback from those who have already collaborated with us</p>
			
		</div>

		<div class="reviews-slider">

			<?php 

			$json = file_get_contents('https://jsonplaceholder.typicode.com/comments');
			$data = json_decode($json);

			for ($i = 0; $i <= count($data); $i++)  { ?>
				<div>
					<div class="reviews-name">
						<div class="photo">
							
						</div>
						<div>
							<h5><?php echo $data[$i]->{'name'}?></h5>
							<p><?php echo $data[$i]->{'email'}?></p>
						</div>
					</div>
					<div class="reviews-text">
						<img src="<?php echo get_template_directory_uri() ?>/img/right-quotes.png">
						<p><?php echo $data[$i]->{'body'}?></p>
					</div>
				</div>

			    
			<?php } ?>
			
		</div>
		<div class="number-slider">
			<p>#<span id="numb-slider">1</span>
		</div>
	</div>
	
</section>

<section class="resolute" id="contacts">
	<div class="wrapper">
		<div class="resolute-head">
			<h3><span>RESOLUTE IS</span> ALWAYS GET MORE</h3>
			<p>Leave the application and get 10% discount when ordering business plan</p>
		</div>

		<div class="resolute-form">
			<form>
				<input type="text" name="name" placeholder="Your name*" required>
				<input type="email" name="email" placeholder="Your e-mail*" required>
				<input type="tel" name="phone" placeholder="+380 000 000 000" required>
				<input type="submit" value="Order Quickly">

				<p>Your data is safe, and will not be transferred to third parties</p>
			</form>
			
		</div>
		
	</div>
	
</section>

<?php get_footer(); ?>
