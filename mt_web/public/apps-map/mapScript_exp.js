var map = L.map('map', {
    center: [9.79602, 106.32225],
    zoomSnap: 0.25,
    zoom: 11,
    maxZoom: 20,
    minZoom: 10.5,
    zoomControl: false,
});

map.addControl(
    L.control.basemaps({
        basemaps: l_basemap_control,
        tileX: 0,
        tileY: 0,
        tileZ: 1
    })
);

l_geocoder.addTo(map);
l_fullscreen.addTo(map);
l_locate.addTo(map);
l_zoomhome.addTo(map);
l_measure_control.addTo(map);
map.removeControl(map.latLngControl);
map.addControl(l_latlon_show);

function popup_marker(layer, feature) {
    var popupContent = '';
    if(layer.feature.geometry.type == 'Polygon' || layer.feature.geometry.type == 'MultiPolygon' || layer.feature.geometry.type == 'LineString') {
        if(feature.name_table == 'mt_sinhvat') {
            layer.setStyle({weight: 2,
                opacity: 1,
                color: '#A0D995',
                // dashArray: '3',
                fillOpacity: 0.5})
        }
        else if(feature.name_table == 'mt_khuvuc_baoton_sinhthai') {
            layer.setStyle({weight: 2,
                opacity: 1,
                color: '#7D1E6A',
                // dashArray: '3',
                fillOpacity: 0.5})
        }
        else if(feature.name_table == 'mt_duan') {
            layer.setStyle({weight: 2,
                opacity: 1,
                color: '#DF7861',
                // dashArray: '3',
                fillOpacity: 0.5})
        }
        else if(feature.name_table == 'mt_nguonthai') {
            layer.setStyle({weight: 2,
                opacity: 1,
                color: '#F8B400',
                // dashArray: '3',
                fillOpacity: 0.5})
        }
        else if(feature.name_table == 'mt_suco_moitruong') {
            layer.setStyle({weight: 2,
                opacity: 1,
                color: '#FF6363',
                // dashArray: '3',
                fillOpacity: 0.5})
        }
        else if(feature.name_table == 'mt_vung_sinhthai') {
            layer.setStyle({weight: 2,
                opacity: 1,
                color: '#5B6D5B',
                // dashArray: '3',
                fillOpacity: 0.5})
        }
    }

    for (var name in feature) {
        var name = '';
        var name_table = '';
        var id_table = '';
        if (feature.name_table == 'mt_sinhvat') {
            name += ' Sinh v???t';
            name_table += 'mt-sinhvat-detail';
            id_table += feature.id;
        }
        else if (feature.name_table == 'mt_khuvuc_baoton_sinhthai') {
            name += ' Khu v???c b???o t???n sinh th??i';
            name_table += 'mt-khuvuc-baoton-sinhthai-detail';
            id_table += feature.id;
        }
        else if (feature.name_table == 'mt_nguonthai') {
            name += ' Ngu???n th???i';
            name_table += 'mt-nguonthai-detail';
            id_table += feature.id;
        }
        else if (feature.name_table == 'mt_sinhvat') {
            name += ' Sinh v???t';
            name_table += 'mt-sinhvat-detail';
            id_table += feature.id;
        }
        else if (feature.name_table == 'mt_duan') {
            name += ' D??? ??n';
            name_table += 'mt-duan-detail';
            id_table += feature.id;
        }
        else if (feature.name_table == 'mt_suco_moitruong') {
            name += ' S??? c??? m??i tr?????ng';
            name_table += 'mt-suco-moitruong-detail';
            id_table += feature.id;
        }
        else if (feature.name_table == 'mt_vung_sinhthai') {
            name += ' V??ng sinh th??i';
            name_table += 'mt-vung-sinhthai-detail';
            id_table += feature.id;
        }
    }
    popupContent += '<h5 class="text-center "><a class="sticky-popup text-uppercase text-center" colspan="4" style="margin-bottom: 5px; font-weight: bold" href="'+name_table+'?id='+ id_table+'" target="_blank">Th??ng tin chi ti???t'+ name +'</a></h5>';
    popupContent += '<div class="table-responsive"><table class="table table-bordered">';
    for (var p in feature.properties) {
        if (p == 'name') {
            popupContent += '<th text-bold>' +  'T??n' + '</th>';
            popupContent += '<td text-bold>' + feature.properties[p] + '</td>';
        }
        else if (p == 'donvi') {
            popupContent += '<tr text-bold><td>' + '????n v???' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'quymo') {
            popupContent += '<tr><td text-bold>' + 'Quy m??' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'donvi_tuvan') {
            popupContent += '<tr><td text-bold>' + '????n v??? t?? v???n' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'donvi_tuvan') {
            popupContent += '<tr><td text-bold>' + '????n v??? t?? v???n' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'diadiem_duan') {
            popupContent += '<tr><td text-bold>' + '?????a ??i???m t?? v???n' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'nam_thuchien') {
            popupContent += '<tr><td text-bold>' + 'N??m th???c hi???n' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'donvi_pheduyet') {
            popupContent += '<tr><td text-bold>' + '????n v??? ph??? duy???t' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'dientich_xaydung') {
            popupContent += '<tr><td text-bold>' + 'Di???n t??ch x??y d???ng' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'ngay_pheduyet_date') {
            popupContent += '<tr><td text-bold>' + 'Ng??y ph?? duy???t' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'nguontiepnhan_nuocthai') {
            popupContent += '<tr><td text-bold>' + 'Ngu???n ti???p nh???n n?????c th???i' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'soquyetdinh_pheduyet_duan') {
            popupContent += '<tr><td text-bold>' + 'S??? quy???t ?????nh ph?? duy???t d??? ??n' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'dientich') {
            popupContent += '<tr><td text-bold>' + 'Di???n t??ch' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'loaiuuthe') {
            popupContent += '<tr><td text-bold>' + 'Lo??i ??u th???' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'loaibaoton') {
            popupContent += '<tr><td text-bold>' + 'Lo??i b???o t???n' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'loaidactrung') {
            popupContent += '<tr><td text-bold>' + 'Lo??i ?????c tr??ng' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'nam_thanhlap') {
            popupContent += '<tr><td text-bold>' + 'N??m th??nh l???p' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'doituong_baove') {
            popupContent += '<tr><td text-bold>' + '?????i t?????ng b???o v???' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'mucdo_dadang_sinhhoc') {
            popupContent += '<tr><td text-bold>' + 'M???c ????? ??a d???ng sinh h???c' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'hoatchat_sudung') {
            popupContent += '<tr><td text-bold>' + 'Ho???t ch???t s??? d???ng' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'congsuat_thietke') {
            popupContent += '<tr><td text-bold>' + 'C??ng su???t thi???t k???' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'nhienlieu_sudung') {
            popupContent += '<tr><td text-bold>' + 'Nhi??n li???u s??? d???ng' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'luong_nuoc_sudung') {
            popupContent += '<tr><td text-bold>' + 'L?????ng n?????c s??? d???ng' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'thuongnguon_capnuoc') {
            popupContent += '<tr><td text-bold>' + 'Th?????ng ngu???n c???p n?????c' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'luluong_xa_nguonthai') {
            popupContent += '<tr><td text-bold>' + 'L??u l?????ng x??? ngu???n th???i' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'luuluong_xa_khaithac') {
            popupContent += '<tr><td text-bold>' + 'L??u l?????ng x??? khai th??c' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'vung_anhhuong_xathai') {
            popupContent += '<tr><td text-bold>' + 'V??ng ???nh h?????ng x??? th???i' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'khoiluong_chatthairan') {
            popupContent += '<tr><td text-bold>' + 'Kh???i l?????ng ch???t th???i r???n' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'bo') {
            popupContent += '<tr><td text-bold>' + 'B???' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'ho') {
            popupContent += '<tr><td text-bold>' + 'H???' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'chi') {
            popupContent += '<tr><td text-bold>' + 'Chi' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'nhom') {
            popupContent += '<tr><td text-bold>' + 'Nh??m' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'vitri') {
            popupContent += '<tr><td text-bold>' + 'V??? tr??' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'phancap') {
            popupContent += '<tr><td text-bold>' + 'Ph??n c???p' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'name_khoahoc') {
            popupContent += '<tr><td text-bold>' + 'T??n khoa h???c' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'name_thongdung') {
            popupContent += '<tr><td text-bold>' + 'T??n th??ng d???ng' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'thanhphan_loai') {
            popupContent += '<tr><td text-bold>' + 'Th??nh ph???n lo??i' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'bienphap_ungpho') {
            popupContent += '<tr><td text-bold>' + 'Bi???n ph??p ???ng ph??' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'phamvi_anhhuong') {
            popupContent += '<tr><td text-bold>' + 'Ph???m vi ???nh h?????ng' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'nguyennhan_xayra') {
            popupContent += '<tr><td text-bold>' + 'Nguy??n nh??n x???y ra' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'dientich_anhhuong') {
            popupContent += '<tr><td text-bold>' + 'Di???n t??ch ???nh h?????ng' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'thoigian_xayra_date') {
            popupContent += '<tr><td text-bold>' + 'Th???i gian x???y ra' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'thoigian_khacphuc_date') {
            popupContent += '<tr><td text-bold>' + 'Th???i gian kh???c ph???c' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
        else if (p == 'loai') {
            popupContent += '<tr><td text-bold>' + 'Lo??i' + '</td><td>'+ feature.properties[p] + '</td></tr>';
        }
    }
    popupContent += '</table></div>';
    return layer.bindPopup(popupContent);
}

var markers = L.markerClusterGroup({
    maxClusterRadius: 80,
    showCoverageOnHover: false,
    spiderLegPolylineOptions: {
        weight: 2,
        opacity: 1
    },
    iconCreateFunction: function (cluster) {
        var childCount = cluster.getChildCount();
        // console.log(childCount)
        var c = ' marker-cluster-';
        if (childCount <= 5) {
            c += 'small';
        }
        else if (childCount < 10) {
            c += 'medium';
        }
        else {
            c += 'large';
        }
        return new L.DivIcon({ html: '<div><span style="margin-left: 0px;">' + childCount + '</span></div>',
            className: 'marker-cluster' + c, iconSize: new L.Point(40, 40) });
    },
    spiderfyOnMaxZoom: false, showCoverageOnHover: true, zoomToBoundsOnClick: true,
});

var markers_array = [];
var features_all_data = new L.GeoJSON.AJAX("all-marker", {
    maxClusterRadius: 80,
    showCoverageOnHover: false,
    spiderLegPolylineOptions: {
        weight: 2,
        opacity: 1
    },
    pointToLayer: function(feature, latlng) {
        // console.log(feature.name_table)
        var mt_icon
        if (feature.name_table == 'mt_sinhvat') {
            mt_icon = new L.divIcon({
                html: "<i class='icon-bug2 sinhvat_symbol'></i>",
                popupAnchor: [0, 0],
                iconAnchor: [12, 2],
                className: 'mouse_pointer sinhvat_divIcon'
            });
        }
        else if (feature.name_table == 'mt_khuvuc_baoton_sinhthai') {
            mt_icon = new L.divIcon({
                html: "<i class='icon-shield-check khuvuc_baoton_sinhthai_symbol'></i>",
                popupAnchor: [0, 0],
                iconAnchor: [12, 2],
                className: 'mouse_pointer khuvuc_baoton_sinhthai_divIcon'
            });
        }
        else if (feature.name_table == 'mt_duan') {
            mt_icon = new L.divIcon({
                html: "<i class='icon-files-empty2 duan_symol'></i>",
                popupAnchor: [0, 0],
                iconAnchor: [12, 2],
                className: 'mouse_pointer duan_divIcon'
            });
        }
        else if (feature.name_table == 'mt_nguonthai') {
            mt_icon = new L.divIcon({
                html: "<i class='icon-filter4 nguonthai_symbol'></i>",
                popupAnchor: [0, 0],
                iconAnchor: [12, 2],
                className: 'mouse_pointer nguonthai_divIcon'
            });
        }
        else if (feature.name_table == 'mt_suco_moitruong') {
            mt_icon = new L.divIcon({
                html: "<i class='icon-alert suco_moitruong_symbol'></i>",
                popupAnchor: [0, 0],
                iconAnchor: [12, 2],
                className: 'mouse_pointer suco_moitruong_divIcon'
            });
        }
        else if (feature.name_table == 'mt_vung_sinhthai') {
            mt_icon = new L.divIcon({
                html: "<i class='icon-lastfm vung_sinhthai_symbol'></i>",
                popupAnchor: [0, 0],
                iconAnchor: [12, 2],
                className: 'mouse_pointer vung_sinhthai_divIcon'
            });
        }
        markers_array.push(L.marker(latlng, { icon: mt_icon}))
        return L.marker(latlng, { icon: mt_icon });
    },
    onEachFeature: function(feature, layer) {
        L.Polygon.addInitHook(function () {
            this._latlng = this._bounds.getCenter();
        });
        L.Polygon.include({
            getLatLng: function () {
                return this._latlng;
            },
            setLatLng: function () {}
        });
        L.Polyline.addInitHook(function () {
            this._latlng = this._bounds.getCenter();
        });
        L.Polyline.include({
            getLatLng: function () {
                return this._latlng;
            },
            setLatLng: function () {}
        });

       // console.log(feature)
        popup_marker(layer, feature)
    }
});

features_all_data.on('data:loaded', function () {
    map.addLayer(markers);
    markers.addLayer(features_all_data);

    var current_Url = new URL(window.location.href);
    var id_row = current_Url.search.split("=")[1].split('&')[0];
    var geom_row = current_Url.search.split('&')[2].split(',');
    var url_row_map = 'http://localhost/tnmt_softs/mt_web/public/row_map';
    // console.log(current_Url.search.split('&')[2].split(','))

    /*Zoom to marker when loaded page*/
    $.ajax({
        type: 'GET',
        url: url_row_map + current_Url.search,
        data: {
            id: id_row,
            geom: geom_row,
        },
        dataType: 'json',
        success: function (data) {
            var marker_array = features_all_data.getLayers();
            console.log(marker_array)
            var result = []
            marker_array.forEach(ele => {
                if (ele.feature.geometry.type == 'Polygon' || ele.feature.geometry.type == 'LineString') {
                    var ele_geom = ele.feature.geometry.coordinates.flat(2);
                    for(var i=0; i < ele_geom.length; i++) {
                        if (ele_geom[i] == data.geom[i]) {
                           result.push(ele);
                           break;
                        }
                    }
                }
                else if (ele.feature.geometry.type == 'Point') {
                    var ele_geom = ele.feature.geometry.coordinates;
                    for(var i=0; i < ele_geom.length; i++) {
                        if (ele_geom[i] == data.geom[i]) {
                            result.push(ele);
                            break;
                        }
                    }
                }
            })
            console.log(result)
            // map.setView([result[0]._latlng.lat, result[0]._latlng.lng], 20, {animate:true});
            map.flyTo([result[0]._latlng.lat, result[0]._latlng.lng], 20, {
                animate: false,
                duration: 1
            });

            var popup = L.popup()
                .setLatLng([result[0]._latlng.lat, result[0]._latlng.lng])
                .setContent(result[0]._popup._content)
                .openOn(map);

            /*Zoom v?? x??a c??c ??i???m kh??ng li??n quan*/
            /*var array_ele = features_all_data._layers
            markers.eachLayer(layer => {
                if(layer.feature.id != data.id || layer.feature.name_table != data.name_table) {
                    markers.removeLayer(layer);
                } else {
                    console.log(layer)
                }
            });*/
            /*Zoom v?? t???o v??ng bounds*/
            /*var zoom_marker = L.geoJson(JSON.parse(data.data.col_geom));
            zoom_marker.addTo(map);
            var coor_SouthWest = zoom_marker.getBounds().getSouthWest();
            var coor_NorthEast = zoom_marker.getBounds().getNorthEast();
            bounds = L.latLngBounds(coor_SouthWest, coor_NorthEast)

            var rect = L.rectangle(bounds, {
                color: 'orange',
                weight: 1
            }).addTo(map);

            map.fitBounds(zoom_marker.getBounds());
            zoom_marker.remove()*/
        }
    })
});

$(".leaflet-control-lat").val(9.79602);
$(".leaflet-control-lng").val(106.32225);
