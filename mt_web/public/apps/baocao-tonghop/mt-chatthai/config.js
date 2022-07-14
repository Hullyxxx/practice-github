rang_date_option("#range_date")
select_1_option("#loaichatthai_id", "--Loại chất thải--", api + "option-loaichatthai", "name")
select_1_option("#trangthai_tontai_id", "--Trạng thái tồn tại--", api + "option-trangthai-tontai", "name")

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_chatthai_table_dom")
var url_indexid = api_admin_web + "mt-chatthai-indexid"

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
            let data_fk_1 = data.data.list_mt_view_chitiet_chatthai_nguyhai
            let data_fk_2 = data.data.list_mt_chitietsodangki_chunguonthai
            let data_fk_3 = data.data.list_mt_hopdong_thugom_xuly_chatthai_phatsinh

            $("#list_mt_chitiet_chatthai_nguyhai_tbody").html(list_fk(data_fk_1));
            $("#list_mt_chitiet_sodangki_chunguonthai_tbody").html(list_fk(data_fk_2));
            $("#list_mt_hopdong_thugom_xuly_chatthai_phatsinh_tbody").html(list_fk(data_fk_3));

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event("resize"));
            });
        }
    })
}
