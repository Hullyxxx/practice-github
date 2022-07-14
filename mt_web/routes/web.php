<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('index', function () {
    return view('index');
});

Route::get('map', function () {
    return view('map');
});

Route::get('catalog-search', 'App\Http\Controllers\tim_kiem\catalog_search_report@index');
Route::get('catalog-search-report', 'App\Http\Controllers\tim_kiem\get_search@index');
Route::get('catalog-search-filter', 'App\Http\Controllers\tim_kiem\get_search@searchfilter');

/* Doanh nghiệp */
// Route::get('sample-search', 'App\Http\Controllers\baocao_tonghop\sample_report@search');
Route::get('enterprise-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\enterprise_report@detail');

/* Báo cáo tổng hợp */
Route::get('sample-search', 'App\Http\Controllers\baocao_tonghop\sample_report@search');
Route::get('sample-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\sample_report@detail');

/* Quyết định xử lý */
Route::get('mt-quyetdinh-xuly-search', 'App\Http\Controllers\baocao_tonghop\mt_quyetdinh_xuly_report@search');
Route::get('mt-quyetdinh-xuly-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_quyetdinh_xuly_report@detail');

/* Quyết định di dời */
Route::get('mt-quyetdinh-didoi-search', 'App\Http\Controllers\baocao_tonghop\mt_quyetdinh_didoi_report@search');
Route::get('mt-quyetdinh-didoi-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_quyetdinh_didoi_report@detail');

/* Hồ sơ thủ tục hành chính */
Route::get('mt-hoso-thutuc-hanhchinh-search', 'App\Http\Controllers\baocao_tonghop\mt_hoso_thutuc_hanhchinh_report@search');
Route::get('mt-hoso-thutuc-hanhchinh-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_hoso_thutuc_hanhchinh_report@detail');

/* Kết luận thanh tra kiểm tra */
Route::get('mt-ketluan-thanhtrakiemtra-search', 'App\Http\Controllers\baocao_tonghop\mt_ketluan_thanhtrakiemtra_report@search');
Route::get('mt-ketluan-thanhtrakiemtra-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_ketluan_thanhtrakiemtra_report@detail');

/* Biên bản thanh tra kiểm tra */
Route::get('mt-bienban-thanhtrakiemtra-search', 'App\Http\Controllers\baocao_tonghop\mt_bienban_thanhtrakiemtra_report@search');
Route::get('mt-bienban-thanhtrakiemtra-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_bienban_thanhtrakiemtra_report@detail');

/* Chi tiết phí bảo vệ môi trường */
Route::get('mt-chitiet-phi-bvmt-search', 'App\Http\Controllers\baocao_tonghop\mt_chitiet_phi_bvmt_report@search');
Route::get('mt-chitiet-phi-bvmt-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_chitiet_phi_bvmt_report@detail');

/* Sinh vật */
Route::get('mt-sinhvat-search', 'App\Http\Controllers\baocao_tonghop\mt_sinhvat_report@search');
Route::get('mt-sinhvat-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_sinhvat_report@detail');

/* Nguồn thải */
Route::get('mt-nguonthai-search', 'App\Http\Controllers\baocao_tonghop\mt_nguonthai_report@search');
Route::get('mt-nguonthai-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_nguonthai_report@detail');

/* Công suất xử lý */
Route::get('mt-congsuat-xuly-search', 'App\Http\Controllers\baocao_tonghop\mt_congsuat_xuly_report@search');
Route::get('mt-congsuat-xuly-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_congsuat_xuly_report@detail');

/* Báo cáo khối lượng phát sinh chất thải */
Route::get('mt-baocao-khoiluong-phatsinh-chatthai-search', 'App\Http\Controllers\baocao_tonghop\mt_baocao_khoiluong_phatsinh_chatthai_report@search');
Route::get('mt-baocao-khoiluong-phatsinh-chatthai-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_baocao_khoiluong_phatsinh_chatthai_report@detail');

/* Sổ đăng ký nguồn chủ thải */
Route::get('mt-so-dangki-nguonchuthai-search', 'App\Http\Controllers\baocao_tonghop\mt_so_dangki_nguonchuthai_report@search');
Route::get('mt-so-dangki-nguonchuthai-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_so_dangki_nguonchuthai_report@detail');

/* Cơ sở nhập khẩu phế liệu */
Route::get('mt-coso-nhapkhau-phelieu-search', 'App\Http\Controllers\baocao_tonghop\mt_coso_nhapkhau_phelieu_report@search');
Route::get('mt-coso-nhapkhau-phelieu-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_coso_nhapkhau_phelieu_report@detail');

