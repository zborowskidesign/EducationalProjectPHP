const usa = document.querySelector('.usa-flag');
const pl = document.querySelector('.poland-flag');

//const login = document.querySelector('.login');
//const password = document.querySelector('.password');
//const registration = document.querySelector('.registration');
const loginBtn = document.querySelector('.login-btn');
//const courseText = document.querySelector('.course-elements');


const language = {
    pl: {
        password: 'Hasło',
        register: 'Załóż darmowe konto',
        LoginButton: 'Zaloguj się',
        Course: 'Nauka'
    },

    en: {
        password: 'Password',
        register: 'Create free account',
        LoginButton: 'Log in',
        Course: 'Learn'
    }

}

usa.addEventListener('click', function(){
    
        localStorage.setItem("password", language.en.password);
        localStorage.setItem("registration",language.en.register);
        localStorage.setItem("LoginButton", language.en.LoginButton);
        localStorage.setItem("courseText", language.en.Course);

        console.log(localStorage.getItem('password'));

        if(password && registration && loginBtn && courseText) 
        {
            password.textContent = localStorage.getItem('password');
            registration.textContent = localStorage.getItem('registration');
            loginBtn.value = localStorage.getItem('LoginButton');
            courseText.textContent = localStorage.getItem('courseText');
            localStorage.removeItem("pl");
        }

})


pl.addEventListener('click', function(){

    localStorage.setItem("password", language.pl.password);
    localStorage.setItem("registration",language.pl.register);
    localStorage.setItem("LoginButton", language.pl.LoginButton);
    localStorage.setItem("courseText", language.pl.Course);


    if(password && registration && loginBtn && courseText) 
    {
        password.textContent = localStorage.getItem('password');
        registration.textContent = localStorage.getItem('registration');
        loginBtn.value = localStorage.getItem('LoginButton');
        courseText.textContent = localStorage.getItem('courseText');
        localStorage.removeItem("en");
    }
    
})



