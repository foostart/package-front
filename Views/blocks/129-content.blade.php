<div class="type-129">

        <div class="row rules">

            <!--CATEGORY-->
            <div class="poetry">
                @if(!empty($category))
                    {!! $category->category_icon !!}
                    {!! $category->category_name !!}
                @endif
            </div>

            <!--SEARCH-->
            <form class="search-form" action="{!! URL::route('search') !!}">
                <input name="keyword" type="text" placeholder="search wikicase item" class="form-control" value="{!! $request->get('keyword') !!}"/>
            </form>

            <!--INFO-->
            <div class="alert-message alert-message-info">
                <h4>
                   Info
                </h4>
                <p>
                    <ul>
                        <li>Number of rules: {!! empty($rules)?0:$rules->total() !!}</li>
                    </ul>
                </p>
            </div>

            <div class="media">
                @if($rules)
                    @foreach($rules as $item)

                        <div class="circ-wrapper course_detail pull-left">
                            <h3>ID.{!! $item->post_id !!}</h3>
                        </div>

                        <div class="media-body">
                            <h4 class="media-heading">
                                <a href="{!! URL::route('rule', [$item->post_slug, $item->post_id]) !!}">
                                    {!! $item->post_name !!}
                                </a>
                            </h4>
                            <p>
                                {!! $item->post_overview !!}
                            </p>
                            <ul class="data-lessons">
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i> {!! $item->created_at !!}</li>
                                <li><i class="fa fa-bar-chart" aria-hidden="true"></i></i> 6/10</li>

                                <!--/CHECKED STATUS-->
                                @if($checked_rule_ids && in_array($item->post_id, $checked_rule_ids))
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                @else
                                    @if($current_task)
                                    <i class="fa fa-square-o" aria-hidden="true"></i>
                                    <a href="{!! URL::route('taskrule.checked', [
                                       'post_id' => $item->post_id,
                                       'task_id' => $current_task->task_id,
                                       'callback' => Request::url(),
                                       ]) !!}">
                                        Check
                                    </a>
                                    @endif
                                @endif
                                <!--/CHECKED STATUS-->

                            </ul>
                        </div>
                        <div class="clear-both"></div>
                    @endforeach
                    {{ $rules->links() }}
                @endif

                @if(empty($item))
                    <p>The checklist has not created any items yet.</p>
                @endif

            </div>
        </div>
</div>