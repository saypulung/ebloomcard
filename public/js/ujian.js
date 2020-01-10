function CountDown(duration, display) {
    if (!isNaN(duration)) {
        var timer = duration, minutes, seconds;

      var interVal=  setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            $(display).html("<b>Sisa Waktu : " + minutes + "m : " + seconds + "s" + "</b>");
            if (--timer < 0) {
                timer = duration;
                document.form_soal.submit();
                $('#display').empty();
                clearInterval(interVal)
            }
            },1000);
    }
}
    $('.pilih_soal').click(function(){
        var data_id = $(this).attr('data-id');
        $('.soal').removeClass('hidden');
        $('.soal').addClass('hidden');
        $('#data-soal-id-'+data_id).removeClass('hidden');
        var data_pilih = parseInt($(this).attr('data-pilih'));
        if(data_pilih==0){
            $('.pilih_soal').removeClass('btn-warning');
            $('.pilih_soal').addClass('btn-primary');
            $('.pilih_soal').attr('data-pilih','0');
            $(this).removeClass('btn-primary');
            $(this).addClass('btn-warning');
            $(this).attr('data-pilih','1');
        }
    });
CountDown(2700,'#display_timer');