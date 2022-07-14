rang_date_option("#range_date")
select_1_option("#enterprise_id", "--Doanh nghiệp--", api + "enterprise-option", "name")
select_1_option("#district_id", "--Đơn vị hành chính--", api + "district-option", "name")

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_duan_table_dom")
var url_indexid = api_admin_web + "mt-duan-indexid"

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
            let data_fk_2 = data.data.list_mt_hoso_thutuc_hanhchinh

            $("#list_enterprise_tbody").html(list_fk(data_fk_1));
            $("#list_mt_hoso_thutuc_hanhchinh_tbody").html(list_fk(data_fk_2));

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event("resize"));
            });
        }
    })
}

/*
function onclick_map(url_indexid, obj) {
    $.ajax({
        type: 'GET',
        url: url_indexid,
        data: {
            id: obj.id
        },
        dataType: 'json',
        success: function (data) {
           console.log(data.data.col_geom);
        }
    })
}
*/

