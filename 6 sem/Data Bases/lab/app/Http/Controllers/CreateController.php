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

class CreateController extends Controller
{
    public function createAdditions(){
        return view('additions.create');
    }
    public function createClient(){
        return view('client.create');
    }
    public function createComments(){
        return view('comments.create');
    }
    public function createDelivery(){
        return view('delivery.create');
    }
    public function createDisk(){
        return view('disk.create');
    }
    public function createOrder(){
        return view('order.create');
    }
    public function createPassport(){
        return view('passport.create');
    }
}
