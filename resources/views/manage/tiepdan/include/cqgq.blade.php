<div id="tab3" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Cơ quan giải quyết<span class="require">*</span></label>
                    <div class="col-sm-10">
                        {!!Form::text('coquandgq',null, array('id' => 'coquandgq','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Hướng xử lý<span class="require">*</span></label>
                    <div class="col-sm-10">
                        {!!Form::text('huongxl',null, array('id' => 'huongxl','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Kết quả tiếp dân</label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'kqtd',
                        array(
                        ''=>'',
                        'Rút đơn' => 'Rút đơn',
                        'Đã giải thích cho công dân hiểu QĐ của PL' => 'Mới phát sinh',
                        'Chưa có quyết định giải quyết' => 'Chưa có quyết định giải quyết',
                        'Đã chuyển đơn thử đến cơ quan chức năng' => ' Đã chuyển đơn thử đến cơ quan chức năng',
                        'Chưa giải quyết' => 'Chưa giải quyết',
                        'Đã có quyết định giải quyết' => 'Đã có quyết định giải quyết',
                        'Đã có bản án của tòa' => 'Đã có bản án của tòa',
                        ),null,
                        array('id' => 'kqtd', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Theo dõi giải quyết</label>
                        <div class="col-sm-10">
                            {!!Form::text('tdgq',null, array('id' => 'tdgq','class' => 'form-control required'))!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
