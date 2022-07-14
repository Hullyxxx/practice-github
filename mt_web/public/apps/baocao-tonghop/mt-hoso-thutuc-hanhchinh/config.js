rang_date_option("#range_date")
select_1_option("#mt_duan_id", "--Dự án--", api_admin_web + "option-mt-duan", "name");
select_1_option("#enterprise_id", "--Doanh nghiệp--", api + "enterprise-option", "name");
select_1_option("#donvi_capphep_id", "--Đơn vị cấp phép--", api + "donvi-capphep", "name");
select_1_option("#donvi_quanly_id", "--Đơn vị quản lý--", api + "donvi-quanly", "name");
select_1_option("#cap_quanly_id", "--Cấp quản lý--", api + "cap-quanly-option", "name");
select_1_option("#loaithutuc_hanhchinh_id", "--Loại thủ tục hành chính--", api + "loaithutuc-hanhchinh", "name");

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_hoso_thutuc_hanhchinh_table_dom");
var url_indexid = api_admin_web + "mt-hoso-thutuc-hanhchinh-indexid";

function onclick_read_details(url_indexid, obj) {
    $.ajax({
        type: 'GET',
        url: url_indexid,
        data: {
            id: obj.id
        },
        dataType: 'json',
        success: function(data) {
            /* Custom Blade for Modal Body details */
          
            let data_fk_1 = data.data.list_mt_duan;
            let data_fk_2 = data.data.list_enterprise;
            let data_fk_3 = data.data.list_mt_coso_nhapkhau_phelieu;
            let data_fk_4 = data.data.list_mt_so_dangki_nguonchuthai;

            $("#list_mt_duan_tbody").html(list_fk(data_fk_1));
            $("#list_enterprise_tbody").html(list_fk(data_fk_2));
            $("#list_mt_coso_nhapkhau_phelieu_tbody").html(list_fk(data_fk_3));
            $("#list_mt_so_dangki_nguonchuthai_tbody").html(list_fk(data_fk_4));
          
            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event("resize"));
            });
        }
    })
}