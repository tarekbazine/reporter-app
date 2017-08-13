
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


//// dash board graph
window.onload = function () {
    if (!(v = document.getElementById("line-chart"))) return;
    var chart1 = v.getContext("2d");
    window.myLine = new Chart(chart1).Line(
        {
            labels : myLabels,
            datasets : [
                {
                    label: "Presence Overview",
                    fillColor : "rgba(48, 164, 255, 0.2)",
                    strokeColor : "rgba(48, 164, 255, 1)",
                    pointColor : "rgba(48, 164, 255, 1)",
                    pointStrokeColor : "#fff",
                    pointHighlightFill : "#fff",
                    pointHighlightStroke : "rgba(220,220,220,1)",
                    data : myData
                }
            ]

        },
        {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.1)",
            scaleFontColor: "#7f8184"
        });
};


/// notes js

$(function () {
    $('#datetimepicker').datetimepicker(
        {
            defaultDate: moment(),
            locale: 'fr',
            format:'YYYY-M-D HH:mm'
        }
    );
});


$(document).on('click', '#btn-add-note', function () {
    $('.note-list').append("<li class='todo-list-item'> <label>"+$('#note-input').val()+"</label>" +
            "<input type='hidden' name='notes[]' value="+$('#note-input').val()+">"+
        "<div class='pull-right action-buttons'><a class='note-item'><em " +
        "class='fa fa-trash'></em></a></div></li>");
    $('#note-input').val("");
    return false;
});


$(document).on('click', '.note-item', function () {
    $(this).closest('li').remove();
});



!function ($) {
    $(document).on("click","ul.nav li.parent > a ", function(){
        $(this).find('em').toggleClass("fa-minus");
    });
    $(".sidebar span.icon").find('em:first').addClass("fa-plus");
}

(window.jQuery);
$(window).on('resize', function () {
    if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
})
$(window).on('resize', function () {
    if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
})

$(document).on('click', '.panel-heading span.clickable', function(e){

    $("html, body").animate({scrollTop: 0}, "slow");
    return false;
    //todo

    // var $this = $(this);
    // if(!$this.hasClass('panel-collapsed')) {
    //     $this.parents('.panel').find('.panel-body').slideUp();
    //     $this.addClass('panel-collapsed');
    //     $this.find('em').removeClass('fa-toggle-up').addClass('fa-toggle-down');
    // } else {
    //     $this.parents('.panel').find('.panel-body').slideDown();
    //     $this.removeClass('panel-collapsed');
    //     $this.find('em').removeClass('fa-toggle-down').addClass('fa-toggle-up');
    // }
})
