rang_date_option("#range_date")
select_1_option("#category_id", "--Loại trạm--", api + "category", "name")

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#sample_table_dom")
var url_indexid = api_admin_web + "sample-indexid"

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
            let data_fk_1 = data.data.list_fk_1
            let data_fk_2 = data.data.list_fk_2

            $("#list_fk_1_tbody").html(list_fk(data_fk_1))
            $("#list_fk_2_tbody").html(list_fk(data_fk_2))

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event('resize'));
            });
        }
    })
}
