<?php



return [
    'labels' => [
        'SaleOutOrder' => '客户出货单',
    ],
    'fields' => [
        'order_no' => '订单单号',
        'created_at' => '业务日期',
        'status_str' => '单据状态',
        'with_order.order_no' => "相关单据",
        'customer.name' => '客户',
        'address.address' => '地址',
        'drawee.name' => '付款人',
        'other' => '备注',
    ],
    'options' => [
    ],
];
