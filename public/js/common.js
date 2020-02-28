var Select2 = {
    city:function () {
        $('select[name="city"]').select2({
            placeholder: 'City',
            theme:'bootstrap',
            width: '100%',
            minimumResultsForSearch: Infinity
        });
    },
    district:function () {
        $('select[name="district"]').select2({
            placeholder: 'District',
            theme:'bootstrap',
            width: '100%',
            minimumResultsForSearch: Infinity
        });
    },
    ward:function () {
        $('select[name="ward"]').select2({
            placeholder: 'Ward',
            theme:'bootstrap',
            width: '100%',
            minimumResultsForSearch: Infinity
        });
    }
}

$(document).ready(function () {
    Select2.city();
    Select2.district();
    Select2.ward();
});
