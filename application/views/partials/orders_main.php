<?php

foreach ($orders as $order) { ?>
    <tr>
        <td><a href="/admins/show_order/<?= $order['order_id'] ?>"><?= $order['order_id'] ?></td>
        <td><?= $order['customer_name'] ?></td>
        <td><?= $order['order_date'] ?></td>
        <td><?= $order['billing_address'] ?></td>
        <td>$<?= $order['total'] ?></td>
        <td>
            <select name='status' class='form-control'>
                <option value='shipped'>Shipped</option>
                <option value='in_process'>Order in process</option>
                <option value='cancelled'>Cancelled</option>
            </select>
        </td>
    </tr>
<?php } ?>