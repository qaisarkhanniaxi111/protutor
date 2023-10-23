<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TutorTeachingOrdersController extends Controller
{
    public function teachingOrdersSetMeeting(Request $request){
        $update=Order::find($request->order_id);
        if($update){

            $update->zoom_meeeting_url=$request->meeting_link;
            $update->save();
        }
        return redirect(route('tutor.orders'));
    }
    public function teachingOrders()
    {
        if(Session::has('tutordata')){
             
        }else{
            return redirect(route('login'));
        }
        $data = Session::get('tutordata');
        if ($data->role != 3) {
            return redirect('/dashboard');
        }

        $PageTitle = 'Teaching Orders | ProTutor';

        $userid = Session::get('tutorid');

        //$teachingorders=  Order::where('teacher_id', $userid)->where('status', '1')->groupBy(DB::raw("day(created_at)"))->get();

        /* $teachingorders=DB::table('order')
          ->select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as views'))
          ->where('teacher_id', $userid)
          ->where('status', '1')
          ->groupBy('date')
          ->get();*/


        $getData = 'SELECT `order`.id as order_id,`order`.user_id,`order`.teacher_id,`order`.calender_sch_id,`order`.order_type,`order`.items,`order`.total ,`order`.discount,`order`.transaction_fee,`order`.net_total,`order`.payment_id,`order`.payment_status,`order`.status,`order`.zoom_meeeting_url,calendars.* FROM `order` LEFT JOIN `calendars` ON `order`.calender_sch_id = calendars.id WHERE `order`.status=1 and `order`.teacher_id="' . $userid . '"';
        $teachingorders = DB::select($getData);


        $completeorder = new Order;
        $completeorder =  $completeorder->where('teacher_id', $userid);
        $completeorder =  $completeorder->where('status', '2');
        $completeorder = $completeorder->paginate(1);
        $params = array('tab' => (isset($_GET['tab']) ? $_GET['tab'] : "2"));

        $cancelorder = new Order;
        $cancelorder =  $cancelorder->where('teacher_id', $userid);
        $cancelorder =  $cancelorder->where('status', '3');
        $cancelorder = $cancelorder->paginate($perPage = 1, $columns = ['*'], $pageName = 'page2');
        $cancelorder_params = array('tab1' => (isset($_GET['tab1']) ? $_GET['tab1'] : "3"));


        return view("tutor.teachingorders", compact('PageTitle', 'teachingorders', 'completeorder', 'params', 'cancelorder', 'cancelorder_params'));
    }
}
