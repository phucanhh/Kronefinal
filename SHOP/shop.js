window.addEventListener("scroll", function () {
    var header = this.document.querySelector("header")
    header.classList.toggle("sticky", this.window.scrollY > 0)
})

var toTop = document.querySelector(".to-top");
window.addEventListener("scroll",() => {
    if(window.pageYOffset > 100){
        toTop.classList.add("active")
    }else{
        toTop.classList.remove("active")
    }
})