<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Lab4Controller extends Controller
{
    public  function lab4index(){
        $order1 = DB::select('SELECT order_date, total_price FROM "order";');
        dump('SELECT order_date, total_price FROM "order";', $order1);
        $order2 = DB::select('SELECT * FROM "comments" WHERE rating=10;');
        dump('SELECT * FROM "comments" WHERE rating=10;', $order2);
        $order3 = DB::select('SELECT * FROM delivery ORDER BY price;');
        dump('SELECT * FROM delivery ORDER BY price;', $order3);
        $order4 = DB::select('SELECT * FROM "order" WHERE total_price > 120 ORDER BY total_price DESC;');
        dump('SELECT * FROM "order" WHERE total_price > 120 ORDER BY total_price DESC;', $order4);
        $order5 = DB::select('SELECT disk.category, disk.disk_name, "comments".rating, "comments".adding_date FROM disk CROSS JOIN "comments" WHERE "comments".rating = 5;');
        dump('SELECT disk.category, disk.disk_name, "comments".rating, "comments".adding_date FROM disk CROSS JOIN "comments" WHERE "comments".rating = 5;', $order5);
        $order6 = DB::select('SELECT * FROM "order" CROSS JOIN additions WHERE fine > 20 and fine < 25;');
        dump('SELECT * FROM "order" CROSS JOIN additions WHERE fine > 20 and fine < 25;', $order6);
        $order7 = DB::select('SELECT "order".*, delivery.address, delivery.delivery_date FROM "order" INNER JOIN delivery ON "order".id=delivery.order_id;');
        dump('SELECT "order".*, delivery.address, delivery.delivery_date FROM "order" INNER JOIN delivery ON "order".id=delivery.order_id;', $order7);
        $order8 = DB::select('SELECT client.*, "order".order_date, "order".total_price FROM client INNER JOIN "order" ON client.order_id = "order".id;');
        dump('SELECT client.*, "order".order_date, "order".total_price FROM client INNER JOIN "order" ON client.order_id = "order".id;', $order8);
        $order9 = DB::select('SELECT client.*, "order".order_date, "order".total_price FROM client LEFT JOIN "order" ON client.order_id = "order".id;');
        dump('SELECT client.*, "order".order_date, "order".total_price FROM client LEFT JOIN "order" ON client.order_id = "order".id;', $order9);
        $order10 = DB::select('SELECT client.*, "comments".rating, "comments".review FROM client LEFT JOIN "comments" ON client.id = "comments".client_id;');
        dump('SELECT client.*, "comments".rating, "comments".review FROM client LEFT JOIN "comments" ON client.id = "comments".client_id;', $order10);
        $order11 = DB::select('SELECT client.*, "comments".rating, "comments".review FROM client RIGHT JOIN "comments" ON client.id = "comments".client_id;');
        dump('SELECT client.*, "comments".rating, "comments".review FROM client RIGHT JOIN "comments" ON client.id = "comments".client_id;', $order11);
        $order12 = DB::select('SELECT client.*, "comments".rating, "comments".review FROM client RIGHT JOIN "comments" ON client.id = "comments".client_id;');
        dump('SELECT client.*, "comments".rating, "comments".review FROM client RIGHT JOIN "comments" ON client.id = "comments".client_id;', $order12);
        $order13 = DB::select('SELECT client.*, "order".order_date, "order".total_price FROM client FULL JOIN "order" ON client.order_id = "order".id;');
        dump('SELECT client.*, "order".order_date, "order".total_price FROM client FULL JOIN "order" ON client.order_id = "order".id;', $order13);
        $order14 = DB::select('SELECT client.*, "comments".rating, "comments".review FROM client FULL JOIN "comments" ON client.id = "comments".client_id;');
        dump('SELECT client.*, "comments".rating, "comments".review FROM client FULL JOIN "comments" ON client.id = "comments".client_id;', $order14);
    }
}
