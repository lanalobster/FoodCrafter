const side = 80;
let width = 0;

let logoCanvas = document.getElementById("logo-canvas");
logoCanvas.width = side;
logoCanvas.height = side;

let logoCx = logoCanvas.getContext("2d");
let logoImg = document.createElement("img");
let redLogoImg = document.createElement("img");

logoImg.src = "../images/logo.jpg";
redLogoImg.src = "../images/red-logo.jpg";

redLogoImg.addEventListener("load", () => {
    logoCx.drawImage(redLogoImg, 0, 0, side, side);
});

logoImg.addEventListener("load", () => {
    changeLogo();
});

const images = [logoImg, redLogoImg];
let nextImgIndex = 0;

const changeLogo = () =>{
    width += 5;
    logoCx.drawImage(images[nextImgIndex], 0, 0, 
        images[nextImgIndex].width * width / side, images[nextImgIndex].height,
        0, 0, width, side);
    if(width >= side)
    {
        width = 0;
        if(nextImgIndex == 1){
            nextImgIndex = 0;
        }else{
            nextImgIndex = 1; 
        }
    }
    setTimeout(changeLogo, 200);
}