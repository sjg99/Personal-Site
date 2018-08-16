var alphaExp = /^[ a-zA-Z]+$/;
var x;
var r1=0,r2=0;
x=prompt("Inserte la cadena").trim();
if(x==null || x==""){
    alert("La cadena no debe estar vacia");
    location.reload(true);
}
else if (!x.match(alphaExp))
{
    alert("La cadena solo acepta letras");
    location.reload(true);
}else{
for(var i=0;i<x.length;i++){
    if((x.charAt(i)>='A' && x.charAt(i)<='Z') || x.charAt(i)==' '){
        r1=1;
    }
    else{
        r1=0;
        break;
    }    
}
for(var i=0;i<x.length;i++){
    if((x.charAt(i)>='a' && x.charAt(i)<='z') || x.charAt(i)==' '){
        r2=1;
    }
    else{
        r2=0;
        break;
    }
}

if(r1==1){
    document.getElementById("xd").innerHTML="La cadena "+x+" esta formada solo por mayusculas";
}
if(r2==1){
    document.getElementById("xd").innerHTML="La cadena "+x+" esta formada solo por minisculas";
}
if(r1==0 && r2==0){
    document.getElementById("xd").innerHTML="La cadena "+x+" esta formada por letras mixtas";
}
}
