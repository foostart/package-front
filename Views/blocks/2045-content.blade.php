 <?php
$url_path = url('/');
?>


<div class="type-2045">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">

                <div class="img-product demo">
                    <!--SLIDESHOW VERTICAL-->
                    <div class="swiper-container" id="swiper-vertical">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-img="<?php echo $url_path ?>/images/detail-1.jpg">
                                <img class="hover" src="<?php echo $url_path ?>/images/detail-1.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide"
                                 data-img="<?php echo $url_path ?>/images/course-detail1.png">
                                <img class="hover" src="<?php echo $url_path ?>/images/course-detail1.png"
                                     alt=""/>
                            </div>
                            <div class="swiper-slide"
                                 data-img="<?php echo $url_path ?>/images/course-detail2.png">
                                <img class="hover" src="<?php echo $url_path ?>/images/course-detail2.png"
                                     alt=""/>
                            </div>
                            <div class="swiper-slide"
                                 data-img="<?php echo $url_path ?>/images/course-detail3.png">
                                <img class="hover" src="<?php echo $url_path ?>/images/course-detail3.png"
                                     alt=""/>
                            </div>
                            <div class="swiper-slide" data-img="<?php echo $url_path ?>/images/detail-1.jpg">
                                <img class="hover" src="<?php echo $url_path ?>/images/detail-1.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide"
                                 data-img="<?php echo $url_path ?>/images/course-detail1.png">
                                <img class="hover" src="<?php echo $url_path ?>/images/course-detail1.png"
                                     alt=""/>
                            </div>
                            <div class="swiper-slide"
                                 data-img="<?php echo $url_path ?>/images/course-detail2.png">
                                <img class="hover" src="<?php echo $url_path ?>/images/course-detail2.png"
                                     alt=""/>
                            </div>
                            <div class="swiper-slide"
                                 data-img="<?php echo $url_path ?>/images/course-detail3.png">
                                <img class="hover" src="<?php echo $url_path ?>/images/course-detail3.png"
                                     alt=""/>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-button-next-1"><i class="fa fa-angle-down"></i></div>
                        <div class="swiper-button-prev-1"><i class="fa fa-angle-up"></i></div>
                    </div>
                    <!--END SLIDESHOW VERTICAL-->

                    <!--IMAGE-->
                    <div class="img_page" id="myBtn">
                        <img id="main_img" src="<?php echo $url_path ?>/images/detail-1.jpg" alt="" class="xzoom"
                             xoriginal="<?php echo $url_path ?>/images/detail-1.jpg"/>
                    </div>

                    <!--END IMAGE-->


                    <!--SLIDESHOW HORIZONTAL-->
                    <div class="swiper-container" id="swiper-horizontal">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide active"
                                 data-img="<?php echo $url_path ?>/images/detail-1.jpg">
                                <img class="hover" src="<?php echo $url_path ?>/images/detail-1.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide"
                                 data-img="<?php echo $url_path ?>/images/course-detail1.png">
                                <img class="hover" src="<?php echo $url_path ?>/images/course-detail1.png"
                                     alt=""/>
                            </div>
                            <div class="swiper-slide"
                                 data-img="<?php echo $url_path ?>/images/course-detail2.png">
                                <img class="hover" src="<?php echo $url_path ?>/images/course-detail2.png"
                                     alt=""/>
                            </div>
                            <div class="swiper-slide"
                                 data-img="<?php echo $url_path ?>/images/course-detail3.png">
                                <img class="hover" src="<?php echo $url_path ?>/images/course-detail3.png"
                                     alt=""/>
                            </div>
                            <div class="swiper-slide active"
                                 data-img="<?php echo $url_path ?>/images/detail-1.jpg">
                                <img class="hover" src="<?php echo $url_path ?>/images/detail-1.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide"
                                 data-img="<?php echo $url_path ?>/images/course-detail1.png">
                                <img class="hover" src="<?php echo $url_path ?>/images/course-detail1.png"
                                     alt=""/>
                            </div>
                            <div class="swiper-slide"
                                 data-img="<?php echo $url_path ?>/images/course-detail2.png">
                                <img class="hover" src="<?php echo $url_path ?>/images/course-detail2.png"
                                     alt=""/>
                            </div>
                            <div class="swiper-slide"
                                 data-img="<?php echo $url_path ?>/images/course-detail3.png">
                                <img class="hover" src="<?php echo $url_path ?>/images/course-detail3.png"
                                     alt=""/>
                            </div>
                        </div>
                        <div class="swiper-button-next-3"><i class="fa fa-chevron-right"></i></div>
                        <div class="swiper-button-prev-3"><i class="fa fa-chevron-left"></i></div>

                    </div>
                    <!--END SLIDESHOW HORIZONTAL-->
                    <div class="clearfix"></div>
                </div>


                <!--CLICK ZOOM-->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                                <div id="dialog-form">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--END CLICK ZOOM-->
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="text">
                    <h2>Creating Responsive Web Design</h2>
                    <h5>Learn how to optimize your webpages for different screen sizes and platforms.</h5>
                    <div class="reviews">
                        <a href="#">109 Reviews</a>

                        <div class="stars-existing starrr" data-rating='2'></div>
                    </div>
                    <p>orem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor
                        imperdiet
                        deterruisset, doctus volumus explicari qui ex, appareat similique an usu. Vel an hinc putant
                        fierent,
                        saperet legimus offendit sed ei doctus volumus explicari qui ex, appareat similique an usu. .
                        Dolor
                        euripidis cum eu, ea per lucilius periculis corrumpit, ut euismod omittam ancillae his.</p>
                    <ul>
                        <li><a href="#">HTML5, CSS3, and Media Queries</a></li>
                        <li><a href="#">HTML5Shiv for Internet Explorer</a></li>
                        <li><a href="#">Photoshop Image Optimization and Slicing</a></li>
                        <li><a href="#">Design Adaptations for Various Screens</a></li>
                    </ul>
                </div>
                <div class="course-category">
                    <a href="#">Category: Design / Web Design </a>
                    <h3>26800 students enrolled </h3>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>


    <script type="">

    </script>
</div>
