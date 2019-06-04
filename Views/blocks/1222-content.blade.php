<?php $url_path = url('/') ?>
<div class="type-1222" id='thiet-bi'>
    <div class="container clearfix case">
        <!--TITLE-->
        <div class="heading-block fancy-title  center ">
            <h4>Common<span> Checklist</span></h4>
        </div>

        <!--LIST ITEMS-->
        <div class="nobottommargin clearfix ">
            <div class="center clearfix ">
                <h5>Các rule đáng chú ý</h5>
            </div>
            <div class="row">
                <!--LIST1-->
                <div class="col-lg-6 col-md-6 col-sm-6">
                    @if($pg_rules)
                        <ul class="aboutcase">
                            @foreach($pg_rules as $_item)

                            <li>
                                <span class="checklist-id">ID.{!! $_item->post_id !!}</span>
                                 <a href="{!! Url::route('rule', [$_item->post_slug, $_item->post_id]) !!}">
                                    {!! $_item->post_name !!}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                

            </div>
            <div class="clear"></div>
        </div>
        <!--END LIST EXAMPLE-->
    </div>
</div>