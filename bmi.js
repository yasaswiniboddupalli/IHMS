$('input#submit').on('click',function()
{
var height=$('input#height').val();
if($height != ''){
$.post('bmi.php',{height:height},function(data){
$('div#height-data').text(data);
});
}
});