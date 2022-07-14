/* FIXME: load more */
function load_more() {
    $('.some-list-counter-1').simpleLoadMore({
        item: 'li',
        count: 20,
        showCounter: false,
        btnText: '<div style="font-size: 1.1rem" class="m-4">Xem thêm ({showing}/{total})</div>'
    });
}

load_more()

function overStyle(object){
    object.style.color = '#fff';
    object.style.backgroundColor = '#663399'
}

function outStyle(object) {
    object.style.color = '#663399';
    object.style.backgroundColor = '#fff'
}


/* FIXME: Function input_search */
function vn_unaccent(input_search) {
    var AccentsMap = [
        "aàảãáạăằẳẵắặâầẩẫấậ",
        "AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬ",
        "dđ", "DĐ",
        "èẻẽéẹêềểễếệể",
        "EÈẺẼÉẸÊỀỂỄẾỆ",
        "iìỉĩíị",
        "IÌỈĨÍỊ",
        "oòỏõóọôồổỗốộơờởỡớợ",
        "OÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢ",
        "uùủũúụưừửữứự",
        "UÙỦŨÚỤƯỪỬỮỨỰ",
        "yỳỷỹýỵ",
        "YỲỶỸÝỴ"
    ];

    for (var i = 0; i < AccentsMap.length; i++) {
        var re = new RegExp('[' + AccentsMap[i].substr(1) + ']', 'g');
        var char = AccentsMap[i][0];
        input_search = input_search.replace(re, char);
    }
    input_search = input_search.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
    input_search = input_search.replace(/\s+/g, ' ');
    input_search = input_search.trim();
    return (input_search);
}

/* FIXME: Function search */
function searchBasic(id_input, id_counter, id_dom, dom_start) {
    let in_search = vn_unaccent($(id_input).val());
    in_split = in_search.split(' ')
    in_query = ""
    in_rank = ""
    in_split.forEach(function(val, index) {
        if (index < in_split.length - 1) {
            in_query += val + '|'
            in_rank += val + '&'
        } else {
            in_query += val
            in_rank += val
        }
    })

    $.ajax({
        type: 'GET',
        url: 'catalog-search-report',
        data: { in_query: in_query, in_rank: in_rank },
        success: function (data) {

            list_search_results = `<ul style="list-style-type: none;margin: 0; padding: 0" class="some-list-counter-1">`
            if (data.length > 0) {
                for (let i = 0; i < data.length; i++) {
                    list_search_results += `<li class="card o-hidden mb-4 border">
                                        <a href="` + data[i].url + `" target='_blank' id='loadMore' style=" background-color: rgb(255, 255, 255);
                                                                                                    color: #663399;
                                                                                                    all 400ms ease-in-out;
                                                                                                    -webkit-transition: all 400ms ease-in-out;
                                                                                                    -moz-transition: all 400ms ease-in-out;
                                                                                                    -o-transition: all 400ms ease-in-out;" onmouseover="overStyle(this)" onmouseout="outStyle(this)">
                                            <div class="card-header">
                                                <div class="d-inline-block">
                                                    <i class='fa fa-link'></i>
                                                    <strong><span class="text-18">` + data[i].name + `
                                                        </span></strong>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="text-16 text-teal-100 m-3 bg-white">`
                                            + data[i].key_1 +  data[i].key_2 +  data[i].fk + `
                                        </div>
                                    </li>`
                }
            } else {
                list_search_results += `<div style="font-size: 1.1rem" class="mb-3 text-danger" id="count_results">Không tìm thấy kết quả phù hợp</div>`
            }

            list_search_results += `</ul>`

            $(id_counter).html("Tổng " + data.length);
            $(id_dom).html(list_search_results);

            load_more()

            $(id_counter).show();
            $(dom_start).hide();
            $(id_dom).show();
        }
    })
}

$('#btn-searchBasic').click(function() {
    searchBasic('#searchBasic', '#count_results', '#dom_search', '#dom_start')
})

$(document).keypress(function(event) {
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if (keycode == '13') {
        searchBasic('#searchBasic', '#count_results', '#dom_search', '#dom_start')
    }
});

$('#clear-search').click(function() {
    $('#dom_search').hide();
    $('#dom_start').show();
    $('#count_results').hide();
})

