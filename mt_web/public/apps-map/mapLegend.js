/*Legend*/
$(".leaflet-top.leaflet-right").append(
    "<div class='legend leaflet-control bg-white'>" +
    "<div class='text-center'>" +
    "<h5 class='text-primary' style='font-weight: bold; padding: 0.5em'>Chú thích</h5>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-bug2 text-15' style='padding: 0.65em 0.65em; color: #A0D995'></i>" +
    "<b class='text-dark font-size-13'> - Sinh vật</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-shield-check' style='padding: 0.6em 0.6em; color: #7D1E6A'></i>" +
    "<b class='text-dark font-size-13' style='margin-right: 20px'> - Khu vực bảo tồn sinh thái</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-files-empty2 text-15' style='padding: 0.6em 0.6em; color: #DF7861'></i>" +
    "<b class='text-dark font-size-13'> - Dự án</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-filter4' style='padding: 0.6em 0.6em; color: #F8B400'></i>" +
    "<b class='text-dark font-size-13'> - Nguồn thải</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-alert' style='padding: 0.6em 0.6em; color: #FF6363'></i>" +
    "<b class='text-dark font-size-13'> - Sự cố môi trường</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-lastfm' style='padding: 0.6em 0.6em'></i>" +
    "<b class='text-dark font-size-13'> - Vùng sinh thái</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-stop2 text-15' style='padding: 0.65em 0.65em'></i>" +
    "<b class='text-dark font-size-13'> - Đối tượng vùng</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-minus2 text-15' style='padding: 0.65em 0.65em'></i>" +
    "<b class='text-dark font-size-13'> - Đối tượng đường</b>" +
    "</div>" +
    "</div>" +
    "</div>"
)
/*
$(".leaflet-top.leaflet-right").append(
    "<div class='legend leaflet-control bg-white'>" +
    "<div class='text-center'>" +
    "<h5 class='text-primary' style='font-weight: bold; padding: 0.5em'>Chú thích</h5>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-bug2 text-15' style='padding: 0.65em 0.65em; color: #A0D995'></i>" +
    "<b class='text-dark font-size-13'> - Sinh vật</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-stop2 text-15' style='padding: 0.65em 0.65em; color: #A0D995'></i>" +
    "<b class='text-dark font-size-13'> - Vùng sinh vật</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-minus2 text-15' style='padding: 0.65em 0.65em; color: #A0D995'></i>" +
    "<b class='text-dark font-size-13'> - Đường sinh vật</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-shield-check' style='padding: 0.6em 0.6em; color: #7D1E6A'></i>" +
    "<b class='text-dark font-size-13' style='margin-right: 20px'> - Khu vực bảo tồn sinh thái</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-stop2 text-15' style='padding: 0.65em 0.65em; color: #7D1E6A'></i>" +
    "<b class='text-dark font-size-13'> - Vùng khu vực bảo tồn sinh thái</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-minus2 text-15' style='padding: 0.65em 0.65em; color: #7D1E6A'></i>" +
    "<b class='text-dark font-size-13'> - Đường khu vực bảo tồn sinh thái</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-files-empty2 text-15' style='padding: 0.6em 0.6em; color: #DF7861'></i>" +
    "<b class='text-dark font-size-13'> - Dự án</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-stop2 text-15' style='padding: 0.65em 0.65em; color: #DF7861'></i>" +
    "<b class='text-dark font-size-13'> - Vùng dự án</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-minus2 text-15' style='padding: 0.65em 0.65em; color: #DF7861'></i>" +
    "<b class='text-dark font-size-13'> - Đường dự án</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-filter4' style='padding: 0.6em 0.6em; color: #F8B400'></i>" +
    "<b class='text-dark font-size-13'> - Nguồn thải</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-stop2 text-15' style='padding: 0.65em 0.65em; color: #F8B400'></i>" +
    "<b class='text-dark font-size-13'> - Vùng nguồn thải</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-minus2 text-15' style='padding: 0.65em 0.65em; color: #F8B400'></i>" +
    "<b class='text-dark font-size-13'> - Đường nguồn thải</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-alert' style='padding: 0.6em 0.6em; color: #FF6363'></i>" +
    "<b class='text-dark font-size-13'> - Sự cố môi trường</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-stop2 text-15' style='padding: 0.65em 0.65em; color: #FF6363'></i>" +
    "<b class='text-dark font-size-13'> - Vùng sự cố môi trường</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-minus2 text-15' style='padding: 0.65em 0.65em; color: #FF6363'></i>" +
    "<b class='text-dark font-size-13'> - Đường sự cố môi trường</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-lastfm' style='padding: 0.6em 0.6em'></i>" +
    "<b class='text-dark font-size-13'> - Vùng sinh thái</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-stop2 text-15' style='padding: 0.65em 0.65em; color: #5B6D5B'></i>" +
    "<b class='text-dark font-size-13'> - Vùng sinh thái</b>" +
    "</div>" +
    "</div>" +
    "<div class='row mb-2'>" +
    "<div class='col-md-12'>" +
    "<i class='icon-minus2 text-15' style='padding: 0.65em 0.65em; color: #5B6D5B'></i>" +
    "<b class='text-dark font-size-13'> - Đường sinh thái</b>" +
    "</div>" +
    "</div>" +
    "</div>"
)
*/
