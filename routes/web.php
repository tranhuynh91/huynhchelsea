<?php

Route::get('/', 'HomeController@index');
Route::get('/setting','HomeController@setting');
Route::post('/setting','HomeController@upsetting');

Route::get('register/dich_vu_luu_tru','HomeController@regdvlt');
Route::get('checkrgmasothue','HomeController@checkrgmasothue');
Route::get('checkrguser','HomeController@checkrguser');
Route::post('register/dich_vu_luu_tru','HomeController@regdvltstore');

Route::get('register/dich_vu_van_tai','HomeController@regdvvt');

Route::post('register/dich_vu_van_tai','HomeController@regdvvtstore');
Route::get('forgot_password','HomeController@forgotpassword');
Route::post('forgot_password','HomeController@forgotpasswordw');
Route::get('register/tra_lai','HomeController@regdverror');

Route::get('search_register','HomeController@searchregister');
Route::post('search_register','HomeController@checksearchregister');
Route::get('search_register/show','HomeController@show');
Route::post('search_register/show','HomeController@edit');
Route::patch('register_editdvlt/id={id}','HomeController@updatedvlt');
Route::patch('register_editdvvt/id={id}','HomeController@updatedvvt');


// <editor-fold defaultstate="collapsed" desc="--Setting--">
Route::get('cau_hinh_he_thong','GeneralConfigsController@index');
Route::get('cau_hinh_he_thong/create','GeneralConfigsController@create');
Route::post('cau_hinh_he_thong','GeneralConfigsController@store');
Route::get('cau_hinh_he_thong/{id}/edit','GeneralConfigsController@edit');
Route::patch('cau_hinh_he_thong/{id}','GeneralConfigsController@update');
Route::get('xetduyet_thaydoi_thongtindoanhnghiep/phanloai={pl}','XdTdTtDnController@index');
Route::get('xetduyet_thaydoi_thongtindoanhnghiep/{id}/show','XdTdTtDnController@show');
Route::get('xetduyet_thaydoi_thongtindoanhnghiep/{id}/duyet','XdTdTtDnController@duyet');

//Users
Route::get('login','UsersController@login');
Route::post('signin','UsersController@signin');
Route::get('/change-password','UsersController@cp');
Route::post('/change-password','UsersController@cpw');
Route::get('/user_setting','UsersController@settinguser');
Route::post('/user_setting','UsersController@settinguserw');
Route::get('/checkpass','UsersController@checkpass');
Route::get('/checkuser','UsersController@checkuser');
Route::get('/checkmasothue','UsersController@checkmasothue');
Route::get('logout','UsersController@logout');
Route::get('users/pl={pl}','UsersController@index');
Route::get('users/{id}/edit','UsersController@edit');
Route::patch('users/{id}','UsersController@update');
Route::get('users/{id}/phan-quyen','UsersController@permission');
Route::post('users/phan-quyen','UsersController@uppermission');
Route::post('users/delete','UsersController@destroy');
Route::get('users/lock/{id}/{pl}','UsersController@lockuser');
Route::get('users/unlock/{id}/{pl}','UsersController@unlockuser');

Route::get('users/register/pl={pl}','UsersController@register');
Route::get('users/register/{id}/show','UsersController@registershow');
Route::get('users/register/{id}/edit','UsersController@registeredit');
Route::patch('users/register/dvlt/{id}','UsersController@registerdvltupdate');
Route::patch('users/register/dvvt/{id}','UsersController@registerdvvtupdate');
Route::post('register/createdvlt','UsersController@registerdvlt');
Route::post('register/createdvvt','UsersController@registerdvvt');
Route::post('users/register/tralai','UsersController@tralaidktk');

Route::post('register/delete','UsersController@registerdelete');
Route::get('users/print/pl={pl}','UsersController@prints');
//EndUsers

//DS Đơn vị quản lý
Route::resource('danh_muc_don_vi_quan_ly','DmDvQlController');
Route::get('/checkmaqhns','DmDvQlController@checkmaqhns');
Route::get('checktaikhoan','DmDvQlController@checktaikhoan');
Route::get('/checkuser','DmDvQlController@checkmaqhns');
Route::post('danh_muc_don_vi_quan_ly/delete','DmDvQlController@delete');
//End DS đơn vị quản lý
// </editor-fold>//End Setting

// <editor-fold defaultstate="collapsed" desc="--Quản lý--">

    //Dịch vụ luu trú
//Thông tin doanh nghiệp
Route::get('ttdn_dich_vu_luu_tru','DnDvLtController@ttdn');
Route::get('ttdn_dich_vu_luu_tru/{id}/edit','DnDvLtController@ttdnedit');
Route::patch('ttdn_dich_vu_luu_tru/{id}','DnDvLtController@ttdnupdate');
//End Thông tin doanh nghiệp
//Thông tin CSKD
Route::get('ttcskd_dich_vu_luu_tru','CsKdDvLtController@index');
Route::get('ttcskd_dich_vu_luu_tru/create','CsKdDvLtController@create');
    /*Form quản lý*/
