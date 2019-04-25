<div id="tab1" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Mã số tiếp dân<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                    {!!Form::text('mavuviectd',null, array('id' => 'mavuviectd','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Cán bộ tiếp dân<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                    {!!Form::text('canbotd',null, array('id' => 'canbotd','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Cán bộ tiếp dân thứ 2 (nếu có)<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                    {!!Form::text('canbotd1',null, array('id' => 'canbotd1','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Cán bộ tiếp dân thứ 3 (nếu có)<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                    {!!Form::text('canbotd2',null, array('id' => 'canbotd2','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày tháng tiếp dân<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                    {!!Form::text('ngaythangtd','01/01/'.intval(date('Y')), array('id' => 'ngaythangtd','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Phân loại tiếp dân</label>
                    <div class="col-sm-8 controls">
                    {!! Form::select(
                    'phanloaitd',
                    array(
                    ''=>'',
                    'Tiếp thường xuyên' => 'Tiếp thường xuyên',
                    'Tiếp định kỳ và đột xuất của lanhc đạo' => 'Tiếp định kỳ và đột xuất của lanhc đạo',
                    ),null,
                    array('id' => 'phanloaitd', 'class' => 'form-control'))
                    !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Phân loạivụ việc</label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'phanloaivc',
                        array(
                        ''=>'',
                        'Cũ' => 'Cũ',
                        'Mới phát sinh' => 'Mới phát sinh',
                        ),null,
                        array('id' => 'phanloaivc', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(function($){
        $('select[name="mahuyen"]').change(function(){

            if($(this).val() != 'all'){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: '/getXas',
                    type: 'GET',
                    data: {
                        _token: CSRF_TOKEN,
                        mahuyen: $(this).val()
                    },
                    dataType: 'JSON',
                    success: function (data) {
                        if(data.status == 'success')
                            $('select[name="maxa"]').replaceWith(data.message);
                        else
                            $('select[name="maxa"]').val();

                    }
                });
            } else {
                $('select[name="maxa"]').val('all');
            }
        });
    });
</script>
<script>
    $(document).ready(function(){
        $(":input").inputmask();
    });
</script>