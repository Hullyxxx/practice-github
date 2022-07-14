rang_date_option("#range_date")
select_1_option("#enterprise_id", "--Doanh nghiệp--", api + "enterprise-option", "name")
select_1_option("#donvi_quanly_id", "--Đơn vị quản lý--", api + "donvi-quanly", "name")
select_1_option("#loaisinhthai_id", "--Loài sinh thái--", api + "loaisinhthai-option", "name")

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_vung_sinhthai_table_dom")
var url_indexid = api_admin_web + "mt-vung-sinhthai-indexid"

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

            $("#list_enterprise_tbody").html(list_fk(data_fk_1));

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event("resize"));
            });
        }
    })
}

function onclick_read_coor_details(url_indexid, obj) {
    $.ajax({
        type: "GET",
        url: url_indexid,
        data: {
            id: obj.id,
        },
        dataType: "json",
        success: function (data) {
            /* Custom Blade for Modal Body details */
            // console.log(JSON.parse(data.data.col_geom).features)
            // console.log(data)
            let name_table = 'mt_vung_sinhthai'
            let data_fk_1 = data.data

            $("#list_mt_vung_sinhthai_coor_tbody").html(list_coordinates(data_fk_1, name_table))
            /* Open Modal Details */
            $("#modal_lists_coor").modal("show");
            $("#modal_lists_coor").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event("resize"));
            });
        },
    });
}
