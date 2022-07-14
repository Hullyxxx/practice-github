/*-- Dom enterprise function --*/ 
function list_fk_enterprise(data_fk) {
    let string_table_fk = ""
    if (data_fk == null) {
        string_table_fk += "<div class='text-danger'>Không có thông tin liên quan</div>";
    } else {
        let data_fk_json = JSON.parse(data_fk);
        data_fk_json.forEach((ele) => {
            string_table_fk += `<p class="mb-1 text-16" >
                                    <a href='` + ele.url + `' target='_blank' style='color:#2C3639 !important'>
                                        <i class='fa fa-link'></i>
                                        ` + ele.name + `
                                    </a>
                                </p>`;
        });
    }
    return string_table_fk
}

/* Get page id */
var page_url = window.location.href
var page_id = page_url.split('=')[1]

/*--- Setup Datatable ---*/
var url_indexid = api_admin_web + "enterprise-indexid"

$.ajax({
    type: 'GET',
    url: api + 'enterprise-indexid',
    data: {
        id: page_id
    },
    dataType: 'json',
    success: function (data) {
        /* Custom Blade for Modal Body details */
        let list_mt_suco_moitruong = data.data.list_mt_suco_moitruong
        let list_mt_giayphep_quanly_chatthainguyhai = data.data.list_mt_giayphep_quanly_chatthainguyhai
        let list_mt_coso_onmt = data.data.list_mt_coso_onmt
        let list_mt_diemnong = data.data.list_mt_diemnong
        let list_mt_phi_bvmt = data.data.list_mt_phi_bvmt
        let list_mt_baocao_congtac_bvmt = data.data.list_mt_baocao_congtac_bvmt
        let list_mt_khuvuc_baoton_sinhthai = data.data.list_mt_khuvuc_baoton_sinhthai
        let list_mt_diem_sinhvat = data.data.list_mt_diem_sinhvat
        let list_mt_duan = data.data.list_mt_duan
        let list_mt_vung_sinhthai = data.data.list_mt_vung_sinhthai
        let list_mt_coso_xuly_chatthai = data.data.list_mt_coso_xuly_chatthai
        let list_mt_thietbi_quanly = data.data.list_mt_thietbi_quanly
        let list_mt_hoso_thutuc_hanhchinh = data.data.list_mt_hoso_thutuc_hanhchinh
        let list_mt_bienban_thanhtrakiemtra = data.data.list_mt_bienban_thanhtrakiemtra
        let list_mt_so_dangki_nguonchuthai = data.data.list_mt_so_dangki_nguonchuthai
        let list_mt_coso_nhapkhau_phelieu = data.data.list_mt_coso_nhapkhau_phelieu
        let list_mt_hopdong_thugom_xuly_chatthai_phatsinh = data.data.list_mt_hopdong_thugom_xuly_chatthai_phatsinh
        let list_mt_nguonthai = data.data.list_mt_nguonthai
        
        $("#list_mt_suco_moitruong_tbody").html(list_fk_enterprise(list_mt_suco_moitruong));
        $("#list_mt_giayphep_quanly_chatthainguyhai_tbody").html(list_fk_enterprise(list_mt_giayphep_quanly_chatthainguyhai));
        $("#list_mt_coso_onmt_tbody").html(list_fk_enterprise(list_mt_coso_onmt));
        $("#list_mt_diemnong_tbody").html(list_fk_enterprise(list_mt_diemnong));
        $("#list_mt_phi_bvmt_tbody").html(list_fk_enterprise(list_mt_phi_bvmt));
        $("#list_mt_baocao_congtac_bvmt_tbody").html(list_fk_enterprise(list_mt_baocao_congtac_bvmt));
        $("#list_mt_khuvuc_baoton_sinhthai_tbody").html(list_fk_enterprise(list_mt_khuvuc_baoton_sinhthai));
        $("#list_mt_diem_sinhvat_tbody").html(list_fk_enterprise(list_mt_diem_sinhvat));
        $("#list_mt_duan_tbody").html(list_fk_enterprise(list_mt_duan));
        $("#list_mt_vung_sinhthai_tbody").html(list_fk_enterprise(list_mt_vung_sinhthai));
        $("#list_mt_coso_xuly_chatthai_tbody").html(list_fk_enterprise(list_mt_coso_xuly_chatthai));
        $("#list_mt_thietbi_quanly_tbody").html(list_fk_enterprise(list_mt_thietbi_quanly));
        $("#list_mt_hoso_thutuc_hanhchinh_tbody").html(list_fk_enterprise(list_mt_hoso_thutuc_hanhchinh));
        $("#list_mt_bienban_thanhtrakiemtra_tbody").html(list_fk_enterprise(list_mt_bienban_thanhtrakiemtra));
        $("#list_mt_so_dangki_nguonchuthai_tbody").html(list_fk_enterprise(list_mt_so_dangki_nguonchuthai));
        $("#list_mt_coso_nhapkhau_phelieu_tbody").html(list_fk_enterprise(list_mt_coso_nhapkhau_phelieu));
        $("#list_mt_hopdong_thugom_xuly_chatthai_phatsinh_tbody").html(list_fk_enterprise(list_mt_hopdong_thugom_xuly_chatthai_phatsinh));
        $("#list_mt_nguonthai_tbody").html(list_fk_enterprise(list_mt_nguonthai));
        }
    })
