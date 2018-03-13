 <?php
$url_path = url('/');
?>

<div class="type-2017">
    <div class="sidebar">
        <!--WIDGET SEARCH-->
        <div class="widget widget-search-course">
            <form action="#">
                <i class="fa fa-search"></i>
                <h2>Search Course</h2>
                <div class="styled-select">
                    <select class="input-block-level">
                        <option>Here is the first option</option>
                        <option>The second option</option>
                    </select>
                </div>
                <p><input class="input-block-level" type="text" placeholder="Search"/></p>
                <p><input class="btn-style" type="button" name="searchButton" value="Search"/></p>
            </form>
        </div>
        <!--/END WIDGET SEARCH-->

        <!--WIDGET POST-->
        <div class="widget widget-popular-post">
            <h2>Popular Posts</h2>
            <ul>
                <li>
                    <a href="#"><h4>Donec neque ipsum, sodales nec trist</h4></a>
                    <div class="thumb">
                        <a href="#"><img src="<?php echo $url_path ?>/images/papular-post.jpg" alt=""/></a>
                    </div>
                    <div class="text">
                        <p class="date">19 May 2012 <span><a href="#">Admin</a></span></p>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit.</p>
                    </div>
                </li>

                <li>
                    <a href="#"><h4>Donec neque ipsum, sodales nec trist</h4></a>
                    <div class="thumb">
                        <a href="#"><img src="<?php echo $url_path ?>/images/papular-post2.jpg" alt=""/></a>
                    </div>
                    <div class="text">
                        <p class="date">19 May 2012 <span><a href="#">Admin</a></span></p>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit.</p>
                    </div>
                </li>

                <li>
                    <a href="#"><h4>Donec neque ipsum, sodales nec trist</h4></a>
                    <div class="thumb">
                        <a href="#"><img src="<?php echo $url_path ?>/images/papular-post3.jpg" alt=""/></a>
                    </div>
                    <div class="text">
                        <p class="date">19 May 2012 <span><a href="#">Admin</a></span></p>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit.</p>
                    </div>
                </li>

                <li>
                    <a href="#"><h4>Donec neque ipsum, sodales nec trist</h4></a>
                    <div class="thumb">
                        <a href="#"><img src="<?php echo $url_path ?>/images/papular-post4.jpg" alt=""/></a>
                    </div>
                    <div class="text">
                        <p class="date">19 May 2012 <span><a href="#">Admin</a></span></p>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit.</p>
                    </div>
                </li>

            </ul>
        </div>
        <!--/END WIDGET POST-->

        <!--WIDGET FLICKS-->
        <div class="widget widget-flickr">
            <h2>Flickr Photos</h2>
             <div class="row">
            <!--LIST-->
                <!--ITEM-->
                <div class='col-md-4 col-sm-4 col-xs-4 item-2017'>
                    <a href="#">
                        <img src="<?php echo $url_path ?>/images/flickr.jpg" alt=""/>
                    </a>
                </div>
                <!--/ITEM-->

                <div class='col-md-4 col-sm-4 col-xs-4 item-2017'>
                    <a href="#">
                        <img src="<?php echo $url_path ?>/images/flickr2.jpg" alt=""/>
                    </a>
                </div>

                <div class='col-md-4 col-sm-4 col-xs-4 item-2017'>
                    <a href="#">
                        <img src="<?php echo $url_path ?>/images/flickr3.jpg" alt=""/>
                    </a>
                </div>

                <div class='col-md-4 col-sm-4 col-xs-4 item-2017'>
                    <a href="#">
                        <img src="<?php echo $url_path ?>/images/flickr.jpg" alt=""/>
                    </a>
                </div>
                <div class='col-md-4 col-sm-4 col-xs-4 item-2017'>
                    <a href="#">
                        <img src="<?php echo $url_path ?>/images/flickr2.jpg" alt=""/>
                    </a>
                </div>
                <div class='col-md-4 col-sm-4 col-xs-4 item-2017'>
                    <a href="#">
                        <img src="<?php echo $url_path ?>/images/flickr3.jpg" alt=""/>
                    </a>
                </div>

                <!--/LIST-->
             </div>
        </div>
        <!--/END WIDGET FLICKS-->

    </div>
    <div class="clearfix"></div>
</div>


