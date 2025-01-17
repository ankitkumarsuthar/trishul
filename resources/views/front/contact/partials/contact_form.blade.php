<div class="col-lg-8">
	<form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
		<div class="row">	
			<div class="col-lg-6 form-group">
				<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
			
				<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

				<input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
				<div class="mt-20 alert-msg" style="text-align: left;"></div>
			</div>
			<div class="col-lg-6 form-group">
				<textarea class="common-textarea form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
				<button class="genric-btn primary circle mt-30" style="float: right;">Send Message</button>								
			</div>
		</div>
	</form>	
</div>