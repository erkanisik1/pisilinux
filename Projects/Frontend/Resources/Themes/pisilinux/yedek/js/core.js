/**
 *
 */
let hexToRgba = function(hex, opacity) {
  let result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
  let rgb = result ? {
    r: parseInt(result[1], 16),
    g: parseInt(result[2], 16),
    b: parseInt(result[3], 16)
  } : null;

  return 'rgba(' + rgb.r + ', ' + rgb.g + ', ' + rgb.b + ', ' + opacity + ')';
};
/**
 *
 */
$(document).ready(function() {
  /** Constant div card */
  const DIV_CARD = 'div.card';

  /** Initialize tooltips */
  $('[data-toggle="tooltip"]').tooltip();

  /** Initialize popovers */
  $('[data-toggle="popover"]').popover({
    html: true
  });

  /** Function for remove card */
  $('[data-toggle="card-remove"]').on('click', function(e) {
    let $card = $(this).closest(DIV_CARD);

    $card.remove();

    e.preventDefault();
    return false;
  });
$('#myCarousel').find('.carousel-item').first().addClass('active');
  /** Function for collapse card */
  $('[data-toggle="card-collapse"]').on('click', function(e) {
    let $card = $(this).closest(DIV_CARD);

    $card.toggleClass('card-collapsed');

    e.preventDefault();
    return false;
  });

  /** Function for fullscreen card */
  $('[data-toggle="card-fullscreen"]').on('click', function(e) {
    let $card = $(this).closest(DIV_CARD);

    $card.toggleClass('card-fullscreen').removeClass('card-collapsed');

    e.preventDefault();
    return false;
  });

  /**  */
  if ($('[data-sparkline]').length) {
    let generateSparkline = function($elem, data, params) {
      $elem.sparkline(data, {
        type: $elem.attr('data-sparkline-type'),
        height: '100%',
        barColor: params.color,
        lineColor: params.color,
        fillColor: 'transparent',
        spotColor: params.color,
        spotRadius: 0,
        lineWidth: 2,
        highlightColor: hexToRgba(params.color, .6),
        highlightLineColor: '#666',
        defaultPixelsPerValue: 5
      });
    };

    require(['sparkline'], function() {
      $('[data-sparkline]').each(function() {
        let $chart = $(this);

        generateSparkline($chart, JSON.parse($chart.attr('data-sparkline')), {
          color: $chart.attr('data-sparkline-color')
        });
      });
    });
  }

  /**  */
  if ($('.chart-circle').length) {
    require(['circle-progress'], function() {
      $('.chart-circle').each(function() {
        let $this = $(this);

        $this.circleProgress({
          fill: {
            color: tabler.colors[$this.attr('data-color')] || tabler.colors.blue
          },
          size: $this.height(),
          startAngle: -Math.PI / 4 * 2,
          emptyFill: '#F4F4F4',
          lineCap: 'round'
        });
      });
    });
  }
  $('.alert1').on('click', function(){
    $.confirm({
      theme: 'dark',
    title: 'Pisilinux.org Uyarı!',
    content: 'Yeni Konu açabilmek için lütfen üye girişi yapın...',
    type: 'red',
    typeAnimated: true,
    buttons: {
        tryAgain: {
            text: 'ÜYE GİRİŞİ',
            btnClass: 'btn-red',
            action: function(){
              $(location).attr('href', 'https://pisilinux.org/member')
            }
        },
        close: function () {
        }
    }
});
       
  });



  $("#formcategory").change(function() {
    var value = $(this).val().toLowerCase();
    $("#question tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

    $('#question').after('<div id="nav" class="pagination"></div>');
    var pageper = $('.listcount').val();
    if (pageper) {
       var rowsShown = pageper;
     }else{
       var rowsShown = 10;
     }
       
        var rowsTotal = $('#question tbody tr').length;
        var numPages = rowsTotal/rowsShown;
        for(i = 0;i < numPages;i++) {
            var pageNum = i + 1;
            $('#nav').append('<a href="#"  rel="'+i+'">'+pageNum+'</a> ');
        }
        $('#question tbody tr').hide();
        $('#question tbody tr').slice(0, rowsShown).show();
        $('#nav a:first').addClass('active');
        $('#nav a').bind('click', function(){

            $('#nav a').removeClass('active');
            $(this).addClass('active');
            var currPage = $(this).attr('rel');
            var startItem = currPage * rowsShown;
            var endItem = startItem + rowsShown;
            $('#question tbody tr').css('opacity','0.0').hide().slice(startItem, endItem).
                    css('display','table-row').animate({opacity:1}, 300);
        });

    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var saat = today.getHours()+':'+today.getMinutes()+':'+today.getSeconds();
    var yyyy = today.getFullYear();
    if(dd<10){
        dd='0'+dd;
    } 
    if(mm<10){
        mm='0'+mm;
    } 
    //var today = dd+'-'+mm+'-'+yyyy+' '+saat;
    //document.getElementById("currentDate").value = today;
    var currentDate = dd+'-'+mm+'-'+yyyy+' '+saat;
  $('#currentDate').val(currentDate); 
});

