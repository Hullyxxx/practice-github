select_1_option("#mt_coso_nhapkhau_phelieu_id", "--Cơ sở nhập khẩu phế liệu--", api_admin_web + "option-mt-coso-nhapkhau-phelieu", "so_xacnhan");

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_baocao_nhap_phelieu_table_dom");
var url_indexid = api_admin_web + "mt-baocao-nhap-phelieu-indexid";

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
            let data_fk_2 = data.data.list_mt_chitiet_baocao_nhap_phelieu;
            let data_fk_3 = data.data.list_mt_hopdong_thugom_xuly_chatthai_phatsinh;

            $("#list_mt_coso_nhapkhau_phelieu_tbody").html(list_fk(data_fk_1));
            $("#list_mt_chitiet_baocao_nhap_phelieu_tbody").html(list_fk(data_fk_2));
            $("#list_mt_hopdong_thugom_xuly_chatthai_phatsinh_tbody").html(list_fk(data_fk_3));

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event('resize'));
            });
        }
    })
}
