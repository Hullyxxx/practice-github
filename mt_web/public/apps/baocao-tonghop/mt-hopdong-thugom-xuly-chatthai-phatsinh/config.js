select_1_option("#mt_nguonphatsinh_chatthai_id", "--Nguồn phát sinh chất thải--", api_admin_web + "option-mt-nguonphatsinh-chatthai", "name");
select_1_option("#enterprise_id", "--Doanh nghiệp--", api + "enterprise-option", "name");
select_1_option("#mt_baocao_nhap_phelieu_id", "--Báo cáo nhập phế liệu--", api_admin_web + "option-mt-baocao-nhap-phelieu", "so_baocao");
select_1_option("#mt_chatthai_id", "--Chất thải--", api_admin_web + "option-mt-chatthai", "name");

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_hopdong_thugom_xuly_chatthai_phatsinh_table_dom")
var url_indexid = api_admin_web + "mt-hopdong-thugom-xuly-chatthai-phatsinh-indexid"

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
            let data_fk_2 = data.data.list_mt_baocao_nhap_phelieu;
            let data_fk_3 = data.data.list_mt_chatthai;
            let data_fk_4 = data.data.list_enterprise;

            $("#list_mt_baocao_nhap_phelieu_tbody").html(list_fk(data_fk_2));
            $("#list_mt_chatthai_tbody").html(list_fk(data_fk_3));
            $("#list_enterprise_tbody").html(list_fk(data_fk_4));

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event('resize'));
            });
        }
    })
}