Route::get('ttcskd_dich_vu_luu_tru/masothue={masothue}','CsKdDvLtController@showcskd');
Route::get('ttcskd_dich_vu_luu_tru/masothue={masothue}/create','CsKdDvLtController@createcskd');

    //Ajax ttphong create
Route::get('ttphong/store','CsKdDvLtController@ttphongstore');
Route::get('ttphong/edit','CsKdDvLtController@ttphongedit');
Route::get('ttphong/update','CsKdDvLtController@ttphongupdate');
Route::get('ttphong/delete','CsKdDvLtController@ttphongdelete');
    //End Ajax ttphong create
Route::post('ttcskd_dich_vu_luu_tru','CsKdDvLtController@store');

Route::get('ttcskd_dich_vu_luu_tru/{id}/edit','CsKdDvLtController@edit');
    //Ajax ttphong edit
Route::get('ttphong/themmoi','CsKdDvLtController@ttphongthemmoi');
Route::get('ttphong/chinhsua','CsKdDvLtController@ttphongchinhsua');
Route::get('ttphong/capnhat','CsKdDvLtController@ttphongcapnhat');
Route::get('ttphong/xoa','CsKdDvLtController@ttphongxoa');
    //End Ajax ttphongedit
Route::patch('ttcskd_dich_vu_luu_tru/{id}','CsKdDvLtController@update');
Route::post('ttcskd_dich_vu_luu_tru/delete','CsKdDvLtController@destroy');

//Kê khai giá dịch vụ lưu trú
Route::get('ke_khai_dich_vu_luu_tru/co_so_kinh_doanh','KkGDvLtController@cskd');
Route::get('ke_khai_dich_vu_luu_tru/co_so_kinh_doanh={macskd}&nam={nam}','KkGDvLtController@index');
Route::get('ke_khai_dich_vu_luu_tru/co_so_kinh_doanh={macskd}/create','KkGDvLtController@create');
    //Ajax ttphong create
Route::get('/kkgdvlt/kkgia','KkGDvLtCtDfController@kkgia');
Route::get('/kkgdvlt/upkkgia','KkGDvLtCtDfController@upkkgia');
Route::get('kkgdvlt/storettp','KkGDvLtCtDfController@storettp');
Route::get('kkgdvlt/editttp','KkGDvLtCtDfController@editttp');
Route::get('kkgdvlt/update','KkGDvLtCtDfController@updatettp');
Route::get('kkgdvlt/delete','KkGDvLtCtDfController@destroy');
    //End Ajax ttphong create
Route::post('ke_khai_dich_vu_luu_tru','KkGDvLtController@store');
Route::get('ke_khai_dich_vu_luu_tru/{id}/edit','KkGDvLtController@edit');
    //Ajax ttphong edit
Route::get('/kkgdvlt/boxungttp','KkGDvLtCtController@boxungttp');
Route::get('/kkgdvlt/kkgiachinhsua','KkGDvLtCtController@kkgiachinhsua');
Route::get('/kkgdvlt/capnhatkkgia','KkGDvLtCtController@capnhatkkgia');
Route::get('/kkgdvlt/chinhsuattp','KkGDvLtCtController@chinhsuattp');
Route::get('/kkgdvlt/capnhatttp','KkGDvLtCtController@capnhatttp');
Route::get('/kkgdvlt/xoattp','KkGDvLtCtController@xoattp');
    //End Ajax ttphong edit
Route::patch('ke_khai_dich_vu_luu_tru/{id}','KkGDvLtController@update');
Route::post('ke_khai_dich_vu_luu_tru/chuyen','KkGDvLtController@chuyen');
Route::get('/kkgdvlt/viewlydo','KkGDvLtController@viewlydo');
Route::post('ke_khai_dich_vu_luu_tru/delete','KkGDvLtController@destroy');

    //Xét duyệt kê khai
Route::get('xet_duyet_ke_khai_dich_vu_luu_tru/thang={thang}&nam={nam}&pl={pl}','KkGDvLtXdController@index');
Route::post('xet_duyet_ke_khai_dich_vu_luu_tru/tralai','KkGDvLtXdController@tralai');
Route::get('/xdkkgiadvlt/nhanhs','KkGDvLtXdController@getTTnHs');
Route::post('xet_duyet_ke_khai_dich_vu_luu_tru/nhanhs','KkGDvLtXdController@nhanhs');
Route::get('/xdkkgiadvlt/nhanhsedit','KkGDvLtXdController@getTTnHsedit');
Route::post('xet_duyet_ke_khai_dich_vu_luu_tru/nhanhsedit','KkGDvLtXdController@updatettnhs');
    //End xét duyệt kê khai
    //Search kê khai
Route::get('search_ke_khai_dich_vu_luu_tru','KkGDvLtController@search');
Route::get('search_ke_khai_dich_vu_luu_tru/doanh_nghiep={masothue}&co_so_kinh_doanh={macskd}&namhs={nam}','KkGDvLtController@viewsearch');
    //End search kê khai
    //Print Kê khai
Route::get('ke_khai_dich_vu_luu_tru/report_ke_khai/{mahs}','ReportsController@kkgdvlt');
//End kê khai giá dịch vụ lưu trú
//End Thông tin CSKD
    //End Dịch vụ lưu trú
// </editor-fold>//End Manage



