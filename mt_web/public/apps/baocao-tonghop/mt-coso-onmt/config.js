rang_date_option("#range_date")
select_1_option("#enterprise_id", "--Doanh nghiệp--", api + "enterprise-option", "name")
select_1_option("#quyetdinh_xuly_id", "--Quyết định xử lý--", api_admin_web + "option-mt-quyetdinh-xuly", "soquyetdinh")
select_1_option("#loaionhiem_id", "--Loại ô nhiễm--", api + "option-loaionhiem", "name")
select_1_option("#mucdo_onhiem_id", "--Mức độ ô nhiễm--", api + "option-mucdo-onhiem", "name")

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_coso_onmt_table_dom")
var url_indexid = api_admin_web + "mt-coso-onmt-indexid"

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
            let data_fk_2 = data.data.list_mt_quyetdinh_xuly
            let data_fk_3 = data.data.list_mt_quyetdinh_didoi

            $("#list_enterprise_tbody").html(list_fk(data_fk_1));
            $("#list_mt_quyetdinh_xuly_tbody").html(list_fk(data_fk_2));
            $("#list_mt_quyetdinh_didoi_tbody").html(list_fk(data_fk_3));

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event("resize"));
            });
        }
    })
}
