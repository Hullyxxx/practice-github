select_1_option("#mt_coso_nhapkhau_phelieu_id", "--Cơ sở nhập khẩu phế liệu--", api_admin_web + "option-mt-coso-nhapkhau-phelieu", "so_xacnhan");
select_1_option("#loaiphelieu_id", "--Loại phế liệu--", api + "option-loaiphelieu", "name");

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_chitiet_nhapphelieu_table_dom");
var url_indexid = api_admin_web + "mt-chitiet-nhapphelieu-indexid";

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
            let data_fk_1 = data.data.list_mt_coso_nhapkhau_phelieu;

            $("#list_mt_coso_nhapkhau_phelieu_tbody").html(list_fk(data_fk_1));

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event('resize'));
            });
        }
    })
}
