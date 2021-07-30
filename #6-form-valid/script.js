function myFunction() {
    
    //let form  = document.getElementById('myForm');
    let phoneValue = document.getElementById("phone").value;
    let emailValue = document.getElementById("email").value; 
    let text;
    text='';
    
    if (!isEmail(emailValue)) {
        text = text + "E-mail'i hatalı girdiniz. <br>";
        //alert("E-mail'i hatalı girdiniz. ");

    } 

    if (isNaN(phoneValue) || phoneValue < 1 ) {
        //alert("Telefon numarasını hatalı girdiniz. ");
        text = text + "Telefon numarasını hatalı girdiniz. <br>";
        
    } 
    

    document.getElementById("demo").innerHTML = text;
    
    if (text!='')  {
        return false;  
    } else {
      Swal.fire(
        'Form gönderildi.',
        'Form gönderme işlemi başarılı.',
        'success'
      )
    
    var form = document.getElementById("myForm");
    function handleForm(event) { event.preventDefault(); } 
    form.addEventListener('submit', handleForm)
    return true;

    }
           
}


function isEmail(email) {
return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
} 
