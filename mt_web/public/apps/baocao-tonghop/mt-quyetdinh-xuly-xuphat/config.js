rang_date_option("#range_date")
select_1_option("#mt_bienban_thanhtrakiemtra_id", "--Biên bản thanh tra kiểm tra--", api_admin_web + "option-mt-bienban-thanhtrakiemtra", "name");

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_quyetdinh_xuly_xuphat_table_dom");
var url_indexid = api_admin_web + "mt-quyetdinh-xuly-xuphat-indexid";

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
            let data_fk_1 = data.data.list_mt_bienban_thanhtrakiemtra;

            $("#list_mt_bienban_thanhtrakiemtra_tbody").html(list_fk(data_fk_1));

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event('resize'));
            });
        }
    })
}
