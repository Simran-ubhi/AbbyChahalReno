window.onload=()=>{
    document.querySelector('.menu-toggle').addEventListener('click', function () {
        document.querySelector('.menu').classList.toggle('active');
        this.classList.toggle('active');
    });

}
