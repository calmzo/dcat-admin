<?php



return [
    'labels' => [
        'PurchaseInOrder' => '采购入库单',
    ],

    'fields' => [
        'order_no' => '订单单号',
        'created_at' => '业务日期',
        'status_str' => '单据状态',
        'with_order.order_no' => "相关单据",
        'supplier.name' => '供应商',
        'other' => '备注',
    ],
    'options' => [
    ],
];
