<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TeachingOrdersController extends Controller
{
    
    public function studentOrders()
    {

        $data = Session::get('userdata');
        if ($data->role != 4) {
            return redirect('/dashboard');
        }

        $PageTitle = 'Teaching Orders | ProTutor';

        $userid = Session::get('userid');

        $getData = 'SELECT `order`.id as order_id,`order`.user_id,`order`.teacher_id,`order`.calender_sch_id,`order`.order_type,`order`.items,`order`.total ,`order`.discount,`order`.transaction_fee,`order`.net_total,`order`.payment_id,`order`.payment_status,`order`.status,`order`.zoom_meeeting_url,calendars.* FROM `order` LEFT JOIN `calendars` ON `order`.calender_sch_id = calendars.id WHERE `order`.status=1 and `order`.user_id="' . $userid . '"';
        $teachingorders = DB::select($getData);


        $completeorder = new Order;
        $completeorder =  $completeorder->where('user_id', $userid);
        $completeorder =  $completeorder->where('status', '2');
        $completeorder = $completeorder->paginate(1);
        $params = array('tab' => (isset($_GET['tab']) ? $_GET['tab'] : "2"));

        $cancelorder = new Order;
        $cancelorder =  $cancelorder->where('user_id', $userid);
        $cancelorder =  $cancelorder->where('status', '3');
        $cancelorder = $cancelorder->paginate($perPage = 1, $columns = ['*'], $pageName = 'page2');
        $cancelorder_params = array('tab1' => (isset($_GET['tab1']) ? $_GET['tab1'] : "3"));


        return view("student.studentorders", compact('PageTitle', 'teachingorders', 'completeorder', 'params', 'cancelorder', 'cancelorder_params'));
    }
}
