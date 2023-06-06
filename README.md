<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## laravel dependences

Before creating your first Laravel project, you should ensure that your local machine has PHP and Composer installed and also xaamp server.

## vs code Extensions for laravel project

php IntelliSense

php Namespace Resolver (mehedi hassan)

laravel Extra Intellisense (amir)

laravel-blade (christian howe)

laravel blade snippets (winnie lin)

laravel goto view (codingyu)

# Laravel Folders and File Structure

1: Model Folder - Database/SQL quries Handling files

2: Controller File - Business Logic Files

3: View Folder - HTML Files

4: Routing Folder - URL Defining files

5: Assets Folder/Public Folder - Images/fonts/Music/videos file /css/javaScript

# Larael Basic Routing 

the routing is used in laraval for creat links and url

```
Route::get('/post',function (){
    return view('post');
});
```

# php artican routes commands

1: php artisan route -h



(this will show the tree command of route route:cache,route:clear,route:list)(cache will creat cache file for faster route registration)
(clear will reomve the cache file and list will show the registereds routes)

php artisan route:list --except-vendor ( only show the routes which creatred my yourself)

php artisan route:list --path=post (replace post with you want to search any specifice routes)

# laraval route parameters:

we can pass any specifice paramenter values like number,string, special character

Sometimes you will need to capture segments of the URI within your route. For example, you may need to capture a user's ID from the URL. You may do so by defining route parameters:

```
Route::get('/user/{id}', function (string $id) {
    return 'User '.$id;
});

```
