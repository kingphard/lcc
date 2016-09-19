$('document').ready(function(){

$('#vid_upload').click(function(){
	swal({   title: "Warning",   text: "PLEASE ONLY UPLOAD VIDEOS BELOW 25MB, ELSE USE YOUTUBE CHANNEL",   type: "warning",   confirmButtonText: "Ok" }); 
});
$('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });


});