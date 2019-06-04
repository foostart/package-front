<div class="type-2034">

    <header>
        <!--MENU-->
        <div class="navbar navbar-default navbar-fixed-top" id="menu-home">
            <div class="top-strip" id="menu-strip">
                <div class="container">

                    <!--WIKI LIST-->
                    <ul class="language">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Wiki
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">WikiCase</a></li>
                                <li><a href="#">WikiTest</a></li>
                                <li><a href="#">WikiDocs</a></li>
                                <li><a href="#">WikiCode</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!--ACCOUNT-->
                    <ul class="account">
                        @if(!empty($user))
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Your account
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{!! URL::route('dashboard.default') !!}">Administrator</a></li>
                                    <li><a href="{!! URL::route('users.selfprofile.edit') !!}">Update profile</a></li>
                                    <li><a href="{!! URL::route('user.logout') !!}">Logout</a></li>
                                </ul>
                            </li>
                        @else
                            <li><a href="{!! URL::route('user.login') !!}">Login</a></li>
                        @endif

                    </ul>
                    <!--/END ACCOUNT-->

                </div>

            </div>
            <div class="container width-2034">
                <!--LOGO-->
                <div class="logo" id="demo">
                    <a href="{!! URL::route('home') !!}">
                        <img src="{!! url('/') !!}/images/logo.png"
                             onmouseover="this.src='<?php echo url('/') ?>/images/logo-hover.png'"
                             onmouseout="this.src='<?php echo url('/') ?>/images/logo.png'"
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
                            <div class="search-box" style="min-width: 759px;">
                                <form action="{!! URL::route('search') !!}">
                                    <div class="form-search">
                                        <input name="keyword" type="text" placeholder="search wikicase item" class="input-block-level"/>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!--/END SEARCH-->

                        <!--VERSION-->
                        <li>
                            <a href="#">
                                <i class="fa fa-spinner" aria-hidden="true"></i><span>V2.0</span>
                            </a>
                        </li>
                        <!--/VERSION-->
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

                        <!--MENU ITEM-->
                        @foreach($main_menu as $item)
                            @if($item->childs)
                                <li class="dropdown show-hover">
                                    <a href="{!! url('/'.$item->category_slug) !!}" class="dropdown-toggle" data-toggle="dropdown">
                                        {!! $item->category_name !!}
                                    </a>
                                    <ul class="dropdown-menu">
                                    @foreach($item->childs as $_item)

                                            <li>
                                                <a href="{!! URL::route('rules', [$_item->category_slug, $_item->category_url]) !!}">
                                                    {!! $_item->category_name !!}
                                                </a>
                                            </li>
                                    @endforeach
                                    </ul>
                                </li>
                            @else
                                <li><a href="{!! url('/'.$item->category_slug) !!}">{!! $item->category_name !!}</a></li>
                            @endif
                        @endforeach
                        <!--/MENU ITEM-->

                    </ul>
                </div><!-- /.navbar-collapse -->

            </div>
        </div>
        <div class="clearfix"></div>
        <div class="padding-header"></div>
        <!--/END MENU-->
    </header>

</div>