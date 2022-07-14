rang_date_option("#range_date")
select_1_option("#mt_kehoach_bvmt_id", "--Kế hoạch xử bảo vệ môi trường--", api_admin_web + "option-mt-kehoach-bvmt", "soquyetdinh")

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_doanthanhtra_kiemtra_table_dom")
var url_indexid = api_admin_web + "mt-doanthanhtra-kiemtra-indexid"

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
            let data_fk_1 = data.data.list_mt_bienban_thanhtrakiemtra
            let data_fk_2 = data.data.list_mt_kehoach_bvmt
            let data_fk_3 = data.data.list_mt_ketluan_thanhtrakiemtra

            $("#list_mt_bienban_thanhtrakiemtra_tbody").html(list_fk(data_fk_1));
            $("#list_mt_kehoach_bvmt_tbody").html(list_fk(data_fk_2));
            $("#list_mt_ketluan_thanhtrakiemtra_tbody").html(list_fk(data_fk_3));

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event("resize"));
            });
        }
    })
}
