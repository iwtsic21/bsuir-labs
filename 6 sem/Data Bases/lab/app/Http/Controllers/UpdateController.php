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

class UpdateController extends Controller
{
    public function updateAdditions(Additions $additions){
        $data = request()->validate([
            'fine' => '',
            'discount' => '',
            'lease_extension' => '',
            'order_id' => '',
        ]);
        $additions->update($data);
        return redirect()->route('addition.show', $additions->id);
    }
    public function updateClient(Client $client){
        $data = request()->validate([
            'email' => '',
            'phone_number' => '',
            'client_name' => '',
            'order_id' => '',
        ]);
        $client->update($data);
        return redirect()->route('client.show', $client->id);
    }
    public function updateComments(Comments $comments){
        $data = request()->validate([
            'rating' => '',
            'adding_date' => '',
            'review' => '',
            'client_id' => '',
            'disk_id' => '',
        ]);
        $comments->update($data);
        return redirect()->route('comment.show', $comments->id);
    }
    public function updateDelivery(Delivery $delivery){
        $data = request()->validate([
            'delivery_date' => '',
            'address' => '',
            'price' => '',
            'order_id' => '',
        ]);
        $delivery->update($data);
        return redirect()->route('delivery.show', $delivery->id);
    }
    public function updateDisk(Disk $disk){
        $data = request()->validate([
            'disk_name' => '',
            'disk_cost' => '',
            'category' => '',
            'description' => '',
        ]);
        $disk->update($data);
        return redirect()->route('disk.show', $disk->id);
    }
    public function updateOrder(Order $order){
        $data = request()->validate([
            'order_date' => '',
            'total_price' => '',
            'return_date' => '',
            'disk_id' => '',
        ]);
        $order->update($data);
        return redirect()->route('order.show', $order->id);
    }
    public function updatePassport(Passport $passport){
        $data = request()->validate([
            'name_sur' => '',
            'birth_date' => '',
            'order_id' => '',
        ]);
        $passport->update($data);
        return redirect()->route('passport.show', $passport->id);
    }
}
