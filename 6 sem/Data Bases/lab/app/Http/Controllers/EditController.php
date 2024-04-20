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

class EditController extends Controller
{
    public function editAdditions(Additions $additions){
        return view('additions.edit', compact('additions'));
    }
    public function editClient(Client $client){
        return view('client.edit', compact('client'));
    }
    public function editComments(Comments $comments){
        return view('comments.edit', compact('comments'));
    }
    public function editDelivery(Delivery $delivery){
        return view('delivery.edit', compact('delivery'));
    }
    public function editDisk(Disk $disk){
        return view('disk.edit', compact('disk'));
    }
    public function editOrder(Order $order){
        return view('order.edit', compact('order'));
    }
    public function editPassport(Passport $passport){
        return view('passport.edit', compact('passport'));
    }
}
