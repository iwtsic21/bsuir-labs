<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Lab5Controller extends Controller
{
    public function lab5index(){
        $order1 = DB::select('SELECT AVG(rating) FROM "comments"
                             INNER JOIN disk ON "comments".disk_id=disk.id
                             INNER JOIN client ON client.id="comments".client_id;
        ');
                             dump('SELECT AVG(rating) FROM "comments"
                             INNER JOIN disk ON "comments".disk_id=disk.id
                             INNER JOIN client ON client.id="comments".client_id;
        ', $order1);
        $order2 = DB::select('SELECT "comments".review, client.client_name, disk.disk_name, disk.id FROM "comments"
                             INNER JOIN disk ON "comments".disk_id=disk.id
                             INNER JOIN client ON client.id="comments".client_id
                             WHERE rating=(SELECT MAX(rating) FROM "comments");
        ');
        dump('SELECT "comments".review, client.client_name, disk.disk_name, disk.id FROM "comments"
                             INNER JOIN disk ON "comments".disk_id=disk.id
                             INNER JOIN client ON client.id="comments".client_id
                             WHERE rating=(SELECT MAX(rating) FROM "comments");
        ', $order2);
        $order3 = DB::select('SELECT "comments".review, client.client_name, disk.disk_name, disk.id FROM "comments"
                             INNER JOIN disk ON "comments".disk_id=disk.id
                             INNER JOIN client ON client.id="comments".client_id
                             WHERE rating=(SELECT MIN(rating) FROM "comments");
        ');
        dump('SELECT "comments".review, client.client_name, disk.disk_name, disk.id FROM "comments"
                             INNER JOIN disk ON "comments".disk_id=disk.id
                             INNER JOIN client ON client.id="comments".client_id
                             WHERE rating=(SELECT MIN(rating) FROM "comments");
        ', $order3);
        $order4 = DB::select('SELECT count(*) FROM "comments"
                             INNER JOIN disk ON "comments".disk_id=disk.id
                             INNER JOIN client ON client.id="comments".client_id
                             WHERE rating=(SELECT MAX(rating) FROM "comments");
        ');
        dump('SELECT count(*) FROM "comments"
                             INNER JOIN disk ON "comments".disk_id=disk.id
                             INNER JOIN client ON client.id="comments".client_id
                             WHERE rating=(SELECT MAX(rating) FROM "comments");'
        ,$order4);
        $order5 = DB::select('SELECT PERCENTILE_CONT(0.5) WITHIN GROUP (ORDER BY rating )FROM "comments"
                             INNER JOIN disk ON "comments".disk_id=disk.id
                             INNER JOIN client ON client.id="comments".client_id;
        ');
        dump('SELECT PERCENTILE_CONT(0.5) WITHIN GROUP (ORDER BY rating )FROM "comments"
                             INNER JOIN disk ON "comments".disk_id=disk.id
                             INNER JOIN client ON client.id="comments".client_id;
        ', $order5);
        $order6 = DB::select('SELECT SUM(rating)::numeric / COUNT (*) FROM "comments"
                             INNER JOIN disk ON "comments".disk_id=disk.id
                             INNER JOIN client ON client.id="comments".client_id;
        ');
        dump('SELECT SUM(rating)::numeric / COUNT (*) FROM "comments"
                             INNER JOIN disk ON "comments".disk_id=disk.id
                             INNER JOIN client ON client.id="comments".client_id;
        ', $order6);
        $order7 = DB::select('SELECT COUNT(*), "comments".adding_date FROM "comments"
                             INNER JOIN disk ON "comments".disk_id=disk.id
                             INNER JOIN client ON client.id="comments".client_id
                             GROUP BY "comments".adding_date ORDER BY "comments".adding_date ASC;
        ');
        dump('SELECT COUNT(*), "comments".adding_date FROM "comments"
                             INNER JOIN disk ON "comments".disk_id=disk.id
                             INNER JOIN client ON client.id="comments".client_id
                             GROUP BY "comments".adding_date ORDER BY "comments".adding_date ASC;'
        ,$order7);
        $order8 = DB::select('SELECT COUNT(*) AS "count", "comments".adding_date FROM "comments"
                             INNER JOIN disk ON "comments".disk_id=disk.id
                             INNER JOIN client ON client.id="comments".client_id
                             GROUP BY "comments".adding_date ORDER BY "comments".adding_date ASC;');
        dump('SELECT COUNT(*) AS "count", "comments".adding_date FROM "comments"
                             INNER JOIN disk ON "comments".disk_id=disk.id
                             INNER JOIN client ON client.id="comments".client_id
                             GROUP BY "comments".adding_date ORDER BY "comments".adding_date ASC;'
        ,$order8);
        $order9 = DB::select('SELECT "comments".rating, "comments".review FROM "comments"
                             INNER JOIN disk ON "comments".disk_id=disk.id
                             INNER JOIN client ON client.id="comments".client_id
                             WHERE "comments".id IS NOT NULL AND "comments".id > 10;');
        dump('SELECT "comments".rating, "comments".review FROM "comments"
                             INNER JOIN disk ON "comments".disk_id=disk.id
                             INNER JOIN client ON client.id="comments".client_id
                             WHERE "comments".id IS NOT NULL AND "comments".id < 10;'
        ,$order9);
        $order10 = DB::select('SELECT "comments".rating, "comments".review, "comments".id FROM "comments"
                             INNER JOIN disk ON "comments".disk_id=disk.id
                             INNER JOIN client ON client.id="comments".client_id
                             WHERE "comments".id IN (1, 2, 3) AND client.id > ANY (SELECT client.id FROM client);');
        dump('SELECT "comments".rating, "comments".review, "comments".id FROM "comments"
                             INNER JOIN disk ON "comments".disk_id=disk.id
                             INNER JOIN client ON client.id="comments".client_id
                             WHERE "comments".id IN (1, 2, 3) AND client.id > ANY (SELECT client.id FROM client);'
        ,$order10);
        $order11 = DB::select('SELECT "comments".review, "comments".rating FROM "comments"
                              WHERE EXISTS(
                                SELECT 1
                                FROM client
                                WHERE client.id = "comments".client_id)
                              AND EXISTS(
                                SELECT 1
                                FROM disk
                                WHERE disk.id = "comments".disk_id)
                              AND "comments".id > 10;
                                ');
        dump('SELECT "comments".review, "comments".rating FROM "comments"
                              WHERE EXISTS(
                                SELECT 1
                                FROM client
                                WHERE client.id = "comments".client_id)
                              AND EXISTS(
                                SELECT 1
                                FROM disk
                                WHERE disk.id = "comments".disk_id)
                              AND "comments".id > 10;', $order11);
        $order12 = DB::select('SELECT "comments".rating, "comments".review, "comments".id FROM "comments"
                             INNER JOIN disk ON "comments".disk_id=disk.id
                             INNER JOIN client ON client.id="comments".client_id
                             WHERE rating < ALL(SELECT "comments".rating FROM "comments" WHERE "comments".rating > 6);');
       dump('SELECT "comments".rating, "comments".review, "comments".id FROM "comments"
                             INNER JOIN disk ON "comments".disk_id=disk.id
                             INNER JOIN client ON client.id="comments".client_id
                             WHERE rating < ALL(SELECT "comments".rating FROM "comments" WHERE "comments".rating > 6);', $order12);
        $order13 = DB::select('WITH commentdisk as (
                               SELECT disk_id FROM "comments"
                               UNION SELECT disk.id FROM DISK),
                               commentclient as(
                                SELECT client_id FROM "comments"
                                UNION SELECT client.id FROM client)
                            SELECT "comments".id, disk_id, client_id FROM "comments"
                            WHERE disk_id IN (SELECT * FROM commentdisk) AND client_id IN (SELECT * FROM commentclient);
            ');
        dump('WITH commentdisk as (
                               SELECT disk_id FROM "comments"
                               UNION SELECT disk.id FROM DISK),
                               commentclient as(
                                SELECT client_id FROM "comments"
                                UNION SELECT client.id FROM client)
                            SELECT "comments".id, disk_id, client_id FROM "comments"
                            WHERE disk_id IN (SELECT * FROM commentdisk) AND client_id IN (SELECT * FROM commentclient);', $order13);
        $order14 = DB::select('WITH commentdisk as (
                               SELECT disk_id FROM "comments"
                                INTERSECT SELECT disk.id FROM DISK),
                               commentclient as(
                                SELECT client_id FROM "comments"
                                INTERSECT SELECT client.id FROM client)
                            SELECT "comments".id, disk_id, client_id FROM "comments"
                            WHERE disk_id IN (SELECT * FROM commentdisk) AND client_id IN (SELECT * FROM commentclient);');
        dump('WITH commentdisk as (
                               SELECT disk_id FROM "comments"
                                INTERSECT SELECT disk.id FROM DISK),
                               commentclient as(
                                SELECT client_id FROM "comments"
                                INTERSECT SELECT client.id FROM client)
                            SELECT "comments".id, disk_id, client_id FROM "comments"
                            WHERE disk_id IN (SELECT * FROM commentdisk) AND client_id IN (SELECT * FROM commentclient);', $order14);
        $order15 = DB::select('WITH commentdisk as (
                               SELECT disk_id FROM "comments"
                                EXCEPT SELECT disk.id FROM DISK),
                               commentclient as(
                                SELECT client_id FROM "comments"
                                EXCEPT SELECT client.id FROM client)
                            SELECT "comments".id, disk_id, client_id FROM "comments"
                            WHERE disk_id IN (SELECT * FROM commentdisk) AND client_id IN (SELECT * FROM commentclient);');
        dump('WITH commentdisk as (
                               SELECT disk_id FROM "comments"
                                EXCEPT SELECT disk.id FROM DISK),
                               commentclient as(
                                SELECT client_id FROM "comments"
                                EXCEPT SELECT client.id FROM client)
                            SELECT "comments".id, disk_id, client_id FROM "comments"
                            WHERE disk_id IN (SELECT * FROM commentdisk) AND client_id IN (SELECT * FROM commentclient);', $order15);
        $order16 = DB::select('WITH commentdisk as (
                               SELECT disk_id FROM "comments"
                                UNION ALL SELECT disk.id FROM DISK),
                               commentclient as(
                                SELECT client_id FROM "comments"
                                UNION ALL SELECT client.id FROM client)
                            SELECT "comments".id, disk_id, client_id FROM "comments"
                            WHERE disk_id IN (SELECT * FROM commentdisk) AND client_id IN (SELECT * FROM commentclient);');
        dump('WITH commentdisk as (
                               SELECT disk_id FROM "comments"
                                UNION ALL SELECT disk.id FROM DISK),
                               commentclient as(
                                SELECT client_id FROM "comments"
                                UNION ALL SELECT client.id FROM client)
                            SELECT "comments".id, disk_id, client_id FROM "comments"
                            WHERE disk_id IN (SELECT * FROM commentdisk) AND client_id IN (SELECT * FROM commentclient);', $order16);
    }
}
