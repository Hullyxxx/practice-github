rang_date_option("#range_date")
select_1_option("#mt_giayphep_quanly_chatthai_nguyhai_id", "--Giấy phép quản lý chất thải nguy hại--", api_admin_web + "option-mt-giayphep-quanly-chatthainguyhai", "maso_quanlyctnh")
select_1_option("#mt_khu_xuly_chatthai_id", "--Khu xử lý chất thải--", api_admin_web + "option-mt-khu-xuly-chatthai", "name")
select_1_option("#enterprise_id", "--Doanh nghiệp--", api + "enterprise-option", "name")
select_1_option("#congnghe_xuly_id", "--Công nghệ xử lý--", api + "option-congnghe-xuly", "name")
select_1_option("#phamvi_hoatdong_id", "--Phạm vi hoạt động--", api + "option-phamvi-hoatdong", "name")

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_coso_xuly_chatthai_table_dom")
var url_indexid = api_admin_web + "mt-coso-xuly-chatthai-indexid"

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
            let data_fk_2 = data.data.list_mt_giayphep_quanly_chatthainguyhai
            let data_fk_3 = data.data.list_mt_khu_xuly_chatthai
            let data_fk_4 = data.data.list_mt_congsuat_xuly
            let data_fk_5 = data.data.list_mt_baocao_khoiluong_phatsinh_chatthai

            $("#list_enterprise_tbody").html(list_fk(data_fk_1));
            $("#list_mt_giayphep_quanly_chatthainguyhai_tbody").html(list_fk(data_fk_2));
            $("#list_mt_khu_xuly_chatthai_tbody").html(list_fk(data_fk_3));
            $("#list_mt_congsuat_xuly_tbody").html(list_fk(data_fk_4));
            $("#list_mt_baocao_khoiluong_phatsinh_chatthai_tbody").html(list_fk(data_fk_5));

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event("resize"));
            });
        }
    })
}
