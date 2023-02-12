const x = document.getElementById('status')

if(x.textContent == "Abnormal"){
    x.style.textTransform = "uppercase"
    x.style.color = "red";
}else{
    x.style.color = "green";
    x.style.textTransform = "uppercase"
}