<?php

namespace App\Http\Controllers;

use App\DmDvQl;
use App\DnDvLt;
use App\DnDvLtReg;
use App\DonViDvVt;
use App\DonViDvVtReg;
use App\Register;
use App\Users;
use App\Districts;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function login()
    {
        return view('system.users.login')
            ->with('pageTitle', 'Đăng nhập hệ thống');
    }

    public function signin(Request $request)
    {
        $input = $request->all();
        $check = Users::where('username', $input['username'])->count();
        if ($check == 0)
            return view('errors.invalid-user');
        else
            $ttuser = Users::where('username', $input['username'])->first();


        if (md5($input['password']) == $ttuser->password) {
            if ($ttuser->status == "Kích hoạt") {
                if ($ttuser->level == 'DVVT') {
                    $ttdnvt = DonViDvVt::where('masothue', $ttuser->mahuyen)
                        ->first();
                    $dvvt = $ttdnvt->setting;
                    $ttuser->dvvtcc = $dvvt;
                }
                Session::put('admin', $ttuser);

                return redirect('')
                    ->with('pageTitle', 'Tổng quan');
            } else
                return view('errors.lockuser');

        } else
            return view('errors.invalid-pass');
    }

    public function cp()
    {

        if (Session::has('admin')) {

            return view('system.users.change-pass')
                ->with('pageTitle', 'Thay đổi mật khẩu');

        } else
            return view('errors.notlogin');

    }

    public function cpw(Request $request)
    {

        $update = $request->all();

        $username = session('admin')->username;

        $password = session('admin')->password;

        $newpass2 = $update['newpassword2'];

        $currentPassword = $update['current-password'];

        if (md5($currentPassword) == $password) {
            $ttuser = Users::where('username', $username)->first();
            $ttuser->password = md5($newpass2);
            if ($ttuser->save()) {
                Session::flush();
                return view('errors.changepassword-success');
            }
        } else {
            dd('Mật khẩu cũ không đúng???');
        }
    }

    public function checkpass(Request $request)
    {
        $input = $request->all();
        $passmd5 = md5($input['pass']);

        if (session('admin')->password == $passmd5) {
            echo 'ok';
        } else {
            echo 'cancel';
        }
    }

    public function checkuser(Request $request)
    {
        $input = $request->all();
        $newusser = $input['user'];

        $model = Users::where('username', $newusser)
            ->first();
        if (isset($model)) {
            echo 'cancel';
        } else {
            echo 'ok';
        }
    }

    public function logout()
    {
        if (Session::has('admin')) {
            Session::flush();
            return redirect('/login');
        } else {
            return redirect('');
        }
    }

    public function index(Request$request)
    {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $huyen = isset($inputs['mahuyen']) ?  $inputs['mahuyen'] : 'all';
            $level = isset($inputs['level']) ?  $inputs['level'] : 'T' ;


            $users = User::where('level',$level);
            if($level == 'T'){
                $users = $users->where('sadmin','<>','ssa');
            }elseif($level == 'X'){
                $mahuyendf = Districts::first()->mahuyen;
                $huyen = isset($inputs['mahuyen']) ?  $inputs['mahuyen'] : $mahuyendf;
                $users = $users->where('mahuyen', $huyen);
            }

            $model = $users->get();



            $listhuyen = Districts::all();

            return view('system.users.index')
                ->with('model', $model)
                ->with('listhuyen',$listhuyen)
                ->with('level', $level)
                ->with('mahuyen',$huyen)
                ->with('pageTitle', 'Danh sách tài khoản');

        } else {
            return view('errors.notlogin');
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Session::has('admin')) {
            $model = Users::findOrFail($id);
            if (session('admin')->sadmin == 'ssa' || session('admin')->sadmin == 'satc' || session('admin')->sadmin == 'savt') {
                if (session('admin')->sadmin == 'ssa' || session('admin')->cqcq == $model->cqcq) {
                    if ($model->level == 'DVLT')
                        $modeldvql = DmDvQl::where('plql', 'TC')
                            ->get();
                    elseif ($model->level == 'DVVT')
                        $modeldvql = DmDvQl::where('plql', 'VT')
                            ->get();
                    else
                        $modeldvql = DmDvQl::all();
                    return view('system.users.edit')
                        ->with('model', $model)
                        ->with('modeldvql', $modeldvql)
                        ->with('pageTitle', 'Chỉnh sửa thông tin tài khoản');
                } else {
                    return view('errors.noperm');
                }
            }else{
                return view('errors.perm');
            }

        } else {
            return view('errors.notlogin');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Session::has('admin')) {
            $input = $request->all();
            $model = Users::findOrFail($id);
            if(session('admin')->sadmin == 'ssa' || $model->cqcq == session('admin')->cqcq) {
                $model->name = $input['name'];
                $model->phone = $input['phone'];
                $model->email = $input['email'];
                $model->status = $input['status'];
                $model->username = $input['username'];
                if ($input['newpass'] != '')
                    $model->password = md5($input['newpass']);
                $model->save();
                if ($model->pldv == 'DVLT')
                    $pl = 'dich_vu_luu_tru';
                elseif ($model->pldv == 'DVVT')
                    $pl = 'dich_vu_van_tai';
                else
                    $pl = 'quan_ly';

                return redirect('users/pl=' . $pl);
            }else
                return view('errors.noperm');

        } else {
            return redirect('');
        }
    }

    public function destroy(Request $request)
    {
        if (Session::has('admin')) {
            $id = $request->all()['iddelete'];
            $model = Users::findorFail($id);

            if ($model->level == 'T')
                $pl = 'quan_ly';
            elseif ($model->level == 'DVLT')
                $pl = 'dich_vu_luu_tru';
            elseif ($model->level == 'DVVT')
                $pl = 'dich_vu_van_tai';

            $model->delete();

            return redirect('users/pl=' . $pl);

        } else
            return view('errors.notlogin');
    }

    public function permission($id)
    {
        if (Session::has('admin')) {

            $model = Users::findorFail($id);
            if($model->level == 'DVVT') {
                $ttdn = DonViDvVt::where('masothue',$model->mahuyen)
                    ->first();
                $setting = $ttdn->setting;

            }else
                $setting = '';
            $permission = !empty($model->permission) ? $model->permission : getPermissionDefault($model->level);
            //dd(json_decode($permission));
            return view('system.users.perms')
                ->with('permission', json_decode($permission))
                ->with('setting',$setting)
                ->with('model', $model)
                ->with('pageTitle', 'Phân quyền cho tài khoản');

        } else
            return view('errors.notlogin');
    }

    public function uppermission(Request $request)
    {
        if (Session::has('admin')) {
            $update = $request->all();

            $id = $update['id'];

            $model = Users::findOrFail($id);
            //dd($model);
            if (isset($model)) {
                $update['roles'] = isset($update['roles']) ? $update['roles'] : null;

                $model->permission = json_encode($update['roles']);
                $model->save();

                if ($model->level == 'T')
                    $pl = 'quan_ly';
                elseif ($model->level == 'DVLT')
                    $pl = 'dich_vu_luu_tru';
                elseif ($model->level == 'DVVT')
                    $pl = 'dich_vu_van_tai';
                return redirect('users/pl=' . $pl);

            } else
                dd('Tài khoản không tồn tại');

        } else
            return view('errors.notlogin');
    }

    public function lockuser($id,$pl)
    {

        $arrayid = explode('-', $id);
        foreach ($arrayid as $ids) {
            $model = Users::findOrFail($ids);
            if ($model->status != "Chưa kích hoạt") {
                $model->status = "Vô hiệu";
                $model->save();
            }
        }
        return redirect('users/pl='.$pl);

    }

    public function unlockuser($id,$pl)
    {
        $arrayid = explode('-', $id);
        foreach ($arrayid as $ids) {
            $model = Users::findOrFail($ids);

            if ($model->status != "Chưa kích hoạt") {

                $model->status = "Kích hoạt";
                $model->save();
            }
        }
        return redirect('users/pl='.$pl);

    }

    public function register($pl){
        if (Session::has('admin')) {
            if(session('admin')->sadmin == 'ssa' || session('admin')->sadmin == 'satc' || session('admin')->sadmin == 'savt' ) {
                $cqcq = session('admin')->cqcq;
                if ($pl == 'dich_vu_luu_tru' && session('admin')->sadmin == 'satc' || $pl == 'dich_vu_luu_tru' && session('admin')->sadmin == 'ssa') {
                    if (session('admin')->sadmin == 'ssa') {
                        $model = Register::where('pl', 'DVLT')
                            ->where('trangthai', 'Chờ duyệt')
                            ->get();
                    } else {
                        $model = Register::where('pl', 'DVLT')
                            ->where('cqcq', $cqcq)
                            ->where('trangthai', 'Chờ duyệt')
                            ->get();
                    }
                } elseif ($pl == 'dich_vu_van_tai' && session('admin')->sadmin == 'savt' || $pl == 'dich_vu_van_tai' && session('admin')->sadmin == 'ssa') {
                    if (session('admin')->sadmin == 'ssa') {
                        $model = Register::where('pl', 'DVVT')
                            ->where('trangthai', 'Chờ duyệt')
                            ->get();
                    } else {
                        $model = Register::where('pl', 'DVVT')
                            ->where('cqcq', $cqcq)
                            ->where('trangthai', 'Chờ duyệt')
                            ->get();
                    }
                }else{
                    return view('errors.noperm');
                }

                return view('system.users.register.index')
                    ->with('model', $model)
                    ->with('pl', $pl)
                    ->with('pageTitle', 'Thông tin tài khoản đăng ký');
            }else{
                return view('errors.perm');
            }

        } else
            return view('errors.notlogin');
    }

    public function registershow($id){
        if (Session::has('admin')) {
            if(session('admin')->sadmin == 'ssa' || session('admin')->sadmin == 'satc' || session('admin')->sadmin == 'savt') {
                $model = Register::findOrFail($id);

                if ($model->pl == 'DVLT' && session('admin')->sadmin == 'ssa' || $model->pl == 'DVLT' && session('admin')->sadmin == 'satc') {
                    $cqcq = DmDvQl::where('plql', 'TC')
                        ->get();
                    return view('system.users.register.dvlt')
                        ->with('model', $model)
                        ->with('cqcq', $cqcq)
                        ->with('pageTitle', 'Thông tin đăng ký tài khoản dịch vụ lưu trú');
                } elseif ($model->pl == 'DVVT' && session('admin')->sadmin == 'ssa' || $model->pl == 'DVVT' && session('admin')->sadmin == 'savt') {
                    $cqcq = DmDvQl::where('plql', 'VT')
                        ->get();
                    return view('system.users.register.dvvt')
                        ->with('model', $model)
                        ->with('cqcq', $cqcq)
                        ->with('pageTitle', 'Thông tin đăng ký tài khoản dịch vụ vận tải');
                } else {
                    return view('errors.noperm');
                }
            }else{
                return view('errors.perm');
            }
        }else
            return view('errors.notlogin');

    }

    public function registerdvlt(Request $request){
        if (Session::has('admin')) {
            $input = $request->all();
            $id = $input['idregister'];
            $model = Register::findOrFail($id);
            if(session('admin')->sadmin == 'ssa' || $model->cqcq == session('admin')->cqcq ) {
                $modeldn = new DnDvLt();
                $modeldn->tendn = $model->tendn;
                $modeldn->masothue = $model->masothue;
                $modeldn->teldn = $model->tel;
                $modeldn->faxdn = $model->fax;
                $modeldn->email = $model->email;
                $modeldn->diachidn = $model->diachi;
                $modeldn->trangthai = 'Kích hoạt';
                $modeldn->noidknopthue = $model->noidknopthue;
                $modeldn->tailieu = $model->tailieu;
                $modeldn->giayphepkd = $model->giayphepkd;
                $modeldn->cqcq = $model->cqcq;
                if ($modeldn->save()) {
                    $modeluser = new Users();
                    $modeluser->name = $model->tendn;
                    $modeluser->username = $model->username;
                    $modeluser->password = $model->password;
                    $modeluser->phone = $model->teldn;
                    $modeluser->email = $model->email;
                    $modeluser->status = 'Kích hoạt';
                    $modeluser->mahuyen = $model->masothue;
                    $modeluser->level = 'DVLT';
                    $modeluser->cqcq = $model->cqcq;
                    $modeluser->save();
                }
                $delete = Register::findOrFail($id)->delete();
                return redirect('users/register/pl=dich_vu_luu_tru');
            }else{
                return view('errors.noperm');
            }

        } else
            return view('errors.notlogin');
    }

    public function registerdvltupdate($id, Request $request){
        if (Session::has('admin')) {
            $input = $request->all();
            $model = Register::findOrFail($id);
            $model->tendn = $input['tendn'];
            $model->masothue = $input['masothue'];
            $model->diachi= $input['diachidn'];
            $model->tel  = $input['teldn'];
            $model->fax = $input['faxdn'];
            $model->email = $input['email'];
            $model->noidknopthue = $input['noidknopthue'];
            $model->giayphepkd = $input['giayphepkd'];
            $model->tailieu = $input['tailieu'];
            $model->username = $input['username'];
            $model->cqcq = $input['cqcq'];
            $model->save();
            return redirect('users/register/pl=dich_vu_luu_tru');
        } else {
            return view('errors.notlogin');
        }
    }

    public function registerdvvtupdate($id,Request $request){
        if (Session::has('admin')) {
            $input = $request->all();
            $model = Register::findOrFail($id);
            $model->tendn = $input['tendn'];
            $model->masothue = $input['masothue'];
            $model->diachi = $input['diachidn'];
            $model->tel  = $input['teldn'];
            $model->fax = $input['faxdn'];
            $model->email = $input['emaildn'];
            $model->noidknopthue = $input['noidknopthue'];
            $model->giayphepkd = $input['giayphepkd'];
            $model->tailieu = $input['tailieu'];
            $model->username = $input['username'];
            $model->pl = 'DVVT';

            $input['roles'] = isset($input['roles']) ? $input['roles'] : null;
            $model->setting = json_encode($input['roles']);
            $x = $input['roles'];
            $model->dvxk = isset($x['dvvt']['vtxk']) ? 1 : 0;
            $model->dvxb = isset($x['dvvt']['vtxb']) ? 1 : 0;
            $model->dvxtx = isset($x['dvvt']['vtxtx']) ? 1 : 0;
            $model->dvk = isset($x['dvvt']['vtch']) ? 1 : 0;
            $model->cqcq = $input['cqcq'];
            $model->save();

            return redirect('users/register/pl=dich_vu_van_tai');
        } else {
            return view('errors.notlogin');
        }
    }

    public function tralaidktk(Request $request){
        if (Session::has('admin')) {
            $input = $request->all();
            $id = $input['idtralai'];
            $model = Register::findOrFail($id);

            if ($input['lydo'] != '') {
                $model->lydo = $input['lydo'];
                $model->trangthai = 'Bị trả lại';
                $model->save();
            }

            if ($model->pl == 'DVLT') {
                $pl = 'dich_vu_luu_tru';
            } elseif ($model->pl == 'DVVT') {
                $pl = 'dich_vu_van_tai';
            }

            return redirect('users/register/pl='.$pl);
        } else {
            return view('errors.notlogin');
        }
    }

    public function settinguser(){
        if (Session::has('admin')) {

            return view('system.users.usersetting')
                ->with('pageTitle', 'Thông tin tài khoản');

        } else
            return view('errors.notlogin');

    }

    public function settinguserw(Request $request){
        $update = $request->all();

        $username = session('admin')->username;

        $password = session('admin')->password;

        $currentPassword = $update['current-password'];

        if (md5($currentPassword) == $password) {
            $ttuser = Users::where('username', $username)->first();
            $ttuser->emailxt = $update['emailxt'];
            $ttuser->question = $update['question'];
            $ttuser->answer = $update['answer'];
            $ttuser->save();
            return redirect('');
        } else {
            dd('Mật khẩu cũ không đúng???');
        }
    }
}
