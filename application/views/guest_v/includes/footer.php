<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- start footer Area -->		
<footer class="footer-area section-gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>Testimoni</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
					<p class="footer-text">
						PPI Jawa Tengah &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Proudly to
						<i class="icon-heart3" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank">Colorlib</a>
					</p>								
				</div>
				
				<div class="single-footer-widget">
					<h6>Ikuti Sosial Media Kami</h6>
					<div class="footer-social d-flex align-items-center" align="100" size="10%">
						<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>	
<!-- End footer Area -->	

			
			<script src="<?php echo base_url(); ?>template/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			
			<script src="<?php echo base_url(); ?>template/js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			
			<script src="<?php echo base_url(); ?>template/js/easing.min.js"></script>				
			
			<script src="<?php echo base_url(); ?>template/js/hoverIntent.js"></script>		
<script src="<?php echo base_url(); ?>template/js/grid.js"></script>					
			
			<script src="<?php echo base_url(); ?>template/js/superfish.min.js"></script>	
			
			
			<script src="<?php echo base_url(); ?>template/js/jquery.ajaxchimp.min.js"></script>	
			
			<script src="<?php echo base_url(); ?>template/js/jquery.magnific-popup.min.js"></script>
				
			<script src="<?php echo base_url(); ?>template/js/owl.carousel.min.js"></script>				
			
			<script src="<?php echo base_url(); ?>template/js/jquery.sticky.js"></script>	
		
			<script src="<?php echo base_url(); ?>template/js/jquery.nice-select.min.js"></script>				
			
			<script src="<?php echo base_url(); ?>template/js/parallax.min.js"></script>	
			<script src="<?php echo base_url(); ?>template/mail-script.js"></script>	
			<script src="<?php echo base_url(); ?>template/js/main.js"></script>




<script type="text/javascript">
    $().ready(function(){
        $('[rel="tooltip"]').tooltip();

        $('a.scroll-down').click(function(e){
            e.preventDefault();
            scroll_target = $(this).data('href');
             $('html, body').animate({
                 scrollTop: $(scroll_target).offset().top - 60
             }, 1000);
        });

    });

    function rotateCard(btn){
        var $card = $(btn).closest('.card-container');
        console.log($card);
        if($card.hasClass('hover')){
            $card.removeClass('hover');
        } else {
            $card.addClass('hover');
        }
    }


</script>

		</body>
	</html>


