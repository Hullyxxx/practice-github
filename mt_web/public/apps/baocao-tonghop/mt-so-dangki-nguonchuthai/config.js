rang_date_option("#range_date")
select_1_option("#mt_hoso_thutuc_hanhchinh_id", "--Hồ sơ thủ tục hành chính--", api_admin_web + "option-mt-hoso-thutuc-hanhchinh", "name");
select_1_option("#old_id", "--Sổ đăng ký nguồn chủ thải cũ--", api_admin_web + "option-mt-so-dangki-nguonchuthai-old", "solan_cap");
select_1_option("#enterprise_id", "--Doanh nghiệp--", api + "enterprise-option", "name");
select_1_option("#donvi_capphep_id", "--Đơn vị cấp phép--", api + "donvi-capphep", "name");
select_1_option("#loaibiendong_id", "--Loại biến động--", api + "loaibiendong-option", "name");


/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_so_dangki_nguonchuthai_table_dom")
var url_indexid = api_admin_web + "mt-so-dangki-nguonchuthai-indexid"

function onclick_read_details(url_indexid, obj) {
    $.ajax({
        type: 'GET',
        url: url_indexid,
        data: {
            id: obj.id
        },
        dataType: 'json',
        success: function (data) {
            /* Custom Blade for Modal Body details */
            let data_fk_1 = data.data.list_enterprise;
            let data_fk_2 = data.data.list_mt_hoso_thutuc_hanhchinh;
            let data_fk_3 = data.data.list_mt_so_dangki_nguonchuthai_old;
            let data_fk_4 = data.data.list_mt_chitietsodangki_chunguonthai;

            $("#list_enterprise_tbody").html(list_fk(data_fk_1));
            $("#list_mt_hoso_thutuc_hanhchinh_tbody").html(list_fk(data_fk_2));
            $("#list_mt_so_dangki_nguonchuthai_old_tbody").html(list_fk(data_fk_3));
            $("#list_mt_chitietsodangki_chunguonthai_tbody").html(list_fk(data_fk_4));

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event('resize'));
            });
        }
    })
}
