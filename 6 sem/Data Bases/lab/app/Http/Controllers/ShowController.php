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

class ShowController extends Controller
{
    public function showAdditions(Additions $additions){
        return view('additions.show', compact('additions'));
    }
    public function showClient(Client $client){
        return view('client.show', compact('client'));
    }
    public function showComments(Comments $comments){
        return view('comments.show', compact('comments'));
    }
    public function showDelivery(Delivery $delivery){
        return view('delivery.show', compact('delivery'));
    }
    public function showDisk(Disk $disk){
        return view('disk.show', compact('disk'));
    }
    public function showOrder(Order $order){
        return view('order.show', compact('order'));
    }
    public function showPassport(Passport $passport){
        return view('passport.show', compact('passport'));
    }
}