/* Quyết định xử lý xử phạt */
Route::get('mt-quyetdinh-xuly-xuphat-search', 'App\Http\Controllers\baocao_tonghop\mt_quyetdinh_xuly_xuphat_report@search');
Route::get('mt-quyetdinh-xuly-xuphat-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_quyetdinh_xuly_xuphat_report@detail');

/* Chi tiết sổ đăng ký nguồn chủ thải */
Route::get('mt-chitietsodangki-chunguonthai-search', 'App\Http\Controllers\baocao_tonghop\mt_chitietsodangki_chunguonthai_report@search');
Route::get('mt-chitietsodangki-chunguonthai-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_chitietsodangki_chunguonthai_report@detail');

/* Chi tiết nhập phế liệu */
Route::get('mt-chitiet-nhapphelieu-search', 'App\Http\Controllers\baocao_tonghop\mt_chitiet_nhapphelieu_report@search');
Route::get('mt-chitiet-nhapphelieu-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_chitiet_nhapphelieu_report@detail');

/* Báo cáo nhập phế liệu */
Route::get('mt-baocao-nhap-phelieu-search', 'App\Http\Controllers\baocao_tonghop\mt_baocao_nhap_phelieu_report@search');
Route::get('mt-baocao-nhap-phelieu-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_baocao_nhap_phelieu_report@detail');

/* Chi tiết báo cáo nhập phế liệu */
Route::get('mt-chitiet-baocao-nhap-phelieu-search', 'App\Http\Controllers\baocao_tonghop\mt_chitiet_baocao_nhap_phelieu_report@search');
Route::get('mt-chitiet-baocao-nhap-phelieu-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_chitiet_baocao_nhap_phelieu_report@detail');

/* Hợp đồng thu gom xử lý chất thải phát sinh */
Route::get('mt-hopdong-thugom-xuly-chatthai-phatsinh-search', 'App\Http\Controllers\baocao_tonghop\mt_hopdong_thugom_xuly_chatthai_phatsinh_report@search');
Route::get('mt-hopdong-thugom-xuly-chatthai-phatsinh-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_hopdong_thugom_xuly_chatthai_phatsinh_report@detail');

/* Chi tiết chất thải nguy hại */
Route::get('mt-chitiet-chatthai-nguyhai-search', 'App\Http\Controllers\baocao_tonghop\mt_chitiet_chatthai_nguyhai_report@search');
Route::get('mt-chitiet-chatthai-nguyhai-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_chitiet_chatthai_nguyhai_report@detail');

/* Hùng */

/* Báo cáo tổng hợp - Chi tiết báo cáo khối lượng */
Route::get('mt-chitiet-baocao-khoiluong-search', 'App\Http\Controllers\baocao_tonghop\mt_chitiet_baocao_khoiluong_report@search');
Route::get('mt-chitiet-baocao-khoiluong-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_chitiet_baocao_khoiluong_report@detail');

/* Báo cáo tổng hợp - Báo cáo công tác BVMT */
Route::get('mt-baocao-congtac-bvmt-search', 'App\Http\Controllers\baocao_tonghop\mt_baocao_congtac_bvmt_report@search');
Route::get('mt-baocao-congtac-bvmt-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_baocao_congtac_bvmt_report@detail');

/* Báo cáo tổng hợp - Chất thải */
Route::get('mt-chatthai-search', 'App\Http\Controllers\baocao_tonghop\mt_chatthai_report@search');
Route::get('mt-chatthai-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_chatthai_report@detail');

/* Báo cáo tổng hợp - Chất thải nguy hại */
Route::get('mt-chatthai-nguyhai-search', 'App\Http\Controllers\baocao_tonghop\mt_chatthai_nguyhai_report@search');
Route::get('mt-chatthai-nguyhai-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_chatthai_nguyhai_report@detail');

/* Báo cáo tổng hợp - Cơ sở ô nhiễm môi trường */
Route::get('mt-coso-onmt-search', 'App\Http\Controllers\baocao_tonghop\mt_coso_onmt_report@search');
Route::get('mt-coso-onmt-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_coso_onmt_report@detail');

/* Báo cáo tổng hợp - Cơ sở xử lý chất thải */
Route::get('mt-coso-xuly-chatthai-search', 'App\Http\Controllers\baocao_tonghop\mt_coso_xuly_chatthai_report@search');
Route::get('mt-coso-xuly-chatthai-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_coso_xuly_chatthai_report@detail');

