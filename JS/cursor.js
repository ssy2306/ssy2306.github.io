var cursor=document.getElementById("cursor");
document.onmousemove=function(a){
    cursor.style.left=(a.pageX-15) + "px";
    cursor.style.top=(a.pageY-15)+ "px";
    cursor.style.display="block";
};

// the name part
const text = "Shahil Singh Yadav";
let index = 0;

function typeText() {
  document.getElementById("typing-text").textContent = text.slice(0, index);
  index++;

  if (index > text.length) {
    index = 0;
  }

  setTimeout(typeText, 300);
}

typeText();
