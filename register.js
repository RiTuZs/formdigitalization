const form = document.querySelector('.form form');
submitbtn = form.querySelector('.submit input');
errortext = form.querySelector('.error-text');

form.onsubmit = (e) => {
    e.preventDefault();
}

submitbtn.onclick = () =>{
    // start ajax
    
    let xhr = new XMLHttpRequest(); //creat xml object
    xhr.open("POST","signup.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status == 200) {
                let data = xhr.response;
                if(data == "Success"){
                    location.href="verify.php"
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
    xhr.send(formData);  //sending data to php
}  