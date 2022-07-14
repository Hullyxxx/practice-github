rang_date_option("#range_date")
select_1_option("#doanthanhtra_kiemtra_id", "--Đoàn thanh tra kiểm tra--", api_admin_web + "option-mt-doanthanhtra-kiemtra", "soquyetdinh");
select_1_option("#donvi_quanly_id", "--Đơn vị quản lý--", api + "donvi-quanly", "name");

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_ketluan_thanhtrakiemtra_table_dom");
var url_indexid = api_admin_web + "mt-ketluan-thanhtrakiemtra-indexid";

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
            $("#list_mt_doanthanhtra_kiemtra_tbody").html(list_fk(data_fk_1));
            
            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event("resize"));
            });
        }
    })
}

