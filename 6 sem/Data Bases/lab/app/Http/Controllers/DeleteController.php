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
use Mockery\Generator\StringManipulation\Pass\Pass;

class DeleteController extends Controller
{
    
    public function destroyAdditions(Additions $additions){
        $additions->delete();
        return redirect()->route('addition.index');
    }
    public function destroyClient(Client $client){
        $client->delete();
        return redirect()->route('client.index');
    }
    public function destroyComments(Comments $comments){
        $comments->delete();
        return redirect()->route('comment.index');
    }
    public function destroyDelivery(Delivery $delivery){
        $delivery->delete();
        return redirect()->route('delivery.index');
    }
    public function destroyDisk(Disk $disk){
        $disk->delete();
        return redirect()->route('disk.index');
    }
    public function destroyOrder(Order $order){
        $order->delete();
        return redirect()->route('order.index');
    }
    public function destroyPassport(Passport $passport){
        $passport->delete();
        return redirect()->route('passport.index');
    }

}
