<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

         <!-- Contact Section -->

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-secondary">
                        <?php display_message(); ?>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" method="post" >

                        <?php send_message(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input name="subject" type="text" class="form-control" placeholder="Your Subject" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" style="height: 131px;" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button name="submit" type="submit" class="btn btn-xl btn-primary">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>

    </div>
    <!-- /.container -->

        <div class="container">

            <div class="map-class">
                <div id="map"></div>
                </div>
             </div>
                    


                    <script>

                      function initMap() {
                        var myLatLng = {lat: 24.8971999, lng: 91.8654039};

                        var map = new google.maps.Map(document.getElementById('map'), {
                          zoom: 17,
                          center: myLatLng
                        });

                        var marker = new google.maps.Marker({
                          position: myLatLng,
                          map: map,
                          title: 'MU eStall!'
                        });
                      }
                    </script>
                    <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCzckM97Se8GEed7ZmcQhl6D9s8Dr00_0&callback=initMap">
                    </script>

<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>