$(function(){
	$('#generate-button').bind('click', function(){ lipsify(); });	
});

function lipsify() {
var data = {
p : $('#paragraphs').val(),
l : $('input[name="length"]:checked').val(),
k : $('#keywords').val()
};

$.ajax({
type: "POST",
url: "lipsify.php",
data: data,
success: function(msg){
$('#generator-results').html(msg);
$('#generator-results').show();
}
}); 

}
