@extends('master-baocao-tonghop')

@section('custom-css')
@endsection

@section('current_page_name')
    Báo cáo tổng hợp
@endsection

@section('parent_page')
    Doanh nghiệp
@endsection

@section('current_page')
    Báo cáo tổng hợp
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row mb-4 mt-4">
                        <div class="col-xl-12 text-center">
                            <div class="card o-hidden mb-4">
                                <div class="card-header purple-500">
                                    <div class="d-inline-block">
                                        <i class="i-Big-Data text-20 mr-2 text-white"></i>
                                        <span class="text-18 text-white">Thông tin chi tiết doanh nghiệp</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (count($result) > 0)
                        @foreach ($result as $key)
                            <div class="row my-xl-4">
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <div class="card-body p-3">
                                            <h6 class="text-20 text-purple line-height-1">Tên doanh nghiệp</h6>
                                            <p class="text-16 m-1">
                                                {{ $key['name'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <div class="card-body p-3">
                                            <h6 class="text-20 text-purple line-height-1">Loại doanh nghiệp</h6>
                                            <p class="m-1 text-16">
                                                {{ $key['enterprise_type_name'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <div class="card-body p-3">
                                            <h6 class="text-20 text-purple line-height-1">Tên quận/huyện</h6>
                                            <p class="m-1 text-16">
                                                {{ $key['district_name'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <div class="card-body p-3">
                                            <h6 class="text-20 text-purple line-height-1">Hành nghề</h6>
                                            <p class="m-1 text-16">
                                                {{ $key['hanhnghe_name'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <div class="card-body p-3">
                                            <h6 class="text-20 text-purple line-height-1">Địa bàn</h6>
                                            <p class="m-1 text-16">
                                                {{ $key['diaban_name'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <div class="card-body p-3">
                                            <h6 class="text-20 text-purple line-height-1">Địa chỉ</h6>
                                            <p class="m-1 text-16">
                                                {{ $key['address'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <div class="card-body p-3">
                                            <h6 class="text-20 text-purple line-height-1">Số điện thoại</h6>
                                            <p class="m-1 text-16">
                                                {{ $key['phone'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <div class="card-body p-3">
                                            <h6 class="text-20 text-purple line-height-1">Tin</h6>
                                            <p class="m-1 text-16">
                                                {{ $key['tin'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <div class="card-body p-3">
                                            <h6 class="text-20 text-purple line-height-1">Fax</h6>
                                            <p class="m-1 text-16">
                                                {{ $key['fax'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <div class="card-body p-3">
                                            <h6 class="text-20 text-purple line-height-1">Email</h6>
                                            <p class="m-1 text-16">
                                                {{ $key['email'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <div class="card-body p-3">
                                            <h6 class="text-20 text-purple line-height-1">Số tài khoản</h6>
                                            <p class="m-1 text-16">
                                                {{ $key['accountnumber'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <div class="card-body p-3">
                                            <h6 class="text-20 text-purple line-height-1">Hoạt động</h6>
                                            <p class="m-1 text-16">
                                                {{ $key['active'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <div class="card-body p-3">
                                            <h6 class="text-20 text-purple line-height-1">Nhân viên</h6>
                                            <p class="m-1 text-16">
                                                {{ $key['employees'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <div class="card-body p-3">
                                            <h6 class="text-18 text-purple line-height-1">Tổng mức đầu tư</h6>
                                            <p class="m-1">
                                                {{ $key['totalinvestment'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <div class="card-body p-3">
                                            <h6 class="text-20 text-purple line-height-1">Nghề nghiệp</h6>
                                            <p class="m-1 text-16">
                                                {{ $key['profession'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <div class="card-body p-3">
                                            <h6 class="text-20 text-purple line-height-1">Đại lý</h6>
                                            <p class="m-1 text-16">
                                                {{ $key['agent'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <div class="card-body p-3">
                                            <h6 class="text-20 text-purple line-height-1">Chức danh</h6>
                                            <p class="m-1 text-16">
                                                {{ $key['title'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <h6 class="text-20 text-purple line-height-1 mb-3">Số giấy phép kinh doanh</h6>
                                            <p class="mb-1 text-16">
                                                {{ $key['so_giay_phep_kinhdoanh'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card mb-4">
                                        <div class="card-body p-3">
                                            <h6 class="text-20 text-purple line-height-1">Ghi chú</h6>
                                            <p class="m-1 text-16">
                                                {{ $key['notes'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7" class="text-center text-bold text-primary">Không tìm thấy kết quả</td>
                        </tr>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-4">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row mb-4 mt-4">
                        <div class="col-xl-12 text-center">
                            <div class="card o-hidden mb-4">
                                <div class="card-header purple-500">
                                    <div class="d-inline-block">
                                        <i class="text-20 mr-2 text-white i-Cloud-Picture"></i>
                                        <span class="text-18 text-white">Thông tin chi tiết doanh nghiệp</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body p-3">
                                    <h6 class="text-20 text-purple line-height-1">Sự cố môi trường</h6>
                                    <div id="list_mt_suco_moitruong_tbody">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body p-3">
                                    <h6 class="text-20 text-purple line-height-1">Giấy phép quản lý chất thải nguy hại</h6>
                                    <div id="list_mt_giayphep_quanly_chatthainguyhai_tbody">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body p-3">
                                    <h6 class="text-20 text-purple line-height-1">Cơ sở ô nhiễm môi trường</h6>
                                    <div id="list_mt_coso_onmt_tbody">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body p-3">
                                    <h6 class="text-20 text-purple line-height-1">Điểm nóng</h6>
                                    <div id="list_mt_diemnong_tbody">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body p-3">
                                    <h6 class="text-20 text-purple line-height-1">Phí bảo vệ môi trường</h6>
                                    <div id="list_mt_phi_bvmt_tbody">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body p-3">
                                    <h6 class="text-20 text-purple line-height-1">Báo cáo công tác bảo vệ môi trường</h6>
                                    <div id="list_mt_baocao_congtac_bvmt_tbody">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body p-3">
                                    <h6 class="text-20 text-purple line-height-1">Khu vực bảo tồn sinh thái</h6>
                                    <div id="list_mt_khuvuc_baoton_sinhthai_tbody">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body p-3">
                                    <h6 class="text-20 text-purple line-height-1">Điểm sinh vật</h6>
                                    <div id="list_mt_diem_sinhvat_tbody">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body p-3">
                                    <h6 class="text-20 text-purple line-height-1">Dự án</h6>
                                    <div id="list_mt_duan_tbody">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body p-3">
                                    <h6 class="text-20 text-purple line-height-1">Vùng sinh thái</h6>
                                    <div id="list_mt_vung_sinhthai_tbody">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body p-3">
                                    <h6 class="text-20 text-purple line-height-1">Cơ sở xử lý chất thải</h6>
                                    <div id="list_mt_coso_xuly_chatthai_tbody">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body p-3">
                                    <h6 class="text-20 text-purple line-height-1">Thiết bị quản lý</h6>
                                    <div id="list_mt_thietbi_quanly_tbody">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body p-3">
                                    <h6 class="text-20 text-purple line-height-1">Hồ sơ thủ tục hành chính</h6>
                                    <div id="list_mt_hoso_thutuc_hanhchinh_tbody">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body p-3">
                                    <h6 class="text-20 text-purple line-height-1">Biên bản thanh tra kiểm tra</h6>
                                    <div id="list_mt_bienban_thanhtrakiemtra_tbody">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body p-3">
                                    <h6 class="text-20 text-purple line-height-1">Sổ đăng ký nguồn chủ thải</h6>
                                    <div id="list_mt_so_dangki_nguonchuthai_tbody">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body p-3">
                                    <h6 class="text-20 text-purple line-height-1">Cơ sở nhập khẩu phế liệu</h6>
                                    <div id="list_mt_coso_nhapkhau_phelieu_tbody">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body p-3">
                                    <h6 class="text-20 text-purple line-height-1">Hợp đồng thu gom xử lý chất thải phát sinh</h6>
                                    <div id="list_mt_hopdong_thugom_xuly_chatthai_phatsinh_tbody">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body p-3">
                                    <h6 class="text-20 text-purple line-height-1">Nguồn thải</h6>
                                    <div id="list_mt_nguonthai_tbody">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{ 'apps/baocao-tonghop/enterprise/config.js' }}"></script>
@endsection
