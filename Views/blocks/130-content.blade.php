<?php $url_path = url('/') ?>
<div class="type-129">

        <div class="row">
            <div class="poetry">
            </div>

            <div class="sensei-message info">

                <i class="fa fa-exclamation-circle" aria-hidden="true"></i>You must
                <a href="{!! URL::route('user.login') !!}">login</a>
                to create your suggestion rules

            </div>

            <div class="media">

                @foreach($checklist as $item)
                <div class="circ-wrapper course_detail pull-left">
                    <h3>ID.{!! $item->post_id !!}</h3>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">
                        <a href="{!! url('/').'/item/'.$item->post_slug.'-'.$item->post_id !!}">Quo ea feugiat saperet vulputate</a>
                    </h4>
                    <p>
                        {!! $item->post_overview !!}
                    </p>
                    <ul class="data-lessons">
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> {!! $item->created_at !!}</li>
                        <li><i class="fa fa-bar-chart" aria-hidden="true"></i></i> 6/10</li>
                    </ul>
                </div>
                <div class="clear-both"></div>
                @endforeach
                @if(!empty($item))
                    <p>The checklist has not created any items yet.</p>
                @endif

            </div>
        </div>
</div>