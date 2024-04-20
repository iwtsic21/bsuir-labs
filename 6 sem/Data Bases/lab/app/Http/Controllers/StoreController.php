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

class StoreController extends Controller
{
    public function storeAdditions(){
        $data = request()->validate([
            'fine' => '',
            'discount' => '',
            'lease_extension' => '',
            'order_id' => '',
        ]);
        Additions::create($data);
        return redirect()->route('addition.index');
    }
    public function storeClient(){
        $data = request()->validate([
            'email' => '',
            'phone_number' => '',
            'client_name' => '',
            'order_id' => '',
        ]);
        Client::create($data);
        return redirect()->route('client.index');
    }
    public function storeComments(){
        $data = request()->validate([
            'rating' => '',
            'adding_date' => '',
            'review' => '',
            'client_id' => '',
            'disk_id' => '',
        ]);
        Comments::create($data);
        return redirect()->route('comment.index');
    }
    public function storeDelivery(){
        $data = request()->validate([
            'delivery_date' => '',
            'address' => '',
            'price' => '',
            'order_id' => '',
        ]);
        Delivery::create($data);
        return redirect()->route('delivery.index');
    }
    public function storeDisk(){
        $data = request()->validate([
            'disk_name' => '',
            'disk_cost' => '',
            'category' => '',
            'description' => '',
        ]);
        Disk::create($data);
        return redirect()->route('disk.index');
    }
    public function storeOrder(){
        $data = request()->validate([
            'order_date' => '',
            'total_price' => '',
            'return_date' => '',
            'disk_id' => '',
        ]);
        Order::create($data);
        return redirect()->route('order.index');
    }
    public function storePassport(){
        $data = request()->validate([
            'name_sur' => '',
            'birth_date' => '',
            'order_id' => '',
        ]);
        Passport::create($data);
        return redirect()->route('passport.index');
    }
}
