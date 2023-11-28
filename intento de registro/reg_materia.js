let formx=document.querySelector(',formt');
let esp=document.querySelector('.esp');
formx.addEventListener('submit',function(e){
    let datos=new FormData(formx);
    e.preventDefault();
    fetch("reg_materia.php",{method:'POST',body:datos})
    .then(res=>res.text())
    .then(data=>{
        alert(data);
    })
})

onload=function(){
    let cad="";
   fetch("reg_materia2.php")
   .then(res=>res.json())
   .then(data=>{
    for(i of data)
    {
        cad+="<option value"s
    }
   })
}