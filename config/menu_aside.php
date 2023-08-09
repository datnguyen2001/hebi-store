<?php

return [
    'admin' => [
        [
            'name' => 'dashboard',
            'title' => 'Tổng quan',
            'icon' => 'bi bi-grid',
            'route' => 'admin.index',
            'submenu' => [],
        ],
        [
            'name' => 'order',
            'title' => 'Quản lý đơn hàng',
            'icon' => 'bi bi-grid',
            'route' => 'admin.order.index',
            'parameters' => ['status' => '0'],
            'submenu' => [],
        ],
        [
            'name' => 'banner',
            'title' => 'Banner hình ảnh',
            'icon' => 'bi bi-grid',
            'route' => null,
            'submenu' => [
                [
                    'title' => 'Danh sách banner',
                    'route' => 'admin.banner.index',
                    'name' => 'index'
                ],
                [
                    'title' => 'Tạo mới',
                    'route' => 'admin.banner.create',
                    'name' => 'create'
                ]
            ],
        ],
        [
            'name' => 'products',
            'title' => 'Quản lý sản phẩm',
            'icon' =>'bi bi-menu-button-wide',
            'route' => null,
            'submenu' => [
                [
                    'title' => 'Danh mục sản phẩm',
                    'route' => 'admin.category.index',
                    'name' => 'category'
                ],
                [
                    'title' => 'Danh sách sản phẩm',
                    'route' => 'admin.products.index',
                    'name' => 'index'
                ],
                [
                    'title' => 'Danh sách flash sale',
                    'route' => 'admin.flash-sale.index',
                    'name' => 'flash_sale'
                ],
//                [
//                    'title' => 'Danh sách đánh giá sản phẩm',
//                    'route' => 'admin.products.reviews',
//                    'parameters' => ['status' => '0'],
//                    'name' => 'review',
//                ],
            ],
        ],
        [
            'name' => 'review',
            'title' => 'Danh sách đánh giá sản phẩm',
            'icon' => 'bi bi-grid',
            'route' => 'admin.products.reviews',
            'parameters' => ['status' => '1'],
            'submenu' => [],
        ],
        [
            'name' => 'blog',
            'title' => 'Quản lý bài viết',
            'icon' => 'bi bi-grid',
            'route' => 'admin.blog.index',
            'submenu' => [],
        ],
        [
            'name' => 'introduce',
            'title' => 'Quản lý website',
            'icon' => 'bi bi-grid',
            'route' => 'admin.introduce.index',
            'submenu' => [],
        ],
    ]
];
