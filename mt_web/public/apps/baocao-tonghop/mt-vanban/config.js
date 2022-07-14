rang_date_option("#range_date")
select_1_option("#cate_table_id", "--Cate table--", api + "", "name")
select_1_option("#donvi_quanly_id", "--Đơn vị quản lý--", api + "donvi-quanly", "name")
select_1_option("#dinhkem_id", "--Đính kèm--", api + "dinhkem-option", "name_file")
select_1_option("#chucvu_id", "--Chức vụ--", api + "chucvu-option", "name")
select_1_option("#loaivanban_id", "--Loại văn bản--", api + "loaivanban-option", "name")

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_vanban_table_dom")
var url_indexid = api_admin_web + "mt-vanban-indexid"

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
            let data_fk_2 = data.data.list_mt_giayphep_quanly_chatthainguyhai

            $("#list_enterprise_tbody").html(list_fk(data_fk_1));
            $("#list_mt_giayphep_quanly_chatthainguyhai_tbody").html(list_fk(data_fk_2));

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event("resize"));
            });
        }
    })
}
