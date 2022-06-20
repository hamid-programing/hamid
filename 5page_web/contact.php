<?php include 'header.php';?>

<!-- about section start-->
<div class=" container py-5">
<h1 class="hading"> Contact Us</h1>
	<div class="row py-3">
    
		<div class="col-lg-6 col-md-6 col-12 py-5">
            
			
            <img src="images/c1.jpg" width="100%" height="100%">
			</div>
		<div class="col-lg-6 col-md-6 col-12">
			
        <form id="form" class="form">
            <h2>Register With Us</h2>
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="Enter Username">
                <small>Error Message</small>
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="Enter email">
                <small>Error Message</small>
            </div>
            <div class="form-control">
                <label for="phone">phone</label>
                <input type="phone" id="phone" placeholder="Enter phone">
                <small>Error Message</small>
            </div>
            <div class="form-control">
                <label for="Message">Confirm Password</label>
                <input type="text" id="Message" placeholder="Enter Message">
                <small>Error Message</small>
            </div>
            <button>Submit</button>
        </form>
    </div>
</div>
</div>


    <script>
const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const Message = document.getElementById('Message');

//Show input error messages
function showError(input, message) {
    const formControl = input.parentElement;
    formControl.className = 'form-control error';
    const small = formControl.querySelector('small');
    small.innerText = message;
}

//show success colour
function showSucces(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}

//check email is valid
function checkEmail(input) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(re.test(input.value.trim())) {
        showSucces(input)
    }else {
        showError(input,'Email is not invalid');
    }
}


//checkRequired fields
function checkRequired(inputArr) {
    inputArr.forEach(function(input){
        if(input.value.trim() === ''){
            showError(input,`${getFieldName(input)} is required`)
        }else {
            showSucces(input);
        }
    });
}


//check input Length
function checkLength(input, min ,max) {
    if(input.value.length < min) {
        showError(input, `${getFieldName(input)} must be at least ${min} characters`);
    }else if(input.value.length > max) {
        showError(input, `${getFieldName(input)} must be les than ${max} characters`);
    }else {
        showSucces(input);
    }
}

//get FieldName
function getFieldName(input) {
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}


//Event Listeners
form.addEventListener('submit',function(e) {
    e.preventDefault();

    checkRequired([username, email, phone, Message]);
    checkLength(username,3,15);
    checkLength(phone,10,12);
    checkLength(Message,20,100);
    checkEmail(email);
    //checkPasswordMatch(password, password2);
    });
</script>
<!-- about section start-->
<?php include 'footer.php';?>
