<?php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Welcome
Breadcrumbs::for('welcome', function (BreadcrumbTrail $trail) {
    $trail->push('首頁', route('welcome'));
});

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->parent('welcome');
    $trail->push('會員中心', route('home'));
});

// Home > modify.user
Breadcrumbs::for('modify.user', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('修改會員資料', route('modify.user'));
});

// Home > modify.pwd
Breadcrumbs::for('modify.user.pwd', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('修改會員密碼', route('modify.user.pwd'));
});

// Home > delete.user
Breadcrumbs::for('delete.user', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('刪除會員帳號', route('delete.user'));
});

// About
Breadcrumbs::for('about', function (BreadcrumbTrail $trail) {
    $trail->parent('welcome');
    $trail->push('關於我們', route('about'));
});





// Home > Blog > [Category]
Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category));
});
