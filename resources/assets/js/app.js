/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


//// dash board graph
window.onload = function () {

    if (v = document.getElementById("line-chart")) {
        var chart1 = v.getContext("2d");
        window.myLine = new Chart(chart1).Line(
            {
                labels: myLabels,
                datasets: [
                    {
                        label: "Presence Overview",
                        fillColor: "rgba(48, 164, 255, 0.2)",
                        strokeColor: "rgba(48, 164, 255, 1)",
                        pointColor: "rgba(48, 164, 255, 1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: myData
                    }
                ]

            },
            {
                responsive: true,
                scaleLineColor: "rgba(0,0,0,.2)",
                scaleGridLineColor: "rgba(0,0,0,.1)",
                scaleFontColor: "#7f8184"
            });
    }

    ///for statistics charts
    if (v1 = document.getElementById("bar-chart")) {
        var chart2 = v1.getContext("2d");
        window.myBar = new Chart(chart2).Bar({
            labels: barLabels,
            datasets: [{
                fillColor: "rgba(179, 229, 252,1.0)",
                strokeColor: "rgba(2, 136, 209,1.0)",
                highlightFill: "rgba(2, 136, 209,0.7)",
                highlightStroke: "rgba(1, 87, 155,1.0)",
                data: barData
            }]

        }, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.3)",
            scaleGridLineColor: "rgba(0,0,0,.1)",
            scaleFontColor: "#77797c"
        });
    }

    if (v2 = document.getElementById("pie-chart")) {
        var chart3 = document.getElementById("pie-chart").getContext("2d");
        window.myPie = new Chart(chart3).Pie([{
            value: nb_notes_done,
            color: "#66bb6a",
            highlight: "#81c784",
            label: "نقاط محققة"
        }, {
            value: nb_notes_not,
            color: "#ffd740",
            highlight: "#fac878",
            label: "نقاط مقترحة"
        }], {
            responsive: true,
            segmentShowStroke: false
        });
    }
};


/// notes js

$(function () {
    $('#datetimepicker').datetimepicker(
        {
            defaultDate: moment(),
            locale: 'fr',
            format: 'YYYY-M-D HH:mm'
        }
    );
});


$(document).on('click', '#btn-add-note', function () {
    $('.note-list').append("<li class='todo-list-item'> <label>" + $('#note-input').val() + "</label>" +
        "<input type='hidden' name='notes[]' value=" + $('#note-input').val() + ">" +
        "<div class='pull-right action-buttons'><a class='note-item'><em " +
        "class='fa fa-trash'></em></a></div></li>");
    $('#note-input').val("");
    return false;
});


$(document).on('click', '.note-item', function () {
    $(this).closest('li').remove();
});


!function ($) {
    $(document).on("click", "ul.nav li.parent > a ", function () {
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

$(document).on('click', '.panel-heading span.clickable', function (e) {

    $("html, body").animate({scrollTop: 0}, "slow");
    return false;

})
