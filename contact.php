<?php $page = ('page6');include('inc_header.php');?><section id="banner">   <span data-picture data-alt="contact">      <span data-src="images/content/banner/banner_contact_smallest.jpg" alt=""></span><!-- Ukuran yg disarankan 320x175px -->      <span data-media="(min-width: 321px)" data-src="images/content/banner/banner_contact_small.jpg"></span><!--  Ukuran yg disarankan 480x214px -->      <span data-media="(min-width: 481px)" data-src="images/content/banner/banner_contact_med.jpg"></span><!--  Ukuran yg disarankan 768x249px -->      <span data-media="(min-width: 960px)" data-src="images/content/banner/banner_contact_large.jpg"></span><!--  Ukuran yg disarankan 1335x290px -->   </span></section>	<section id="middle" class="page">            <div class="box_orange"></div>            <p class="space_top">space top</p>            <div class="container">                <div id="left_content">                    <ul class="breadcrumb">                        <li><a href="index.php">Home</a>&nbsp;/</li>                        <li><span>Contact</span></li>                    </ul>                    <h3 class="title">Contact</h3>                    <!--<p class="head_title">                        <br />                    </p>-->                    <p>For further questions, please contact us by filling in this form: <br/><!--                                        <span class="orange">ask.helpdesk@syailendra.asia.</span><br/>                             Our Help Center can help you get the answers to your questions fast and easy.--></p>                    <form method="post" action="" class="contact_form">                        <fieldset class="field1">                            <p class="ftitle">Personal Information</p>                            <p><input type="text" value="Name" onfocus="if(value=='Name')value='';" onblur="if(value=='')value='Name';"/></p>                            <p><input type="text" value="Email address" onfocus="if(value=='Email address')value='';" onblur="if(value=='')value='Email address';"/></p>                            <p><input type="text" value="Phone number" onfocus="if(value=='Phone number')value='';" onblur="if(value=='')value='Phone number';"/></p>                        </fieldset>                        <fieldset class="field2">                            <p class="ftitle">Message</p>                            <p><input type="text" value="Subject" onfocus="if(value=='Subject')value='';" onblur="if(value=='')value='Subject';"/></p>                            <p><textarea onfocus="if(value=='Your Message')value='';" onblur="if(value=='')value='Your Message';">Your Message</textarea></p>                            <p><input type="submit" value="Send Message" class="btn_submit"/></p>						                        </fieldset>                    </form>                    </div>                <div id="right_content">                    <div class="map">                    <div id="map-canvas"></div>                    </div>                    <?php include('inc_contact_box.php'); ?>                </div>            </div>	</section><!-- end middle -->  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>  <script>// This example adds a marker to indicate the position// of Bondi Beach in Sydney, Australiafunction initialize() {var mapOptions = {  zoom: 16,  center: new google.maps.LatLng(-6.224691, 106.809662),  disableDefaultUI: true}var map = new google.maps.Map(document.getElementById('map-canvas'),                              mapOptions);var image = 'images/material/marker.png';var myLatLng = new google.maps.LatLng(-6.224057, 106.808095);var beachMarker = new google.maps.Marker({    position: myLatLng,    map: map,    icon: image});}google.maps.event.addDomListener(window, 'load', initialize);  </script><?php include('inc_footer.php');?>