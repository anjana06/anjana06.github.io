var im = document.getElementById("img");

var images = ["image/img.jpg","image/image1.jpg","image/image2.jpg","image/image3.jpg"];
var index=0;

function changeImage()
{
  im.setAttribute("src", images[index]);
  index++;
  if(index >= images.length)
  {
    index=0;
  }
}

setInterval(changeImage, 5000);