// from splash to main program
function toMain(){
    document.getElementById("goBtn").onclick = function () {
        location.href = "http://localhost:8088/Sites/BookSense/main.php";
    };  
}
// JavaScript Document
function splashDot1() {
	var c = document.getElementById("myCanvas2");
	var ctx = c.getContext("2d");
	var width = canvas.width;
	var height = canvas.height;
	
	ctx.fillStyle = "rgb(0,162,232)"; // light blue
	ctx.fillRect(50,50,35,30);
	ctx.fillRect(95,40,45,40);
	ctx.fillRect(150,30,35,50);
	ctx.fillRect(205,60,35,5);
	ctx.fillRect(205,50,35,8);
	ctx.fillRect(205,46,35,12);
	ctx.fillRect(202,39,40,6);
	ctx.fillRect(202,26,40,12);
	
	ctx.beginPath();
	ctx.fillStyle = "rgb(255,255,20)"; //yellow
	ctx.arc(220,13,12,Math.PI*2,0,true);
	ctx.fill();

	ctx.beginPath();
	ctx.strokeStyle = "rgb(0,162,232)"; //light blue
	ctx.arc(222,68,17,Math.PI*1,Math.PI*2,true);
	ctx.stroke();
    
}

/// opens window that holds the pdf when clicked on
function drop(){
	window.onload = new PDFObject({ url: "database/The Huey P. Newton Reader.pdf" }).embed("pdf");
}

/// MENU BUTTONS

