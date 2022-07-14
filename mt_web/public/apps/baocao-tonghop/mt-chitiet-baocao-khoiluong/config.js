rang_date_option("#range_date")
select_1_option("#mt_baocao_khoiluong_phatsinh_chatthai_id", "--Báo cáo khối lượng phát sinh chất thải--", api_admin_web + "option-mt-baocao-khoiluong-phatsinh-chatthai", "so_baocao")
select_1_option("#loaichatthai_id", "--Loại chất thải--", api + "option-loaichatthai", "name")

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_chitiet_baocao_khoiluong_table_dom")
var url_indexid = api_admin_web + "mt-chitiet-baocao-khoiluong-indexid"

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
            let data_fk_1 = data.data.list_mt_baocao_khoiluong_phatsinh_chatthai

            $("#list_fk_1_tbody").html(list_fk(data_fk_1))

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event('resize'));
            });
        }
    })
}
