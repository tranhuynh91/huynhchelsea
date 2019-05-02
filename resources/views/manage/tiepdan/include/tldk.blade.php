<div id="tab4" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Thông tin đính kèm 1</label>
                    <div class="col-sm-9 controls">
                        {!!Form::text('ipt1', null, array('id' => 'ipt1','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <div class="col-sm-8 controls">
                        @if(isset($model->ipf1))
                            <a href="{{ url('file/tiepdan/'.$model->ipf1)}}" target="_blank">{{$model->ipf1}}</a>
                        @endif
                        {!!Form::file('ipf1', array('id'=>'ipf1','class' => 'passvalid'))!!}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>