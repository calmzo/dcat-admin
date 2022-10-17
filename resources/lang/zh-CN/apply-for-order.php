<?php



return [
    'labels' => [
        'ApplyForOrder' => '物料申领单',
    ],
    'fields' => [
        'order_no' => '订单单号',
        'created_at' => '业务日期',
        'with_order.order_no' => "相关单据",
        'apply_user.name' => '审批人',
        'other' => '备注',
    ],
    'options' => [
    ],
];
