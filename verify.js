const otp = document.querySelectorAll('.otp-field');

otp[0].focus();

otp.forEach((field,index) =>{
    field.addEventListener('keydown', (e) => {
        if(e.key >=0 && e.key <=9){
            otp[index].value = "";
            setTimeout(() => {
                otp[index+1].focus();
            }, 4);
        }
        else if(e.key === 'Backspace'){
            setTimeout(() => {
                otp[index-1].focus();
            }, 4);
        }
    });
});

const form = document.querySelector('.form form');
submitbtn = form.querySelector('.submit .button');
errortext = form.querySelector('.error-text');

form.onsubmit = (e) => {
    e.preventDefault();
}

submitbtn.onclick = () =>{
    // start ajax
    
    let xhr = new XMLHttpRequest(); //creat xml object
    xhr.open("POST","otp.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status == 200) {
                let data = xhr.response;
                if(data == "Success"){
                    location.href="base.php"
                }
                else{
                    errortext.textContent = data;
                    error.style.display = "block";
                }
            }
        }
    }
    // send data through ajax to php
    let formData = new FormData(form); //creating new object from form data
    xhr.send(FormData);  //sending data to php
}  