select_1_option("#mt_coso_xuly_chatthai_id", "--Cơ sở xử lý chất thải--", api_admin_web + "option-mt-coso-xuly-chatthai", "name");
select_1_option("#loaichatthai_id", "--Loại chất thải--", api + "option-loaichatthai", "name");

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_congsuat_xuly_table_dom");
var url_indexid = api_admin_web + "mt-congsuat-xuly-indexid";

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

            $("#list_mt_coso_xuly_chatthai_tbody").html(list_fk(data_fk_1));

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event("resize"));
            });
        },
    });
}
