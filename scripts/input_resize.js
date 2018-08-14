function resize() {
	var width = document.getElementById("mc_embed_signup").offsetWidth;
	document.getElementById("mce-EMAIL").size = (width-125)/10;
	console.log(document.body.clientWidth);
}
window.onload = resize;
window.onresize = resize;
