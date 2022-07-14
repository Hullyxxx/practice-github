select_1_option("#mt_chatthai_id", "--Chất thải--", api_admin_web + "option-mt-chatthai", "name");
select_1_option("#mt_so_dangky_nguonchuthai_id", "--Sổ đăng ký chủ nguồn thải--", api_admin_web + "option-mt-sodangky-nguonchuthai", "solan_cap");
select_1_option("#loaichatthai_id", "--Loại chất thải--", api + "option-loaichatthai", "name");
select_1_option("#trangthai_tontai_id", "--Trạng thái tồn tại--", api + "option-trangthai-tontai", "name");

/*--- Setup Datatable ---*/
var table_dom = setup_datatable("#mt_chitietsodangki_chunguonthai_table_dom");
var url_indexid = api_admin_web + "mt-chitietsodangki-chunguonthai-indexid";

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
            let data_fk_1 = data.data.list_mt_chatthai;
            let data_fk_2 = data.data.list_mt_so_dangki_nguonchuthai;

            $("#list_mt_chatthai_tbody").html(list_fk(data_fk_1));
            $("#list_mt_so_dangki_nguonchuthai_tbody").html(list_fk(data_fk_2));

            /* Open Modal Details */
            $("#modal_lists").modal("show");
            $("#modal_lists").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event('resize'));
            });
        }
    })
}
