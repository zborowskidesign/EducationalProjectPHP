const usa = document.querySelector('.usa-flag');
const pl = document.querySelector('.poland-flag');

const login = document.querySelector('.login');
const password = document.querySelector('.password');
const registration = document.querySelector('.registration');
const loginBtn = document.querySelector('.login-btn');
const courseText = document.querySelector('.course-elements');

const language = {
    pl: {
        login: 'login',
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

    password.textContent = language.en.password
    registration.textContent = language.en.register;
    loginBtn.value = language.en.LoginButton;
    courseText.textContent = language.en.Course;

})

pl.addEventListener('click', function(){

    password.textContent = language.pl.password;
    registration.textContent = language.pl.register;
    loginBtn.value = language.pl.LoginButton;
    courseText.textContent = language.pl.Course;
})



console.log(language.pl.login);