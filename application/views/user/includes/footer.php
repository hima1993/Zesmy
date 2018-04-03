<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h2><a href="index.html"><img src="<?php echo base_url()?>template/images/logo3.jpg" alt=" " /></a></h2>
			<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur, adipisci velit, sed quia non 
			numquam eius modi tempora incidunt ut labore 
			et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<div class="col-md-9 footer-right">
			<div class="col-sm-6 newsleft">
				<h3>SIGN UP FOR NEWSLETTER !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form>
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="clearfix"></div>
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Information</h4>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="mens.html">Men's Wear</a></li>
						<li><a href="womens.html">Women's Wear</a></li>
						<li><a href="electronics.html">Electronics</a></li>
						<li><a href="codes.html">Short Codes</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				
				<div class="col-md-4 sign-gd-two">
					<h4>Store Information</h4>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 1234k Avenue, 4th block, <span>Newyork City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-4 sign-gd flickr-post">
					<h4>Flickr Posts</h4>
					<ul>
						<li><a href="single.html"><img src="<?php echo base_url()?>template/images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="<?php echo base_url()?>template/images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="<?php echo base_url()?>template/images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="<?php echo base_url()?>template/images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="<?php echo base_url()?>template/images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="<?php echo base_url()?>template/images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="<?php echo base_url()?>template/images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="<?php echo base_url()?>template/images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="<?php echo base_url()?>template/images/b15.jpg" alt=" " class="img-responsive" /></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">&copy 2016 Smart Shop. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
</div>
<!-- //footer -->
<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">

										<h3>Sign up for free</h3>

										<div class="wizard">


										 <div class="wizard-inner">


										<ul class="nav nav-tabs"  role="tablist">


      										<li role="presentation" class="active"><a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">Account Info</a></li>
      										<li role="presentation"><a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">Login Info</a></li>
    									</ul>


    									</div>



    									<form method="post" action="<?php echo base_url() ?>index.php/User/Register">
					                <div class="tab-content">
					                    <div class="tab-pane active" role="tabpanel" id="step1">
					                        <div class="step1">
					                        	<div class="sign-up">
												<h4>First Name :</h4>
												<input name="Fname" type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Last Name :</h4>
												<input name="Lname" type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>E-mail :</h4>
												<input name="email" type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
												
											</div>
					                           
					                        </div>
					                       
					                        <div class="sign-up pull-right">


					                        	<a role="button" class="next-step"><h3><b>Next</b></h3></a>
					                            
					                        </div>
					                    
					                         </div>


					                    <div class="tab-pane" role="tabpanel" id="step2">
					                        <div class="step2">

					                        	<div class="sign-up">
												<h4>Password :</h4>
												<input name="password" type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
												</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input name="confirmPassword" type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>


											<div class="sign-up">
												<label>By clicking in "Register now", you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></label>
												<input type="submit" value="REGISTER NOW" >
											</div>
					                        </div>

					                     </div>

					                 </div>
					               
					            </form>

									</div>

										
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<br>
										
										<form method="post" action="<?php echo base_url() ?>index.php/User/loginchk">
											<div class="sign-in">
												<h4>Email :</h4>
												<input name="email" type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<br>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
</body>

<script type="text/javascript">

$('.convertableIdentifier').each(function(i, el) {

        // grab the url and the link text
        var url = $(el).html();

        // create a new node with query by decorating a
        // empty a tag
        var newNode = $('<a></a>').attr('href', url).attr('target', '_blank').html(url);

        // replace the current node with our new node
        $(el).replaceWith(newNode);

    });


</script>





<script type="text/javascript">
	
$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


//according menu

$(document).ready(function()
{
    //Add Inactive Class To All Accordion Headers
	$('.accordion-header').toggleClass('inactive-header');
	
	//Set The Accordion Content Width
	var contentwidth = $('.accordion-header').width();
	$('.accordion-content').css({});
	
	//Open The First Accordion Section When Page Loads
	$('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
	$('.accordion-content').first().slideDown().toggleClass('open-content');
	
	// The Accordion Effect
	$('.accordion-header').click(function () {
		if($(this).is('.inactive-header')) {
			$('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
		
		else {
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
	});
	
	return false;
});



</script>
</html>

