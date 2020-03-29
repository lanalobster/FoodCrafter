const width = 600;
const height = 600;
const scale = 8;
const histogramRectangleWidth = scale * 10;
const padding = 30;

const histogramCanvas = document.getElementById("histogram-canvas");
histogramCanvas.width = width;
histogramCanvas.height = height;
  
const histogramCx = histogramCanvas.getContext("2d");

class histogramRectangle {
    constructor(title, frequency, color) {
        this.title = title;
        this.frequency = frequency;
        this.color = color;
    }
}

const histogramRectangles = [new histogramRectangle("Олія", 40, "#FFA840"),
    new histogramRectangle("Мука", 50, "#FF9273"),
    new histogramRectangle("Яйця", 45, "#64AAD0"),
    new histogramRectangle("Какао", 15, "#62DA9A"),
    new histogramRectangle("Молоко", 35, "#034569")];

histogramCx.fillStyle = "white"; 
histogramCx.fillRect(0, 0, width, height);

for(let i = 0; i < histogramRectangles.length; ++i)
{
    histogramCx.fillStyle = histogramRectangles[i].color;
    histogramCx.fillRect(padding + i * (scale + histogramRectangleWidth), 
        height - histogramRectangles[i].frequency*scale - padding,
        histogramRectangleWidth,
        histogramRectangles[i].frequency*scale); 
}

histogramCx.fillStyle = "#A62500"; 
histogramCx.lineWidth = 2.0; 
histogramCx.beginPath(); 
histogramCx.moveTo(padding, padding); 
histogramCx.lineTo(padding, height - padding); 
histogramCx.lineTo(width - padding, width - padding); 
histogramCx.stroke();

histogramCx.font  = "15px Lora serif"

for(let i = 0; i < histogramRectangles.length; ++i) 
{ 
    histogramCx.fillText(i * 20 + "", padding / 10 , height - padding - i * scale * 20); 
    histogramCx.beginPath(); 
    histogramCx.moveTo(padding - 5, height - padding - i * scale * 20); 
    histogramCx.lineTo(padding, height - padding - i * scale * 20); 
    histogramCx.stroke(); 
}

for(let i = 0; i < histogramRectangles.length; ++i) 
{ 
    histogramCx.fillText(histogramRectangles[i].title, padding + i * (histogramRectangleWidth + scale), height - padding / 2); 
}