rang_date_option("#range_date");
select_1_option("#mt_coso_xuly_chatthai_id", "--Cơ sở xử lý chất thải--", api_admin_web + "option-mt-coso-xuly-chatthai", "name");

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_baocao_khoiluong_phatsinh_chatthai_table_dom");
var url_indexid = api_admin_web + "mt-baocao-khoiluong-phatsinh-chatthai-indexid";

function onclick_read_details(url_indexid, obj) {
    $.ajax({
        type: "GET",
        url: url_indexid,
        data: {
            id: obj.id,
        },
        dataType: "json",
        success: function (data) {
            /* Custom Blade for Modal Body details */
            let data_fk_1 = data.data.list_mt_coso_xuly_chatthai;
            let data_fk_2 = data.data.list_mt_chitiet_baocao_khoiluong;

            $("#list_mt_coso_xuly_chatthai_tbody").html(list_fk(data_fk_1));
            $("#list_mt_chitiet_baocao_khoiluong_tbody").html(list_fk(data_fk_2));

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event("resize"));
            });
        },
    });
}
