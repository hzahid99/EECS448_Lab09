document.getElementById('Storeback').onsubmit = function(){
    let username = document.getElementById('username');
    let password = document.getElementById('password');

    let carrera = document.getElementById('carrera');
    let movado = document.getElementById('movado');
    let rolex = document.getElementById('rolex');

    let shipment1 = document.getElementById('7days');
    let shipment2 = document.getElementById('overnight');
    let shipment3 = document.getElementById('3days');
    let emailformat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    
 if(carrera.value=="" || movado.value=="" || rolex.value=="" )
 {
    alert("Enter the number of watches!");
    return(false);
 }

 else if(carrera.value < 0 || movado.value < 0 || rolex.value < 0)
 {
    alert("Number of watches cannot be negative!");
    return(false);
 }

 if(password.value=="")
 {
    alert("Enter the password");
    return(false);
 }

 if(!shipment1.checked && !shipment2.checked && !shipment3.checked){
     alert("Select the shipping option");
     return(false);
 }

 if(username.value=="")
 {
     alert("Please enter username");
     return(false);
 }
 if(!emailformat.test(username.value))
 {
    alert("Invalid email entered. Correct format: username@domain.com)");
    username.focus;
    return (false);
 }
}

function Reset()
{
    document.getElementById("username").value="";
    document.getElementById("password").value="";
    document.getElementById("carrera").value="";
    document.getElementById("movado").value="";
    document.getElementById("rolex").value="";
    document.getElementById('overnight').checked = false;
    document.getElementById('3days').checked = false;
    document.getElementById('7days').checked = false;
}

//2850
//695
//8750