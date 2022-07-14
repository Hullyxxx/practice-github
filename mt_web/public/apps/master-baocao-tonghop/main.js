/* Range Date */
function rang_date_option(id) {
    var tmp = new Date();
    var new_day = new Date(tmp.setDate(tmp.getDate() + 1));
    $(id).daterangepicker({
        endDate: new_day,
        applyClass: "btn-info",
        opens: "right",
        locale: {
            format: 'DD/MM/YYYY',
            applyLabel: 'Áp dụng',
            cancelLabel: 'Cancel',
        }
    });
}

/* Select 1 option */
function select_1_option(id, placeholder, url, opt) {
    $.getJSON(url, function (data) {
        $(id).append($("<option></option>").attr('value', 'null').text(placeholder));
        $.each(data, function (key, value) {
            let source = JSON.parse(value.data)
            $(id).append($("<option></option>").attr('value', value.id).text(source[opt]));
        });
    })
}

/* Select multioption */
function select_multi_option(id, placeholder, url, opt) {
    $.getJSON(url, function (data) {
        $(id).append($("<option></option>").attr('value', 'null').text(placeholder));
        $.each(data, function (key, value) {
            let source = JSON.parse(value.data)
            $(id).append($("<option></option>").attr('value', value.id).text(source[opt]));
        });
    }).then(function () {
        $(id).select2()
    })
}

/* Setup Datatables */
function setup_datatable(id_table) {
    let redraw_table = $(id_table).DataTable({
        "dom": "<'row'<'col-md-6'l><'col-md-6'f>>" +
            "<'row'<'col-md-12'rt>>" +
            "<'row'<'col-md-12 col-md-5'i><'col-md-12 col-md-7'p>>",
        "columnDefs": [
            {
                className: "text-nowrap"
            }
        ],
        "lengthMenu": [[5, 10, 20], [5, 10, 20]],
        "pageLength": 10,
        "scrollX": true,
        "language": config_language_datatables,
    });
}

/* Setup DOM list FK */
function list_fk(data_fk) {
    let string_table_fk = ""
    if (data_fk == null) {
        string_table_fk += "<tr style=background:white class='table-none-bordered'>" + "<td>" + "<div class='text-danger list-null'>Danh sách trống</div>" + "</td>" + "</tr>";
    } else {
        let data_fk_json = JSON.parse(data_fk);
        data_fk_json.forEach((ele) => {
            string_table_fk +=
                "<tr>" +
                "<td>" +
                ele.name +
                "</td>" +
                "<td class='w-25'><a href='" +
                ele.url +
                "' target='_blank' class='btn btn-success btn-icon'>" +
            "<i class='i-Link-2'></i> Xem chi tiết" +
            "</a></td>" +
                "</tr>";
        });
    }
    return string_table_fk
}

function list_coordinates(data, name_table) {
    let string_coordinates_fk = ""
    if (data == null) {
        string_coordinates_fk += "<tr style=background:white class='table-none-bordered'>" + "<td>" + "<div class='text-danger list-null'>Danh sách trống</div>" + "</td>" + "</tr>";
    } else {
        let data_coor_json = [];
        Object.keys(data).forEach(ele => {
            data_coor_json[ele] = data[ele]
        })
        // console.log(data_coor_json.id)
        let data_geom = JSON.parse(data_coor_json.col_geom).features;
        data_geom.forEach(ele => {
            string_coordinates_fk +=
                "<tr>" +
                "<td>" +
                ele.geometry.coordinates + " " +
                "</td>" +
                "<td class='w-25 code'><a href='" +
                'map?id='+  data_coor_json.id +'&name_table=' + name_table + '&' + ele.geometry.coordinates+
                "' target='_blank' class='btn btn-success btn-icon'>" +
                "<i class='i-Link-2'></i> Xem chi tiết" +
                "</a></td>" +
                "</tr>";
        });
    }
    return string_coordinates_fk
}

function onclick_read_coor_details(url_indexid, obj, name_table, id_modal_list) {
    $.ajax({
        type: "GET",
        url: url_indexid,
        data: {
            id: obj.id,
        },
        dataType: "json",
        success: function (data) {
            /* Custom Blade for Modal Body details */
            // console.log(JSON.parse(data.data.col_geom).features)
            // console.log(data)
            let data_fk_1 = data.data

            $(id_modal_list).html(list_coordinates(data_fk_1, name_table))
            /* Open Modal Details */
            $("#modal_lists_coor").modal("show");
            $("#modal_lists_coor").on("shown.bs.modal", function () {
                window.dispatchEvent(new Event("resize"));
            });
        },
    });
}
