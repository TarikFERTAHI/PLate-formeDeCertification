$(function ()
{
    'use strict';
    var i = 0, len = $('.question').length;
    function show_element(index, mls)
    {
        if (index == 0)
            $("#precbtn").fadeOut(0);
        else
            $("#precbtn").fadeIn(mls);

        $('.question').fadeOut(0);
        $('.question').eq(index).fadeIn(mls);
    }
    show_element(i, 0);
    $("#nextbtn").on("click", function()
    {
        if ($("#nextbtn").val() == "Afficher le Resultas")
            $("form").submit();
        if (i < len - 1)
            i++;
        if (i == len - 1)
            $("#nextbtn").val("Afficher le Resultas");
        show_element(i, 500);
    });
    $("#precbtn").on("click", function()
    {
        if (i > 0)
            i--;
        if (i < len -1)
            $("#nextbtn").val("Next");
        show_element(i, 500);
    });
    
    $('#imprimer').click(function ()
    {
        //console.log($(window));
        $(window)[0].print();
    });
});