/* FIXME: Search filter */
function searchElastic(input_id, id_counter, id_dom, dom_start) {
    input_option = ""
    list_search_results = ""
    for (let i in input_id) {
        if ($(input_id[i]).prop('checked') == true) {
            input_option += $(input_id[i] + '_checked').html() + "|"
        }
    }

    input_query_option = input_option.split('|').slice(0, -1)
    input_select = ""

    for (let i in input_query_option) {
        if (i != 0) {
            input_select += " or "
        }
        input_select += "name like ('%" + input_query_option[i] + "%')" + " or fk like ('%" + input_query_option[i] + "%')"
    }

    input_final = input_select

    if (input_final.length > 0) {
        $.ajax({
            type: 'GET',
            url: 'catalog-search-filter',
            data: { input_search: input_final },
            success: function(data) {
                list_search_results = `<ul style="list-style-type: none;margin: 0; padding: 0" class="some-list-counter-1">`
                if (data.length > 0) {
                    for (let i = 0; i < data.length; i++) {
                        list_search_results += `<li class="card o-hidden mb-4 border">
                                                    <a href="` + data[i].url + `" target='_blank' style=" background-color: rgb(255, 255, 255);
                                                                                                    color: #663399;
                                                                                                    all 400ms ease-in-out;
                                                                                                    -webkit-transition: all 400ms ease-in-out;
                                                                                                    -moz-transition: all 400ms ease-in-out;
                                                                                                    -o-transition: all 400ms ease-in-out;" onmouseover="overStyle(this)" onmouseout="outStyle(this)">
                                                        <div class="card-header">
                                                            <div class="d-inline-block">
                                                                <i class='fa fa-link'></i>
                                                                <strong><span class="text-18">` + data[i].name + `
                                                                    </span></strong>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="text-16 text-teal-100 m-3 bg-white">`
                                                        + data[i].key_1 + data[i].key_2 + data[i].fk + `
                                                    </div>
                                                </li>`
                    }
                } else {
                    list_search_results += `<div style="font-size: 1.1rem" class="mb-3 text-danger" id="count_results">Không tìm thấy kết quả phù hợp</div>`
                }

                list_search_results += `</ul>`

                $(id_counter).html("Tổng " + data.length);
                $(id_dom).html(list_search_results);
                load_more()
                $(id_counter).show();
                $(dom_start).hide();
                $(id_dom).show();
            }
        })
    } else {
        $(id_counter).html(`Tổng 0`);
        $(id_dom).html(`<div style="font-size: 1.1rem" class="mb-3 text-danger" id="count_results">Không tìm thấy kết quả phù hợp</div>`);
        $(id_counter).show();
        $(dom_start).hide();
        $(id_dom).show();
    }

}

$('#filterElastic').click(function() {
    input_id_mt = ['#enterprise', '#mt_hopdong_thugom_xuly_chatthai_phatsinh', '#mt_chatthai', '#mt_quyetdinh_xuly', '#mt_kehoach_bvmt', '#mt_tulieu_moitruong', '#mt_kehoach_xuly_diemnong', '#mt_giayphep_quanly_chatthainguyhai', '#mt_vanban', '#mt_coso_onmt', '#mt_doanthanhtra_kiemtra', '#mt_diemnong', '#mt_phi_bvmt', '#mt_baocao_congtac_bvmt', '#mt_khuvuc_baoton_sinhthai', '#mt_khuvuc_baoton_sinhthai', '#mt_diem_sinhvat', '#mt_duan', '#mt_vung_sinhthai', '#mt_suco_moitruong', '#mt_chatthai_nguyhai', '#mt_coso_xuly_chatthai', '#mt_thietbi_quanly', '#mt_quyetdinh_didoi', '#mt_hoso_thutuc_hanhchinh', '#mt_ketluan_thanhtrakiemtra', '#mt_bienban_thanhtrakiemtra', '#mt_chitiet_phi_bvmt', '#mt_sinhvat', '#mt_nguonthai', '#mt_chitiet_chatthai_nguyhai', '#mt_congsuat_xuly', '#mt_baocao_khoiluong_phatsinh_chatthai', '#mt_so_dangki_nguonchuthai', '#mt_coso_nhapkhau_phelieu', '#mt_quyetdinh_xuly_xuphat', '#mt_chitietsodangki_chunguonthai', '#mt_chitiet_baocao_khoiluong', '#mt_chitiet_nhapphelieu', '#mt_baocao_nhap_phelieu', '#mt_chitiet_baocao_nhap_phelieu']
    input_id_cate = ['#khu_xuly_chatthai', '#congnghe_xuly', '#trangthai_tontai', '#loaibiendong', '#phamvi_hoatdong', '#loaichatthai', '#loaithietbi', '#loaihethong_xuly', '#cap_quanly', '#loaithutuc_hanhchinh', '#loaionhiem', '#mucdo_onhiem', '#loaididoi', '#loaiphelieu', '#chucvu', '#vande_moitruong', '#loaitulieu', '#loaidiemnong', '#loaithuphi', '#mucthuphi', '#diaban', '#hanhnghe', '#loainguonthai', '#loaisinhvat', '#loaisinhthai', '#loaisuco_moitruong', '#nguonphatsinh_chatthai', '#loaivanban', '#donvi_capphep', '#donvi_quanly', '#enterprise_type', '#basin', '#dinkem']
    input_id_district = ['#district']
    input_total = [...input_id_mt, ...input_id_cate, ...input_id_district]
    searchElastic(input_total, '#count_results', '#dom_search', '#dom_start')
})
