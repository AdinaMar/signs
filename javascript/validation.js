let email = document.querySelector('#email');
let username = document.querySelector('#username');
let span = document.getElementsByTagName('span');

email.onkeydown = function() {
    const regex = /^([\.\_a-zA-Z0-9]+)@([a-zA-Z]+)\.([a-zA-Z]){2,8}$/;
    const regexo =/^([\.\_a-zA-Z0-9]+)@([a-zA-Z]+)\.([a-zA-Z]){2,3}\.[a-zA-Z]{1,3}$/;
    if(regex.test(email.value) || regexo.test(email.value)) {
        span[0].innerText = "Your email is valid";
        span[0].style.color = 'lime';
        span[0].style.fontSize = '10px';
        
    } else {
        span[0].innerText = "Please enter a valid email";
        span[0].style.color = 'red';
    }
}