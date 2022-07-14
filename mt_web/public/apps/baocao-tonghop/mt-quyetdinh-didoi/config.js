rang_date_option("#range_date")
select_1_option("#mt_coso_onmt_id", "--Cơ sở ô nhiễm môi trường--", api_admin_web + "option-mt-coso-onmt", "nguyennhan");
select_1_option("#donvi_capphep_id", "--Đơn vị cấp phép--", api + "donvi-capphep", "name");
select_1_option("#loaididoi_id", "--Loại di dời--", api + "loaididoi-option", "name");

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_quyetdinh_didoi_table_dom");
var url_indexid = api_admin_web + "mt-quyetdinh-didoi-indexid";

function onclick_read_details(url_indexid, obj) {
    $.ajax({
        type: 'GET',
        url: url_indexid,
        data: {
            id: obj.id
        },
        dataType: 'json',
        success: function(data) {
            /* Custom Blade for Modal Body details */
            let data_fk_1 = data.data.list_mt_coso_onmt
            $("#list_mt_coso_onmt_tbody").html(list_fk(data_fk_1));
            
            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event("resize"));
            });
        }
    })
}