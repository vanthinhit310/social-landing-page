var Ajax = {
    getListDistrict: function () {
        try {
            let element = $('select[name="city"]');
            let district_element = $('select[name="district"]')
            if (element.length) {
                element.on('select2:select', function (item) {
                    $('.spin-icon-city').removeClass('d-none');
                    district_element.val(null).trigger('change');
                    district_element.html('<option></option>');
                    let district_id = item.params.data.id;
                    $.get(get_district_url, {district_id:district_id}, function (response) {
                        response.forEach(function (e) {
                            let option = new Option(e.name,e.maqh,false,false);
                            district_element.append(option).trigger('change');
                        });
                        $('.spin-icon-city').addClass('d-none');
                    });
                });
            }
        }
        catch (error) {
            console.log(error);
        }
    },
    getListWard:function () {
        try {
            let element = $('select[name="district"]');
            let ward_element = $('select[name="ward"]')
            if (element.length) {
                element.on('select2:select', function (item) {
                    $('.spin-icon-district').removeClass('d-none');
                    ward_element.val(null).trigger('change');
                    ward_element.html('<option></option>');
                    let ward_id = item.params.data.id;
                    $.get(get_ward_url, {ward_id:ward_id}, function (response) {
                        response.forEach(function (e) {
                            let option = new Option(e.name,e.xaid,false,false);
                            ward_element.append(option).trigger('change');
                        });
                        $('.spin-icon-district').addClass('d-none');
                    });
                });
            }
        }
        catch (error) {
            console.log(error);
        }
    }
}

$(document).ready(function () {
    Ajax.getListDistrict();
    Ajax.getListWard();
});

window.onload = function () {

}
