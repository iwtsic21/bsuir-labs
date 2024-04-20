<?php

namespace App\Http\Controllers;
use App\Models\Disk;
use App\Models\Additions;
use App\Models\Client;
use App\Models\Order;
use App\Models\Passport;
use App\Models\Comments;
use App\Models\Delivery;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function indexDisk(){
        $disk = Disk::all();
        return view('disk.disk', compact('disk'));
    }
    public function indexAdditions(){
        $addition = Additions::all();
        return view('additions.additions', compact('addition'));
    }
    public function indexClient(){
        $client = Client::all();
        return view('client.client', compact('client'));
    }
    public function indexOrder(){
        $order = Order::all();
        return view('order.order', compact('order'));
    }
    public function indexPassport(){
        $passport = Passport::all();
        return view('passport.passport', compact('passport'));
    }
    public function indexComments(){
        $comment = Comments::all();
        return view('comments.comments', compact('comment'));
    }
    public function indexDelivery(){
        $delivery = Delivery::all();
        return view('delivery.delivery', compact('delivery'));
    }
}
