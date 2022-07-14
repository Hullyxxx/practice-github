rang_date_option("#range_date")
select_1_option("#doanthanhtra_kiemtra_id", "--Đoàn thanh tra kiểm tra--", api_admin_web + "option-mt-doanthanhtra-kiemtra", "soquyetdinh");
select_1_option("#enterprise_id", "--Doanh nghiệp--", api + "enterprise-option", "name");
select_1_option("#donvi_quanly_id", "--Đơn vị quản lý--", api + "donvi-quanly", "name");

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_bienban_thanhtrakiemtra_table_dom");
var url_indexid = api_admin_web + "mt-bienban-thanhtrakiemtra-indexid";

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
          
            let data_fk_1 = data.data.list_mt_doanthanhtra_kiemtra;
            let data_fk_2 = data.data.list_enterprise;
            let data_fk_3 = data.data.list_mt_quyetdinh_xuly_xuphat;

            $("#list_mt_doanthanhtra_kiemtra_tbody").html(list_fk(data_fk_1));
            $("#list_enterprise_tbody").html(list_fk(data_fk_2));
            $("#list_mt_quyetdinh_xuly_xuphat_tbody").html(list_fk(data_fk_3));
          
            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event("resize"));
            });
        }
    })
}