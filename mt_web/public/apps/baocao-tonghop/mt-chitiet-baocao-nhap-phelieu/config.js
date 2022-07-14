select_1_option("#mt_baocao_nhap_phelieu_id", "--Báo cáo nhập phế liệu--", api_admin_web + "option-mt-baocao-nhap-phelieu", "so_baocao");
select_1_option("#loaiphelieu_id", "--Loại phế liệu--", api + "option-loaiphelieu", "name");

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_chitiet_baocao_nhap_phelieu_table_dom");
var url_indexid = api_admin_web + "mt-chitiet-baocao-nhap-phelieu-indexid";

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
            let data_fk_1 = data.data.list_mt_baocao_nhap_phelieu;

            $("#list_mt_baocao_nhap_phelieu_tbody").html(list_fk(data_fk_1));

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event('resize'));
            });
        }
    })
}