/* Báo cáo tổng hợp - Điểm sinh vật */
Route::get('mt-diem-sinhvat-search', 'App\Http\Controllers\baocao_tonghop\mt_diem_sinhvat_report@search');
Route::get('mt-diem-sinhvat-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_diem_sinhvat_report@detail');

/* Báo cáo tổng hợp - Điểm nóng */
Route::get('mt-diemnong-search', 'App\Http\Controllers\baocao_tonghop\mt_diemnong_report@search');
Route::get('mt-diemnong-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_diemnong_report@detail');

/* Báo cáo tổng hợp - Đoàn thanh tra kiểm tra */
Route::get('mt-doanthanhtra-kiemtra-search', 'App\Http\Controllers\baocao_tonghop\mt_doanthanhtra_kiemtra_report@search');
Route::get('mt-doanthanhtra-kiemtra-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_doanthanhtra_kiemtra_report@detail');

/* Báo cáo tổng hợp - Dự án */
Route::get('mt-duan-search', 'App\Http\Controllers\baocao_tonghop\mt_duan_report@search');
Route::get('mt-duan-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_duan_report@detail');

/* Báo cáo tổng hợp - Giấy phép quản lý chất thải nguy hại */
Route::get('mt-giayphep-quanly-chatthainguyhai-search', 'App\Http\Controllers\baocao_tonghop\mt_giayphep_quanly_chatthainguyhai_report@search');
Route::get('mt-giayphep-quanly-chatthainguyhai-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_giayphep_quanly_chatthainguyhai_report@detail');

/* Báo cáo tổng hợp - Kế hoạch bảo vệ môi trường */
Route::get('mt-kehoach-bvmt-search', 'App\Http\Controllers\baocao_tonghop\mt_kehoach_bvmt_report@search');
Route::get('mt-kehoach-bvmt-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_kehoach_bvmt_report@detail');

/* Báo cáo tổng hợp - Kế hoạch Xử lý điểm nóng */
Route::get('mt-kehoach-xuly-diemnong-search', 'App\Http\Controllers\baocao_tonghop\mt_kehoach_xuly_diemnong_report@search');
Route::get('mt-kehoach-xuly-diemnong-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_kehoach_xuly_diemnong_report@detail');

/* Báo cáo tổng hợp - Khu vực bảo tồn sinh thái */
Route::get('mt-khuvuc-baoton-sinhthai-search', 'App\Http\Controllers\baocao_tonghop\mt_khuvuc_baoton_sinhthai_report@search');
Route::get('mt-khuvuc-baoton-sinhthai-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_khuvuc_baoton_sinhthai_report@detail');

/* Báo cáo tổng hợp - Phí bảo vệ môi trường */
Route::get('mt-phi-bvmt-search', 'App\Http\Controllers\baocao_tonghop\mt_phi_bvmt_report@search');
Route::get('mt-phi-bvmt-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_phi_bvmt_report@detail');

/* Báo cáo tổng hợp - Sự cố môi trường */
Route::get('mt-suco-moitruong-search', 'App\Http\Controllers\baocao_tonghop\mt_suco_moitruong_report@search');
Route::get('mt-suco-moitruong-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_suco_moitruong_report@detail');

/* Báo cáo tổng hợp - Thiết bị quản lý */
Route::get('mt-thietbi-quanly-search', 'App\Http\Controllers\baocao_tonghop\mt_thietbi_quanly_report@search');
Route::get('mt-thietbi-quanly-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_thietbi_quanly_report@detail');

/* Báo cáo tổng hợp - Tư liệu môi trường */
Route::get('mt-tulieu-moitruong-search', 'App\Http\Controllers\baocao_tonghop\mt_tulieu_moitruong_report@search');
Route::get('mt-tulieu-moitruong-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_tulieu_moitruong_report@detail');

/* Báo cáo tổng hợp - Văn bản */
Route::get('mt-vanban-search', 'App\Http\Controllers\baocao_tonghop\mt_vanban_report@search');
Route::get('mt-vanban-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_vanban_report@detail');

/* Báo cáo tổng hợp - Vùng sinh thái */
Route::get('mt-vung-sinhthai-search', 'App\Http\Controllers\baocao_tonghop\mt_vung_sinhthai_report@search');
Route::get('mt-vung-sinhthai-detail/{id?}', 'App\Http\Controllers\baocao_tonghop\mt_vung_sinhthai_report@detail');

/*Example Map*/
Route::get('all-marker', 'App\Http\Controllers\map\mapShowGeom@map_id');
Route::get('row_map/{id?}/{name_table?}', 'App\Http\Controllers\map\mapGeomZoom@mapindex_id');
Route::get('search-map', 'App\Http\Controllers\map\mapSearchGeom@index_search');
