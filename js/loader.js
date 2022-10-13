var ctx = document.getElementById('circularLoader').getContext('2d');
var al = 0;
var start = 4.72;
var cw = ctx.canvas.width;
var ch = ctx.canvas.height; 
var diff;
var sim;
function progressSim(){
	diff = ((al / 100) * Math.PI*2*10).toFixed(2);
	ctx.clearRect(0, 0, cw, ch);
	ctx.lineWidth = 17;
	ctx.fillStyle = '#0d6efd';
	ctx.strokeStyle = "#0d6efd";
	ctx.textAlign = "center";
	ctx.font="28px monospace";
	ctx.fillText(al+'%', cw*.52, ch*.5+5, cw+12);
	ctx.beginPath();
	ctx.arc(100, 100, 75, start, diff/10+start, false);
	ctx.stroke();
	if(al >= 100){
		clearTimeout(sim);
        myModal.show();        
        loader.style.display = 'none';
        // initConfetti();
        // render();
    }
	al++;
} 

//get winner
const win = document.querySelector("#winner");
const loader = document.querySelector(".loader-con");
var myModal = new bootstrap.Modal(document.getElementById('modal'), {
  keyboard: false
});
win.addEventListener('click', function(){
  loader.style.display = 'block';
  sim = setInterval(progressSim, 20);
});
