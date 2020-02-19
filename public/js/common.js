var Plugin = {
    chosen:function () {
        $(".chosen-select").chosen({
            disable_search:true,
            allow_single_deselect: true,
            width: "100%",
            inherit_select_classes:true
        });
    }
}

$(document).ready(function () {
    Plugin.chosen();
});
