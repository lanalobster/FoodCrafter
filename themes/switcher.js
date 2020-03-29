let head = document.head,
    link = document.createElement('link');
    link.rel = 'stylesheet';

if (localStorage.getItem('themeStyle') === 'dark') {
    link.href = '../themes/darktheme.css'; 
    document.getElementById('switch-theme').setAttribute('checked', true); 
}
else {
    link.href = '../themes/lighttheme.css'; 
}
head.appendChild(link); 


document.getElementById('switch-theme').addEventListener('change', ev => {
    let btn = ev.target;

    if (btn.checked) {
        link.href = '../themes/darktheme.css'; 
        localStorage.setItem('themeStyle', 'dark'); 
    }
    else {
        link.href = '../themes/lighttheme.css'; 
        localStorage.setItem('themeStyle', 'light'); 
    }
});