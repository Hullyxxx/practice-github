rang_date_option("#range_date")
select_1_option("#enterprise_id", "--Doanh nghiệp--", api + "enterprise-option", "name")
select_1_option("#donvi_capphep_id", "--Đơn vị cấp phép--", api + "donvi-capphep", "name")
select_1_option("#loaibiendong_id", "--Loại biến động--", api + "loaibiendong-option", "name")
select_1_option("#old_id", "--Mã cũ--", api_admin_web + "option-mt-giayphep-quanly-chatthainguyhai-old", "maso_quanlyctnh")

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_giayphep_quanly_chatthainguyhai_table_dom")
var url_indexid = api_admin_web + "mt-giayphep-quanly-chatthainguyhai-indexid"

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
            let data_fk_1 = data.data.list_enterprise
            let data_fk_2 = data.data.list_mt_chatthai_nguyhai
            let data_fk_3 = data.data.list_mt_coso_xuly_chatthai
            let data_fk_4 = data.data.list_mt_thietbi_quanly

            $("#list_enterprise_tbody").html(list_fk(data_fk_1));
            $("#list_mt_chatthai_nguyhai_tbody").html(list_fk(data_fk_2));
            $("#list_mt_coso_xuly_chatthai_tbody").html(list_fk(data_fk_3));
            $("#list_mt_thietbi_quanly_tbody").html(list_fk(data_fk_4));

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event("resize"));
            });
        }
    })
}
