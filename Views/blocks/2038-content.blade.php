<?php $url_path = url('/') ?>

<div class="type-2038">

    <div class="swiper-container" id="swiper-container-2038">
        <!--SLIDER-->
        <div class="swiper-wrapper">
            <div class="swiper-slide">

                    <img src="<?php echo $url_path ?>/images/banner2.jpg" class="img-responsive" alt=""/>

            </div>
            <div class="swiper-slide">

                    <img src="<?php echo $url_path ?>/images/banner4.jpg" class="img-responsive" alt=""/>

            </div>
        </div>
        <!--/END SLIDER-->

        <!--PAGINATION-->
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
            <span class="swiper-pagination-bullet swiper-pagination-bullet-active">-</span>
            <span class="swiper-pagination-bullet">-</span>
            <span class="swiper-pagination-bullet">-</span>
            <span class="swiper-pagination-bullet">-</span>
        </div>
        <!--/END PAGINATION-->

        <!--NEWS LETTERS-->

        <div class="newsletters">
            <div class="container">
                <h1>WikiCase</h1>
                <h4>Collection of coding rules</h4>
                <form class="search-form" action="{!! URL::route('search') !!}">
                    <div class="subscribe">
                        <input name="keyword" type="text" placeholder="search wikicase item" class="input-block-level"/>
                        <button>Search</button>
                    </div>
                </form>
            </div>
            <!--/END NEWS LETTERS-->
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
