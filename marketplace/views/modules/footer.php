<footer class="ps-footer">

    <div class="container">

        <div class="ps-footer__widgets">

        	<!--=====================================
			Contact us
			======================================-->  

            <aside class="widget widget_footer widget_contact-us">

                <h4 class="widget-title">Contact us</h4>

                <div class="widget_content">

                    <h3>123456789</h3>
                    <p>Guatemala, Alta Verapaz <br>
                    	<a href="mailto:lajoya@gmail.com">lajoya@gmail.com</a>
                	</p>

                    <ul class="ps-list--social">
                        <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="google-plus" href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>

                </div>

            </aside>

            <!--=====================================
			Quick Links
			======================================-->  

            <aside class="widget widget_footer">

                <h4 class="widget-title">Quick links</h4>

                <ul class="ps-list--link">

                    <li><a href="#">Policy</a></li>

                    <li><a href="#">Term &amp; Condition</a></li>

                    <li><a href="#">Shipping</a></li>

                    <li><a href="#">Return</a></li>

                    <li><a href="faqs.html">FAQs</a></li>

                </ul>

            </aside>

            <!--=====================================
			Company
			======================================-->  

            <aside class="widget widget_footer">

                <h4 class="widget-title">Company</h4>

                <ul class="ps-list--link">

                    <li><a href="about-us.html">About Us</a></li>

                    <li><a href="#">Affilate</a></li>

                    <li><a href="#">Career</a></li>

                    <li><a href="contact-us.html">Contact</a></li>

                </ul>

            </aside>

            <!--=====================================
			Bussiness
			======================================-->  

            <aside class="widget widget_footer">

                <h4 class="widget-title">Bussiness</h4>

                <ul class="ps-list--link">


                    <li><a href="checkout.html">Checkout</a></li>

                    <li><a href="my-account.html">My account</a></li>

                    <li><a href="shop-default.html">Shop</a></li>

                </ul>

            </aside>

        </div>

      	<!--=====================================
		Categories Footer
		======================================-->  

        <div class="ps-footer__links">

            <?php foreach ($menuCategories as $key => $value): ?>
                                    
            <p>
            	<strong><?php echo $value->name_category ?></strong>

                <!--=====================================
                Traer las subcategor??as
                ======================================-->

                <?php 

                $url = CurlController::api()."subcategories?linkTo=id_category_subcategory&equalTo=".rawurlencode($value->id_category)."&select=url_subcategory,name_subcategory";
                $method = "GET";
                $fields = array();
                $header = array();

                $menuSubcategories = CurlController::request($url, $method, $fields, $header)->results;

                ?>

                <?php foreach ($menuSubcategories as $key => $value): ?>

                    <a href="<?php echo $path.$value->url_subcategory ?>"><?php echo $value->name_subcategory ?></a>

                <?php endforeach ?>
            	
            </p>

            <?php endforeach ?>
            
        </div>

        <!--=====================================
		CopyRight - Payment method Footer
		======================================-->  

        <div class="ps-footer__copyright">

            <p>PROYECTO EN DESARROLLO PARA LA JOYA "UMG"</p>

            <p>
            	<span>We Using Safe Payment For:</span>

            	<a href="#">
            		<img src="img/payment-method/1.jpg" alt="">
            	</a>

            	<a href="#">
            		<img src="img/payment-method/2.jpg" alt="">
            	</a>

            	<a href="#">
            		<img src="img/payment-method/3.jpg" alt="">
            	</a>

            	<a href="#">
            		<img src="img/payment-method/4.jpg" alt="">
            	</a>

            	<a href="#">
            		<img src="img/payment-method/5.jpg" alt="">
            	</a>

            </p>

        </div>

    </div>

</footer>