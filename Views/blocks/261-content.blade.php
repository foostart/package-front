<?php $url_path = url('/') ?>
<div class="type-261">
    <div class="info">
        <div class="container">
            <div class="distance">
                <div class="row">
                    <!--INFO CATEGORIES-->
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <h2>PG Categories</h2>
                        <div class="line">
                            <span class="line-mask"></span>
                        </div>
                        <div class="text">
                            <p>List of categories</p>
                        </div>
                    </div>

                    @if($pg_categories && $pg_categories->childs)
                    @foreach($pg_categories->childs as $_item)
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="icon">
                                <div class="thumb-icon">
                                    <a href="{!! URL::route('rules', [$_item->category_slug, $_item->category_id]) !!}">
                                        {!! $_item->category_icon !!}
                                        <p>{!! $_item->category_name !!}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>