const x = document.getElementById('status')

if(x.textContent == "normal"){
    x.style.textTransform = "uppercase"
    x.style.color = "green";
}else{
    x.style.color = "red";
    x.style.textTransform = "uppercase"
}