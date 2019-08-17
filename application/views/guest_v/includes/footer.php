<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- start footer Area -->		
<footer class="footer-area py-1">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<h3><br></h3></br>
                    <ul>
					<ol>
                        <li><a href="<?php echo base_url('#'); ?>"><font color="white">Lomba Inovasi Teknologi Pertanian Wonosobo 2019</a></li></font>
                        <li><a href="<?php echo base_url('#'); ?>"><font color="white">Kemitraan Usaha (Mini Expo Dan Temu Bisnis)</a></li></font>
                        <li><a href="<?php echo base_url('#'); ?>"><font color="white">Marketing Service</a></li></font>
						<br></br>
						</ol>
                    </ul>
                </div>
				
				<div class="col-lg-4 col-md-6 col-sm-6">
				<h3><br></h3></br>
                    <ul>
					<ol>
                        <li><a href="<?php echo base_url('#'); ?>"><font color="white">Festival Kuliner Wonosobo 2019</a></li></font>
                        <li><a href="<?php echo base_url('#'); ?>"><font color="white">Pameran Dan Lomba Posyantek Tenologi Tepat Guna</a></li></font>
                        <li><a href="<?php echo base_url('#'); ?>"><font color="white">Seminar Teknologi "Pemuda, Inovasi Dan Teknologi"</a></li></font>
						<br></br>
						</ol>
                    </ul>
                </div>
				
				<div class="col-lg-4 col-md-6 col-sm-6">
				<br></br>
				<div class="single-footer-widget">
					<h6>Ikuti Sosial Media Kami</h6>
					<div class="footer-social d-flex align-items-center" align="100" size="10%">
						<a class="facebook" href="<?php echo base_url('#'); ?>"><font size="5"><i class="fa fa-facebook"></i></a></font>
						<a class="twitter" href="<?php echo base_url('#'); ?>"><font size="5"><i class="fa fa-twitter"></i></a></font>
						<a class="youtube" href="<?php echo base_url('#'); ?>"><font size="5"><i class="fa fa-youtube"></i></a></font>
						<a class="whatsapp" href="<?php echo base_url('#'); ?>"><font size="5"><i class="fa fa-whatsapp"></i></a></font>
					</div>
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


