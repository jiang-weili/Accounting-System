<div class="col-sm-12">
    <div class="box box-solid"> <!--Sale info box start-->
        <div class="box-header">
            <h3 class="box-title">@lang('business.dashboard')</h3>
        </div>
        <div class="box-body">
             <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        {!! Form::label('stock_expiry_alert_days', __('business.view_stock_expiry_alert_for') . ':*') !!}
                        <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-calendar-times-o"></i>
                        </span>
                        {!! Form::number('stock_expiry_alert_days', $business->stock_expiry_alert_days, ['class' => 'form-control','required']); !!}
                        <span class="input-group-addon">
                            @lang('business.days')
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>