select_1_option("#diem_sinhvat_id", "--Điểm sinh vật--", api_admin_web + "option-mt-diem-sinhvat", "name_thongdung");
select_1_option("#loaisinhvat_id", "--Loại sinh vật--", api + "loaisinhvat-option", "name");

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_sinhvat_table_dom");
var url_indexid = api_admin_web + "mt-sinhvat-indexid";

function onclick_read_details(url_indexid, obj) {
    $.ajax({
        type: "GET",
        url: url_indexid,
        data: {
            id: obj.id,
        },
        dataType: "json",
        success: function (data) {
            /* Custom Blade for Modal Body details */
            let data_fk_1 = data.data.list_mt_diem_sinhvat

            $("#list_mt_diem_sinhvat_tbody").html(list_fk(data_fk_1))

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event("resize"));
            });
        },
    });
}

