rang_date_option("#range_date")
select_1_option("#mt_giayphep_quanly_chatthainguyhai_id", "--GPQL chất thải nguy hại--", api_admin_web + "option-mt-giayphep-quanly-chatthainguyhai", "maso_quanlyctnh")
select_1_option("#loaihethong_xuly_id", "--Loại hệ thống xử lý--", api + "option-loaihethong-xuly", "name")
select_1_option("#trangthai_tontai_id", "--Trạng thái tồn tại--", api + "option-trangthai-tontai", "name")

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_chatthai_nguyhai_table_dom")
var url_indexid = api_admin_web + "mt-chatthai-nguyhai-indexid"

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
            let data_fk_1 = data.data.list_mt_giayphep_quanly_chatthainguyhai
            let data_fk_2 = data.data.list_mt_chitiet_chatthai_nguyhai

            $("#list_mt_giayphep_quanly_chatthainguyhai_tbody").html(list_fk(data_fk_1));
            $("#list_mt_chitiet_chatthai_nguyhai_tbody").html(list_fk(data_fk_2));

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event("resize"));
            });
        }
    })
}
