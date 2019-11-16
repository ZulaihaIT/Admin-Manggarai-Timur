<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
// $route['default_controller'] = 'kategori';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//dashboard
$route['dashboard'] = 'welcome/index/';

//news
$route['news'] = 'welcome/news';
$route['daftar-berita'] = 'news/daftar_berita';
$route['update-berita/(:any)'] = 'news/edit_berita/$1';


//kategori
$route['kategori'] = 'Kategori/index/';
$route['simpan-kategori'] = 'Kategori/simpan_kategori/';
$route['hapus-kategori'] = 'Kategori/hapus_kategori/';
$route['kategori-id/(:any)'] = 'Kategori/select_kategori_id/$1';
$route['update-kategori'] = 'Kategori/update_kategori/';
//sub
$route['sub'] = 'Sub/index/';
$route['simpan-sub'] = 'Sub/simpan_sub/';
$route['hapus-sub'] = 'Sub/hapus_sub/';
$route['sub-id/(:any)'] = 'Sub/select_sub_id/$1';
$route['update-sub'] = 'Sub/update_sub/';

//gambar
$route['gambar'] = 'gambar/index/';
$route['simpan-gambar'] = 'gambar/simpan_gambar/';
$route['hapus-gambar'] = 'gambar/hapus_gambar/';
$route['gambar-id/(:any)'] = 'gambar/select_gambar_id/$1';
$route['update-gambar'] = 'gambar/update_gambar/';
