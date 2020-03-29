const histogramCanvas = document.getElementById("histogram-canvas");
histogramCanvas.width = 300;
histogramCanvas.height = 300;
  
var histogramCx = histogramCanvas.getContext("2d");

const drawLine = (ctx, startX, startY, endX, endY,color) =>{
    ctx.save();
    ctx.strokeStyle = color;
    ctx.beginPath();
    ctx.moveTo(startX,startY);
    ctx.lineTo(endX,endY);
    ctx.stroke();
    ctx.restore();
}

const drawBar = (ctx, upperLeftCornerX, upperLeftCornerY, width, height,color)=>{
    ctx.save();
    ctx.fillStyle=color;
    ctx.fillRect(upperLeftCornerX,upperLeftCornerY,width,height);
    ctx.restore();
}

const ingredientFrequencies = {
    "Олія": 10,
    "Мука": 17,
    "Яйця": 13,
    "Какао": 5
};