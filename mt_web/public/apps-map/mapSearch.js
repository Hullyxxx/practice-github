function vn_unaccent(input_search) {
    var AccentsMap = [
        "aàảãáạăằẳẵắặâầẩẫấậ",
        "AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬ",
        "dđ", "DĐ",
        "èẻẽéẹêềểễếệ",
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
    input_search = input_search.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, ' ');
    input_search = input_search.replace(/\s+/g, ' ');
    input_search = input_search.trim();
    return (input_search);
}

function searchBasic(id_input, id_counter, id_dom) {
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
        url: 'search-map',
        data: { in_query: in_query, in_rank: in_rank },
        success: function (data) {
            list_search_results = `<ul style="list-style-type: none;margin: 0; padding: 0" class="some-list-counter-1">`
            let data_table_searchMap = {"data": []}

            if (data.length > 0) {
                for (let i = 0; i < data.length; i++) {
                    data_table_searchMap.data.push({
                        "coordinates": data[i].geometry != null ? "<a href='#' class='zoomSearch'>"+ JSON.parse(data[i].geometry).geometry.coordinates +"</a>"
                            +"<div id='data' style='display: none'>" +data[i].geometry +"</div>"
                            : "<span style='color: red'>Chưa cập nhật</span>",
                        "btn_zoom": data[i].geometry != null ? "<a href='#" +
                    "' class='btn btn-success btn-icon zoomSearch' >" +
                    "<i class='i-Link-2'></i> Xem chi tiết" + "<div id='data' style='display: none'>" +data[i].geometry +"</div>" +
                        "</a></td>" : "Không có dữ liệu",
                    })
                    // list_search_results += data[i].data + data[i].geometry
                    /*console.log(data_table_searchMap)
                    console.log(JSON.parse(data[i].geometry).id)*/

                }
            }

            /* DOM kết quả tìm kiếm */
            dom_res_table_searchMap(data_table_searchMap)
            let marker_array = markers.getLayers()
            /* Zoom đến điểm search */
            $(".zoomSearch").click(function () {
                geom = JSON.parse($(this).find('div').html())

                // console.log($(this).find('div').html());
                zoom_to_geom(geom,marker_array)
            })
        }
    })
}

function zoom_to_geom(geom, marker_array) {
    // console.log(geom)
    var result = []
    marker_array.forEach(ele => {
        if (ele.feature.geometry.type == 'Polygon' || ele.feature.geometry.type == 'LineString') {
            var ele_geom = ele.feature.geometry.coordinates.flat(2);
            var ele_check_geom = geom.geometry.coordinates.flat(2);
            for(var i=0; i <ele_geom.length; i++) {
                if (ele_geom[i] == ele_check_geom[i]) {
                    result.push(ele);
                    break;
                }
            }
        }
        else if (ele.feature.geometry.type == 'Point') {
            var ele_geom = ele.feature.geometry.coordinates;
            var ele_check_geom = geom.geometry.coordinates.flat(2);
            for(var i=0; i <ele_geom.length; i++) {
                if (ele_geom[i] == ele_check_geom[i]) {
                    result.push(ele);
                    break;
                }
            }
        }
    })
    map.flyTo([result[0]._latlng.lat, result[0]._latlng.lng], 15, {
        animate: false,
        duration: 1
    });
    var popup = L.popup()
        .setLatLng([result[0]._latlng.lat, result[0]._latlng.lng])
        .setContent(result[0]._popup._content)
        .openOn(map);
}

$('#btn-searchBasic').click(function() {
    searchBasic('#searchMap_input', '#counter-result', '#dom-result')
})

$(document).keypress(function(event) {
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if (keycode == '13') {
        searchBasic('#searchMap_input', '#counter-result', '#dom-result')
    }
});
