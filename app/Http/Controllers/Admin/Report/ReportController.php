<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function todayOrder(){
        $today = date('d-m-y');
        $todayOrder = DB::table('orders')->where('status',0)->where('date',$today)->get();
        return view('admin.report.today_order',compact('todayOrder'));
    }
    public function todayDelivery(){
        $today = date('d-m-y');
        $todayDel = DB::table('orders')->where('status',3)->where('delivery_date',$today)->get();
        return view('admin.report.today_delivery',compact('todayDel'));
    }
    public function thisMonthReport(){
        $month = date('F');
        $order = DB::table('orders')->where('status',3)->where('month',$month)->get();
        return view('admin.report.this_month',compact('order','month'));
    }

    public function searchReport(){
        return view('admin.report.search');
    }
    public function searchByYear(Request $request){
        $year = $request->year;
        $total = DB::table('orders')->where('status',3)->where('delivery_year',$year)->sum('total');
        $order = DB::table('orders')->where('status',3)->where('delivery_year',$year)->get();
        return view('admin.report.search_by_year',compact('order','year','total'));
    }
    public function searchByMonth(Request $request){
        $date = $request->month;
        $total = DB::table('orders')->where('status',3)->where('month',$month)->sum('total');
        $order = DB::table('orders')->where('status',3)->where('month',$month)->get();
        return view('admin.report.search_by_month',compact('order','month','total'));
    }
    public function searchByDate(Request $request){
        $date = $request->date;
        $formatedeDate = date('d-m-y',strtotime($date));
        $total = DB::table('orders')->where('status',3)->where('date',$formatedeDate)->sum('total');
        $order = DB::table('orders')->where('status',3)->where('date',$formatedeDate)->get();
        return view('admin.report.search_by_date',compact('order','formatedeDate','total'));
    }
}
