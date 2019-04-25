<div id="tab2" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Họ tên công dân<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('hotencd',null, array('id' => 'hotencd','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày sinh<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('ngaysinh','01/01/'.intval(date('Y')), array('id' => 'ngaysinh','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">CMND<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('cmnd',null, array('id' => 'cmnd','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày cấp CMND<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('ngaycapcmnd','01/01/'.intval(date('Y')), array('id' => 'ngaycapcmnd','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi cấp CMND<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('noicapcmnd',null, array('id' => 'noicapcmnd','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Đia chỉ<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('diachicd',null, array('id' => 'diachicd','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Phân loại nội dung</label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'plnoidung',
                        array(
                        ''=>'',
                        'Đơn khiếu nại' => 'Đơn khiếu nại',
                        'Đơn tố cáo' => 'Đơn tố cáo',
                        'Đơn kiến nghị' =>'Đơn kiến nghị',
                        'Đơn phản ánh'=>'Đơn phản ánh',
                        'Đơn khác'=>'Đơn khác',
                        ),null,
                        array('id' => 'plnoidung', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Phân loại nội dung chi tiết</label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'plchitiet',
                        array(
                        ''=>'',
                        'Cũ' => 'Cũ',
                        'Mới phát sinh' => 'Mới phát sinh',
                        ),null,
                        array('id' => 'plchitiet', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nội dung trình bày</label>
                        <div class="col-sm-10">
                            {!!Form::text('noidungtbcd',null, array('id' => 'noidungtbcd','class' => 'form-control required'))!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
