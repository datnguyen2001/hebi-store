<?php

return [
    'admin' => [
        [
            'name' => 'dashboard',
            'title' => 'Tổng quan',
            'icon' => 'bi bi-grid',
            'route' => 'admin.index',
            'submenu' => [],
            'number' => 1
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
//                [
//                    'title' => 'Thêm mới sản phẩm',
//                    'route' => 'admin.products.create',
//                    'name' => 'create',
//                ],
                [
                    'title' => 'Danh sách flash sale',
                    'route' => 'admin.flash-sale.index',
                    'name' => 'flash_sale'
                ],
            ],
            'number' => 9
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
