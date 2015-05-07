<?php
foreach ($orders as $order) { 

    switch($order['status']){
        case 'in process': 
            $status = 'In Process';
            $value1 = 'Shipped';
            $value2 = 'Cancelled';
        break;
        case 'shipped': 
            $status = 'Shipped';
            $value1 = 'In Process';
            $value2 = 'Cancelled';
        break;
        case 'cancelled': 
            $status = 'Cancelled';
            $value1 = 'In Process';
            $value2 = 'Shipped';
        break;
    } ?>

            <tr>
                <td><a href="/admins/show_order/<?= $order['order_id'] ?>"><?= $order['order_id'] ?></td>
                <td><?= $order['customer_name'] ?></td>
                <td><?= $order['order_date'] ?></td>
                <td><?= $order['billing_address'] ?></td>
                <td>$<?= $order['total'] ?></td>
                <td>
                    <form action='/admins/change_order_status' class='order_status'>
                        <select name='status' class='form-control'>
                            <option value='<?= $status ?>'><?= $status ?></option>
                            <option value='<?= $value1 ?>'><?= $value1 ?></option>
                            <option value='<?= $value2 ?>'><?= $value2 ?></option>
                            <input type='hidden' name='order_id' value='<?= $order['order_id'] ?>'>
                        </select>
                    </form>
                </td>
            </tr>

<?php } ?>