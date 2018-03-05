<!-- slider section -->
    <section class="slider" id="home">
        <div class="container-fluid">
            <div class="row">
                <div id="slides" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="header-backup"></div>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php foreach ($slides as $key => $slide) : ?>
                            <div class="item <?=$key==0?'active':''?> ">
                                <img src="<?=$slide['img']?>" alt="">
                                <div class="carousel-caption">
                                    <h1><?=$slide['title']?></h1>
                                    <p><?=$slide['subtitle']?></p>
                                    <button data-link="<?=$slide['btn_link']?>" class="slide_btn<?=$key?>" ><?=$slide['btn_msg']?></button>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#slides" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#slides" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section><!-- end of slider section -->