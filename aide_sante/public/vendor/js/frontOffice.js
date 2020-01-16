function refrecheCaptcha(url) {
    //captcha
    $(".btn-refresh").click(function(){
        $.ajax({
            type:'GET',
            url:url,
            success:function(data){
                $(".captcha span").html(data.captcha);
            }
        });
    });
}

$(document).ready(function(){
    var date_input=$('input[name="date"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
        format: 'yyyy-mm-dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
    });

});