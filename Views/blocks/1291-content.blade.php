<div class="type-129">

    <div class='row'>
        <!--REQUIRED LOGIN-->
        @if(!$user)

            <div class="alert-message alert-message-danger">
                <h4>
                    Required login
                </h4>
                <p>
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>&nbsp;You must
                    <a href="{!! URL::route('user.login') !!}"><b>login</b></a>
                    to check your rules
                </p>
            </div>

        @elseif(!$current_task)

            <div class="alert-message alert-message-danger">
                <h4>
                    Required created task
                </h4>
                <p>
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>&nbsp;You must
                    <a href="{!! URL::route('checklists.list') !!}"><b>create</b></a>
                    assigned task to check your rules
                </p>
            </div>
        @endif
    </div>
    <div class="row">
        @if($user && $current_task)

            <!--RULE STATUS-->
            @if(!empty($rule))
                <div class="alert-message alert-message-default">
                        <div class="sub-article-container shaded">

                            @if($checked_rule_ids && in_array($rule->post_id, $checked_rule_ids))
                                <div class="owner-info">
                                    <div class="owner-info-image" style="float: left;">
                                        <i class="fa fa-share" aria-hidden="true"></i>
                                    </div>
                                    <p class="owner-info-text">&nbsp;
                                        You checked this rule.
                                    </p>
                                </div>
                            @else
                                <div class="owner-info">
                                    <div class="owner-info-image" style="float: left;">
                                        <i class="fa fa-share" aria-hidden="true"></i>
                                    </div>
                                    <p class="owner-info-text">&nbsp;
                                        You haven't checked this rule
                                    </p>
                                </div>
                                <div class="article-survey-container">
                                    <div class="as">
                                        <div class="title">
                                            Was this rule related to your task?
                                        </div>
                                        @if($current_task)
                                        <a href="{!! URL::route('taskrule.checked', [
                                           'post_id' => $rule->post_id,
                                           'task_id' => $current_task->task_id,
                                           'callback' => Request::url(),
                                           ]) !!}">
                                            <button class="as-button" data-value="5" type="button">

                                                Yes
                                            </button>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            @endif

                        </div>
                </div>
            @endif

            <!--CHECKED RULES-->
            <div class="alert-message alert-message-notice">

                <div class="task-info">
                    <h4>
                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                        Task info
                    </h4>
                    @if($current_task)
                    Task name:  {!! $current_task->task_name !!}<br>
                    Redmine ID: <a href='{!! $current_task->redmine_url !!}' target="_blank">{!! $current_task->redmine_id !!}</a><br>
                    @else
                    <p class="info-null">
                        You haven't created task yet
                    </p>
                    @endif
                </div>
                <div class="checked-rules">
                    <h4>
                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                        Your checked rules
                    </h4>

                    @if($checked_rules && !$checked_rules->isEmpty())

                    <p>
                        <a href="{!! Url::route('checklists.view', ['id' => $current_task->task_id ]) !!}" target="_blank">
                        Number: {!! count($checked_rules) !!}<br>
                        </a>
                    </p>
                    <ul>

                        @foreach($checked_rules as $item)
                        <li>
                            <span>ID.{!! $item->post_id !!}</span>
                            <a href="{!! URL::route('rule', [$item->post_slug, $item->post_id]) !!}">
                                {!! $item->post_name !!}
                            </a>
                        </li>
                        @endforeach

                    </ul>

                    @else
                    <p>You haven't checked any rules</p>
                    @endif
                </div>

            </div>

        @endif
    </div>
</div>