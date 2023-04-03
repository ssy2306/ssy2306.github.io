var cursor=document.getElementById("cursor");
document.onmousemove=function(a){
    cursor.style.left=(a.pageX-15) + "px";
    cursor.style.top=(a.pageY-15)+ "px";
    cursor.style.display="block";
}