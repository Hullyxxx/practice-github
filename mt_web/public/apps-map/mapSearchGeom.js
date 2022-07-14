$(".leaflet-top.leaflet-right").append(
    "<a id='searchMap' href='#' type='button' class='btn btn-primary leaflet-control'>" +
    "<i class='i-Data-Search text-white'></i> " +
    "<span class='text-white'>Tìm kiếm dữ liệu bản đồ</span>" +
    "</a>"
)

$("#searchMap").click(function () {
    $(".custom-sidebar-right").addClass("open")
    // map.setView(center, 15)
})

$("#closeSearch").click(function () {
    $(".custom-sidebar-right").removeClass("open")
    // map.removeLayer(marker_popup)
    map.flyTo(center, 11, {
        animate: true,
        duration: 1
    });
    map.closePopup()
})
