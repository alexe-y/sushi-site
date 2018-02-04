<?php
/**
 * Created by PhpStorm.
 * User: alexe
 * Date: 31.01.2018
 * Time: 18:03
 */

class Order
{
    public static function addOrder($name, $phone, $delivery_date, $user_comment, $delivery_id, $payment_id)
    {
        $db = db::getInstance()->db;
        $result = $db->query('INSERT INTO mg_order (add_date, name_buyer, phone, delivery_date, user_comment, delivery_id, payment_id) VALUES ('.date("Y-m-d H:i:s").', :name, :phone, :delivery_date, :user_comment, :delivery_id, :payment_id)');
        $result->execute(array(
            'name'=>$name,
            'phone'=>$phone,
            'delivery_date'=>$delivery_date,
            'user_comment'=>$user_comment,
            'delivery_id'=>$delivery_id,
            'payment_id'=>$payment_id,
        ));
        return true;
    }

    public static function updateOrder($order){
        $db=db::getInstance()->db;
        $result = $db->prepare("UPDATE mg_order SET updata_date=:update_date, close_date=:close_date, order_content=:order_content, status_id=:status_id WHERE id=:id");
        $result->execute(array(
            'update_date'=>$order['update_date'],
            'close_date'=>$order['close_date'],
            'order_content'=>$order['order_content'],
            'status_id'=>$order['status_id'],
            'id'=>$order['id'],
        ));
        return $result;
    }
}