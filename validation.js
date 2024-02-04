// ------------------------------- Pjesa e Email Regex -------------------------------
// lejon vlera prej 0 deri 9
// Uppercase dhe Lowercase prej A ne Z lejohen
// Lejohen _ , - dhe .
// . nuk lejohet ne fillim dhe ne fund te pjeses lokale
// Pika te njepasnjeshme nuk lejohen
// Pjesa Lokale username@ ka max 64 characters
// Pjesa e @domain.com lejon numra prej 0 - 9
// Pjesa e @domain.com lejon Uppercase,Lowercase
// Pejsa e @doamin.com - dhe . nuk lejohen ne fillim dhe mbarim 
// Nuk lejohen . te njepasnjeshme .
// ------------------------------- Pjesa e Password Regex -------------------------------
 // var psw="^(?=.*[0-9])"; //se paku nje numer
// var psw = "^(?=.*[a-z])"; // se paku nje shkronje e vogel
// var psw = "^(?=.*[A-Z])"; // se paku nje shkronje e madhe
// var psw = "^(?=.*[@#$%^&-+=()])"; // karakteret speciale se paku njehere
// var psw = "^(?=\\S+$)"; // nuk lejon se paku nje white spaces 
// var psw = ".{8, 20}$"; // se paku 8 karaktere deri ne 20 karaktere max
//Andi
var emri;
var mbiemri;
var email;
var emailConfirmation;
var password;
var passwordConfirmation;
var mosha;
var gender1;
var gender2;
var male;
var female;



var emriVal;
var mbiemriVal;
var emailVal;
var emailConfirmationVal;
var passwordVal;
var passwordConfirmationVal;
var moshaVal;
var dateVal;


function signUp(){

   
    emri = document.getElementById("emriInput");
    mbiemri = document.getElementById("mbiemriInput");
    email = document.getElementById("emailInput");
    emailConfirmation = document.getElementById("emailConfirmationInput");
    password = document.getElementById("passwordInput");
    passwordConfirmation = document.getElementById("passwordConfirmationInput");
    mosha = document.getElementById("moshaInput");
    gender1 = document.getElementById("gender1");
    gender2 = document.getElementById("gender2");
    male = document.getElementById("male");
    female = document.getElementById("female");
    dateVal = document.getElementById('moshaInput').value; //2022-23-12
    const dateControl = document.querySelector('input[type="date"]');
    console.log(dateControl.valueAsNumber);

    
    

    

   
    
    emriVal = emri.value.trim();
    mbiemriVal = mbiemri.value.trim();
    emailVal = email.value.trim();
    emailConfirmationVal= emailConfirmation.value.trim();
    passwordVal = password.value.trim();
    passwordConfirmationVal = passwordConfirmation.value.trim();
    moshaVal = mosha.value;
    

    const date = new Date();
    let day = date.getDate();
    let month = date.getMonth() + 1;
    let year = date.getFullYear();

    let dayMonthYear = "";
    dayMonthYear += day + '-';
    dayMonthYear += month + '-';
    dayMonthYear += year;
    

    
    if(emriVal === ""){
        emri.style.outline="2.5px solid red";
        return false;
    } else {
        emri.style.outline="none";
    }
    if(mbiemriVal === ""){
        mbiemri.style.outline="2.5px solid red";
        return false;
    }else {
        mbiemri.style.outline="none";
    }
    if(emailVal === ""){
        email.style.outline="2.5px solid red";
        return false;
    }else {
        email.style.outline="none";
    }
    if(emailConfirmationVal === ""){
        emailConfirmation.style.outline="2.5px solid red";
        return false;
    }else {
        emailConfirmation.style.outline="none";
    }
    if(passwordVal === ""){
        password.style.outline="2.5px solid red";
        return false;
    }else {
        password.style.outline="none";
    }
    if(passwordConfirmationVal === ""){
        passwordConfirmation.style.outline="2.5px solid red";
        return false;
    }else {
        passwordConfirmation.style.outline="none";
    }
    if(moshaVal === ""){
        mosha.style.outline="2.5px solid red";
        return false;
    }else {
        mosha.style.outline="none";
    }
    if(!gender1.checked && !gender2.checked){
        male.style.color="red";
        female.style.color="red";
    }else {
        male.style.color="black";
        female.style.color="black";
    }

    
    var error = document.getElementById("error");
    var passwordRegex = "^(?=.*[0-9])"+"(?=.*[a-z])(?=.*[A-Z])"+ "(?=.*[@#$%^&+=])"+ "(?=\\S+$).{8,20}$";
    var emailRegex = "^(?=.{1,64}@)[A-Za-z0-9_-]+(\\.[A-Za-z0-9_-]+)*@" + "[^-][A-Za-z0-9-]+(\\.[A-Za-z0-9-]+)*(\\.[A-Za-z]{2,})$";
    
    if(emailVal === emailConfirmationVal){
        error.style.display = 'none';
    }
    if (passwordVal === passwordConfirmationVal){
        error.style.display='none';
    }
    if (emailVal.match(emailRegex)){
        error.style.display='none';
    }
    if(passwordVal.match(passwordRegex)){
        error.style.display='none';
    }
    if(emailVal !== emailConfirmationVal){
        error.textContent = "Email duhet te jete e njejte me Email Confirmation";
        error.style.display = 'block';
        return false;
    } else if(!emailVal.match(emailRegex)){    
        error.textContent = "Email duhet te permbaje (@), nuk ben te filloje dhe mbaroje me (.)";
        error.style.display = 'block';
        return false;
    }else if(passwordVal !== passwordConfirmationVal){
        error.textContent = "Password duhet te jete e njejte me Password Confirmation";
        error.style.display='block';   
        return false; 
    } else if(!passwordVal.match(passwordRegex)){
        error.textContent = "Password duhet te permbaje se paku 1 lowercase,uppercase,numerik,special karakter dhe duhet te jete i gjate 8-20 karaktera";
        error.style.display = 'block';
        return false;
    }
    return true;

   
    
    

    
  

    
    
    
    
    
}




function logIn(){

    const LoginEmail = document.getElementById("LoginEmailInput");
    const LoginPassword= document.getElementById("LoginPasswordInput");
    const LoginEmailVal = LoginEmail.value.trim();
    const LoginPasswordVal = LoginPassword.value.trim();

   if(LoginEmailVal === ""){
        LoginEmail.style.outline="2.5px solid red";
        return false;
    } else {
        LoginEmail.style.outline="none";
    }
    if(LoginPasswordVal === ""){
        LoginPassword.style.outline="2.5px solid red";
        return false;
    } else {
        LoginPassword.style.outline="none";
    }
    return true;

}

