var password = document.getElementById('password');
var toggler = document.getElementById('toggler');

showHidePassword = () => {
    if (password.type == 'password') {
        password.setAttribute('type', 'text');
        toggler.removeAttribute('icon')
        toggler.setAttribute('icon', 'akar-icons:eye-closed')
    } else {
        toggler.removeAttribute('icon')
        toggler.setAttribute('icon', 'akar-icons:eye')
        password.setAttribute('type', 'password');
    }
};

toggler.addEventListener('click', showHidePassword);