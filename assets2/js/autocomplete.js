var data = [];
$.getJSON('https://staklim-riau.bmkg.go.id/assets2/js/alatpos.json', function(result) {
    $.each(result.entries, function(index, val) {
        data.push(val);
    });
});

$( "#auto_check" ).autocomplete({
    source: data,
});