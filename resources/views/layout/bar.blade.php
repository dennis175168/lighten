<style>
#top-bar{
	 width:100%;
	 height:50px;
	 background:#32b3bf;
	 position:fixed;
	 top:-65px;
	 
	 Z-index:3;
	 /* CSS3 陰影*/
	-webkit-box-shadow: 0px 8px 15px #333;
	-moz-box-shadow: 0px 8px 15px #333;
	box-shadow: 0px 8px 15px #333;	 
}
</style>
<script type='text/javascript' src="jquery-1.9.1.min.js"></script>
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<script type='text/javascript'>
$(function(){
　$(window).load(function(){
　　$(window).bind('scroll resize', function(){
　　var $this = $(this);
　　var $this_Top=$this.scrollTop();

　　//當高度小於100時，關閉區塊 
　　if($this_Top < 100){
　　　$('#top-bar').stop().animate({top:"-65px"});
　　　}
　　　　if($this_Top > 100){
　　　　$('#top-bar').stop().animate({top:"0px"});
　　　 }
　　}).scroll();
　});
});
</script>