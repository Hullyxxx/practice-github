select_1_option("#mt_chatthai_nguyhai_id", "--Chất thải nguy hại--", api_admin_web + "option-mt-chatthai-nguyhai", "name_chatthai_nguyhai");
select_1_option("#mt_chatthai_id", "--Chất thải--", api_admin_web + "option-mt-chatthai", "name");

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_chitiet_chatthai_nguyhai_table_dom");
var url_indexid = api_admin_web + "mt-chitiet-chatthai-nguyhai-indexid";

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
            let data_fk_1 = data.data.list_mt_chatthai;
            let data_fk_2 = data.data.list_mt_chatthai_nguyhai;

            $("#list_mt_chatthai_tbody").html(list_fk(data_fk_1));
            $("#list_mt_chatthai_nguyhai_tbody").html(list_fk(data_fk_2));

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event('resize'));
            });
        }
    })
}
