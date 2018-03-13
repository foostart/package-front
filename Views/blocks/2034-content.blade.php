 <?php
$url_path = url('/');
?>

<div class="type-2034">

    <header>
        <!--MENU-->
        <div class="navbar navbar-default navbar-fixed-top" id="menu-home">
            <div class="top-strip" id="menu-strip">
                <div class="container">
                    <ul class="language">
                        <!--LANGUAGE-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Language
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Spenish</a></li>
                                <li><a href="#">Turkish</a></li>
                                <li><a href="#">Arabic</a></li>
                            </ul>
                        </li>
                        <!--/END LANGUAGE-->

                        <!--CURRENCY-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Currency
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Dollar</a></li>
                                <li><a href="#">Euro</a></li>
                                <li><a href="#">Dirham</a></li>
                                <li><a href="#">Rupees</a></li>
                                <li><a href="#">Dinar</a></li>
                            </ul>
                        </li>
                        <!--/END CURRENCY-->
                    </ul>


                    <!--ACCOUNT-->
                    <ul class="account">
                        <li><a href="#">Subscribe</a></li>
                        <li><a href="#">Sign Out</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                My Account
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Account Setting</a></li>
                                <li><a href="#">Privacy Setting</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!--/END ACCOUNT-->

                </div>

            </div>
            <div class="container width-2034">
                <!--LOGO-->
                <div class="logo" id="demo">
                    <a href="#">
                        <img src="<?php echo $url_path ?>/images/logo.png"
                             onmouseover="this.src='<?php echo $url_path ?>/images/logo-hover.png'"
                             onmouseout="this.src='<?php echo $url_path ?>/images/logo.png'"
                             alt=""/>
                    </a>
                </div>
                <!--/END LOGO-->

                <!--CART-->
                <div class="cart">
                    <ul>
                        <!--SEARCH-->
                        <li>
                            <div class="search-bar"><i class="fa fa-search"></i></div>
                            <div class="search-box">
                                <form action="#">
                                    <div class="form-search">
                                        <input type="text" class="input-block-level"/>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!--/END SEARCH-->

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-briefcase"></i><span>&euro;0</span>
                            </a>
                            <div class="dropdown-menu">
                                <p>0 items in shopping bag</p>
                                <p class="color">Unfortunately, your shopping bag is emtpy.</p>
                                <a href="#" class="return">Return to the Shop</a>
                            </div>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-star"></i><span>3</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--/CART-->

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed btn-menu" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <!--MENU DROP DOWN-->
                        <li class="dropdown show-hover">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Home Page Default</a></li>
                                <li><a href="#">Home Page 1</a></li>
                                <li><a href="#">Home Page 2</a></li>
                                <li><a href="#">Home Page 3</a></li>
                                <li><a href="#">Home Page 4</a></li>
                                <li><a href="#">Home Page 5</a></li>
                            </ul>
                        </li>
                        <!--/END MENU DROP DOWN-->

                        <!--MENU DROP DOWN-->
                        <li class="dropdown show-hover">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Blog Detail</a></li>
                            </ul>
                        </li>
                        <!--/END MENU DROP DOWN-->

                        <li><a href="#">Services</a></li>

                        <!--MENU DROP DOWN-->
                        <li class="dropdown show-hover">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Event</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Event Detail</a></li>
                            </ul>
                        </li>
                        <!--/END MENU DROP DOWN-->

                        <!--MENU DROP DOWN-->
                        <li class="dropdown show-hover">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Course Detail</a></li>
                            </ul>
                        </li>
                        <!--/END MENU DROP DOWN-->

                        <!--MENU DROP DOWN-->
                        <li class="dropdown show-hover">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Error 404</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Our Lessons</a></li>
                                <li><a href="#">Search Result</a></li>
                                <li><a href="#">Sign In</a></li>
                                <li><a href="#">Student Login</a></li>
                                <li><a href="#">Student Profile</a></li>
                                <li><a href="#">Teacher Profile</a></li>
                                <li><a href="#">Our Team</a></li>
                            </ul>
                        </li>
                        <!--/END MENU DROP DOWN-->

                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

            </div>
        </div>
        <div class="clearfix"></div>
        <div class="padding-header"></div>
        <!--/END MENU-->
    </header>

</div>






