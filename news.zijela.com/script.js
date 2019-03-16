// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    var sidebar = document.getElementsByClassName('sidebar-dashboard');
    var side = sidebar[0];
    var main = document.getElementsByClassName('floater');
    var floating = main[0];
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
    side.style.position="fixed";
    side.style.top="100px";
    side.style.left="0px";

    
  } else {
    navbar.classList.remove("sticky");
    side.style.position="static";

    
  }
}

//Signup form
function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match";
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!";
    }
} 
function validatephone(phone) 
{
    var maintainplus = '';
    var numval = phone.value
    if ( numval.charAt(0)=='+' )
    {
        maintainplus = '';
    }
    curphonevar = numval.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|`¬\]\[]/g,'');
    phone.value = maintainplus + curphonevar;
    maintainplus = '';
    phone.focus;
}
// validates text only
function Validate(txt) {
    txt.value = txt.value.replace(/[^a-zA-Z-'\n\r.]+/g, '');
}
// validate email
function email_validate(email)
{
var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

    if(regMail.test(email) === false)
    {
    document.getElementById("status").innerHTML    = "<span class='warning'>Email address is not valid yet.</span>";
    }
    else
    {
    document.getElementById("status").innerHTML	= "<span class='valid'>Thanks, you have entered a valid Email address!</span>";	
    }
}

//SHOW USER's READ
if (sessionStorage.length>0){
    for (let i = 0; i < sessionStorage.length; i++) {       
       let key = sessionStorage.key(i);
       var val = sessionStorage.getItem(key); 
            var reader = document.getElementById(val);
            reader.innerHTML = '&#10004;';
            reader.previousSibling.style.display="none";

    }
}

var confirmTitle = document.getElementsByClassName('title-tester');
for (var i=0;i<confirmTitle.length;i++){
    confirmTitle[i].addEventListener('keyup', checkTitle);
}

function checkTitle(e){
        var target = this;
        var parent = target.parentNode;
        var firstChild = parent.firstElementChild;
        var lastChild = parent.lastElementChild;

        if (target.value.toLowerCase().trim()===firstChild.innerHTML.toLowerCase().trim()){
            lastChild.innerHTML = 'Good job!';
            target.nextElementSibling.addEventListener('click', ticker);
        }else if(target.value.toLowerCase().trim()===""){
            lastChild.innerHTML = '';
        }else{
            lastChild.innerHTML = 'Incorrect, try again!';
        }  

}

function ticker(e){
    e.preventDefault();
    var total = document.getElementById("total-read-points").innerHTML;
    var session = document.getElementById("session-read-points").innerHTML;
    var store = e.target.id;
    sessionStorage.setItem(store, store);


        //UPDATE SESSION AND TOTAL READ POINTS WITH AJAX 
        total++;
        session++;
        var read = e.target;
        update(total,session,read);

}

function update(total,session,read){
    //UPDATE SESSION AND TOTAL READ POINTS DATABASE WITH AJAX
    var xhttp  = new XMLHttpRequest();
    var params = 'readupdate=true';
   // console.log (params);
        xhttp .onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var getIt = JSON.parse(this.responseText);
                if (getIt.updated=="true"){
                document.getElementById("total-read-points").innerHTML=total;
                document.getElementById("session-read-points").innerHTML=session;
                read.removeEventListener("click",ticker);
                read.innerHTML='&#10004;';
                read.previousSibling.style.display="none";
                }
            }
        };
        xhttp.open("POST", "test.php", true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send(params);
       // xhttp.send();
}

function goToLogin(){
   window.location.href = '/login.php';
}
function goToSignup(){
   window.location.href = '/signup.php';
}
