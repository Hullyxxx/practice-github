// Create table
let table_searchMap = $("#table_searchMap").DataTable({
    "data": null,
    "columns": [
        {"data": "coordinates"},
        {"data": "btn_zoom"},
    ],
    "paging": false,
    "scrollY": "60vh",
    "language": config_language_datatables,
});

function dom_res_table_searchMap(data) {
    table_searchMap.clear().draw();
    table_searchMap.rows.add(data.data);
    table_searchMap.columns.adjust().draw();
}
