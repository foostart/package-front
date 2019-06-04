<?php $url_path = url('/') ?>
<div class="type-60">
    <div class="content-background"></div>
    <div class="hcfe">
        <header>
            <div>

                <div class="appbar-container">
                    <div class="appbar">
                        <span itemscope="itemscope" itemtype="#">
                            <a class="appbar-title" href="/docs" itemprop="url">
                                <span itemprop="title">ID.{!! $rule->post_id !!}</span>
                            </a>
                        </span>
                        <div class="appbar-links">
                            <span class="appbar-icon appbar-link-container">
                                <a class="product-icon" href="{!! Url::route('checklists.download') !!}">
                                    <span itemprop="title">Download</span>
                                    <svg viewBox="0 0 48 48">
                                    <path d="M20.17 31.17L23 34l10-10-10-10-2.83 2.83L25.34 22H6v4h19.34l-5.17 5.17zM38 6H10c-2.21 0-4 1.79-4 4v8h4v-8h28v28H10v-8H6v8c0 2.21 1.79 4 4 4h28c2.21 0 4-1.79 4-4V10c0-2.21-1.79-4-4-4z"></path>
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="primary-container">

            <div class="container page-width-container">

                <div class='row'>
                    <div class='col-md-9'>

                        <article class="page">
                            <section class="article-container">

                                <div class="cc">

                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#menu1">Việt Nam</a></li>
                                        <li><a data-toggle="tab" href="#menu2">English</a></li>
                                        <li><a data-toggle="tab" href="#menu3">日本語</a></li>
                                    </ul>

                                    <div class="tab-content">

                                        <!--MENU1-->
                                        <div id="menu1" class="tab-pane fade in active tag-in">
                                            <h2>{!! $rule->post_name !!}</h2>
                                            <p>
                                                {!! $rule->post_overview !!}
                                            </p>
                                            {!! $rule->post_description !!}
                                        </div>

                                        <!--MENU2-->
                                        <div id="menu2" class="tab-pane fade tag-in">
                                            <h2>Create a formula</h2>

                                            <ol>
                                                <li>Lorem </li>
                                            </ol>
                                        </div>

                                        <!--MENU3-->
                                        <div id="menu3" class="tab-pane fade tag-in">
                                            <h2>Create a formula</h2>
                                            <ol>
                                                <li>Lorem </li>
                                            </ol>
                                        </div>

                                    </div>

                                </div>
                            </section>
                        </article>

                    </div>
                    <div class='col-md-3'>
                        <!--NAV-->
                        <div>
                            <div class="primary-nav">

                                <nav>
                                    @include('package-front::blocks.1291-content')
                                </nav>

                            </div>
                        </div>
                        <!--/NAV-->

                    </div>
                </div>

            </div>
        </section>
    </div>
</div>