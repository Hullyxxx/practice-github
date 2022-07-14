rang_date_option("#range_date")
select_1_option("#mt_kehoach_xuly_diemnong_id", "--Kế hoạch xử lý điểm nóng--", api_admin_web + "option-mt-kehoach-xuly-diemnong", "name")
select_1_option("#enterprise_id", "--Doanh nghiệp--", api + "enterprise-option", "name")
select_1_option("#loaidiemnong_id", "--Loại điểm nóng--", api + "option-loaidiemnong", "name")
select_1_option("#vande_moitruong_id", "--Vấn đề môi trường--", api + "option-vande-moitruong", "name")

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_diemnong_table_dom")
var url_indexid = api_admin_web + "mt-diemnong-indexid"

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
            let data_fk_2 = data.data.list_mt_kehoach_xuly_diemnong

            $("#list_enterprise_tbody").html(list_fk(data_fk_1));
            $("#list_mt_kehoach_xuly_diemnong_tbody").html(list_fk(data_fk_2));

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event("resize"));
            });
        }
    })
}
