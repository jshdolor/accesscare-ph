    <!-- map section -->
    <div class="api-map" id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 map" id="map"></div>
            </div>
        </div>
    </div><!-- end of map section -->

    <!-- contact section starts here -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="contact-caption clearfix">
                    <div class="contact-heading text-center">
                        <h2>contact us</h2>
                    </div>
                    <div class="col-md-5 contact-info text-left">
                        <h3>contact information</h3>
                        <div class="info-detail">
                            <?php foreach($infos as $info): ?>
                            <ul>
                                <li>
                                    <i class="fa fa-<?=$info['icon']?>"></i>
                                    <?=$info['content']?>
                                </li>
                            </ul>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-1 contact-form">
                        <h3>leave us a message</h3>
                            <?php 
                            if(isset($erriors)):
                                foreach($errors as $error): 
                                    echo $error;
                                endforeach; 
                            endif;
                            ?>

                        <form action="<?=$form_url?>" class="form"  enctype="multipart/form-data" method="post">
                            <input class="name" name="name" type="text" placeholder="Name">
                            <input class="email" name="email" type="email" placeholder="Email">
                            <input class="phone" name="phone" type="text" placeholder="Phone No:">
                            <input type="file" name="file" >
                            <textarea class="message" name="message" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                            <input class="submit-btn" type="submit" name="btn" value="SUBMIT">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end of contact section -->