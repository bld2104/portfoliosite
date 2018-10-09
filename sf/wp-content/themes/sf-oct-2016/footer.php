</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/slick/slick.min.js"></script>
  <style>
  input[type=text] {
    border: 1px solid black;
    border-radius: 4px;
    color: black;
}
</style>
   <script>
$(document).ready(function() {

    $('.blog-class').slick({
        // dots: true,
        infinite: true,

        slidesToShow: 3,
        slidesToScroll: 1,
          autoplay: true,
  autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                // centerMode: true,

            }

        }, {
            breakpoint: 800,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: false,
                infinite: true,

            }


        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
                infinite: true,
                
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 2000,
            }
        }]
    });


});
</script>

<script>
$(document).ready(function(){
$('.test-news').slick();
});
</script>

  <div style="height:2px; background-color: #2b4a3e;"></div>
  <div style="height:2px; background-color: transparent"></div>
  <div style="height:2px; background-color: #2b4a3e;"></div>

<div id="footer">
<div style="height: 25px"></div>
 <div class="row" style="background-color: white">
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="text-align:center; font-size: 14pt">
<p style="color:#2b4a3e" >&copy; Copyright Sweet Fields 2016</p>
<p ><a style="color: #2b4a3e" href="#">About Us</a></p>
<p><a  style="color: #2b4a3e" href="#">Blog</a></p>
    <p><a  style="color: #2b4a3e" href="#">Full List of Supporters</a></p>

</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="text-align:center; color:white">
<p><a  style="color: #2b4a3e" href="#">Privacy Policy</a></p>
<p><a style="color: #2b4a3e" href="#">Secure Site for Payments</a></p>
        <p><a  style="color: #2b4a3e" href="#">Contact Us</a></p>
<p style="color: #2b4a3e; font-size:10pt;">See copyright info & credits <a style="text-decoration: underline;" href="#">here</a>.</p>
  <div style="height: 25px"></div>

</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="text-align:center">

<a href="#" target="_blank" ><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png"  class="whitelink" alt="" width="50px"/></a>
<a href="#" target="_blank" ><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png"  class="whitelink" alt="" width="45px"/></a>
     <div style="height:25px"></div>

     <div class="hidden-sm hidden-xs">
 
    <div class="row">
     <div class="col-lg-2 col-md-2"></div>
    
</div>
 <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">

</div>
<div class="col-lg-2 col-md-2"></div>
</div>
</div> 

</div>   
  </form>

    

</div>

</form>
</div> <!-- hidden lg -->
</div> <!-- third column -->
</div> <!-- row -->
</div> <!-- close id=footer -->
       

<?php wp_footer();?>
 
</body>
</html>

