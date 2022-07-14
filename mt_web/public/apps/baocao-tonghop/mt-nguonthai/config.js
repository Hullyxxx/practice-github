select_1_option("#enterprise_id", "--Doanh nghiệp--", api + "enterprise-option", "name");
select_1_option("#tnn_thongtincapphep_id", "--Thông tin cấp phép--", api_admin_web + "option-tnn-thongtincapphep", "sogiayphep");
select_1_option("#basin_id", "--Lưu vực sông--", api + "basin-option", "name");
select_1_option("#loainguonthai_id", "--Loại nguồn thải--", api + "loainguonthai-option", "name");

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_nguonthai_table_dom");
var url_indexid = api_admin_web + "mt-nguonthai-indexid";

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
            let data_fk_1 = data.data.list_enterprise

            $("#list_enterprise_tbody").html(list_fk(data_fk_1))

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event("resize"));
            });
        },
    });
}


