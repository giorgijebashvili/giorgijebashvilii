function captcha(){
    var x = (Math.random()*100).toFixed(0);
    var cap=document.getElementById("cap");
    cap.innerText= x;
    console.log(cap);
}
captcha();