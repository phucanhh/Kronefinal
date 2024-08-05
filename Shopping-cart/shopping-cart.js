let list = document.querySelectorAll('.list .item');
list.forEach(item => {
    item.addEventListener('click',function(event){
        if(event.target.classList.contains('add')){
            var itemNew = item.cloneNode(true);
            let checkIsset = false;
            let listCart = document.querySelectorAll('.cart .item');
            listCart.forEach(cart =>{
                if(cart.getAttribute('data-key') == itemNew.getAttribute('data-key')){
                    checkIsset = true;
                    cart.classList.add('danger')
                    setTimeout(function(){
                        cart.classList.remove('danger')
                    },1000)
                }
            })
            if(checkIsset == false){
                document.querySelector('.listCart').appendChild(itemNew);            }
            
        }
        })
})
function Remove($key) {
    let listCart = document.querySelectorAll('.cart .item');
    listCart.forEach(item =>{
        if(item.getAttribute('data-key')==$key){
            item.remove();
            return;
        }
    })
}
//////////////////////////////////////////////// Pagination
let link = document.getElementsByClassName("link")
let currentValue = 1;
function activeLink() {
    for(l of link){
        l.classList.remove("active");
    }
    event.target.classList.add("active");
    currentValue = event.target.value;
}

function prevBtn() {
    if (currentValue > 1) {
        for(l of link){
            l.classList.remove("active");
        }
        currentValue--;
        link[currentValue-1].classList.add("active");

    }
}

function nextBtn() {
    if (currentValue < 3) {
        for(l of link){
            l.classList.remove("active");
        }
        currentValue++;
        link[currentValue-1].classList.add("active");
    }
}

/////////////////////////////// Search function

document.querySelector('.search-input').addEventListener('input',filterList);
function filterList() {
    const searchInput = document.querySelector('.search-input');
    const filter = searchInput.value.toLowerCase();
    const listItems = document.querySelectorAll('.item');

    listItems.forEach((item)=>{
        let text = item.textContent
        if (text.toLowerCase().includes(filter.toLowerCase())) {
            item.style.display = '';
            // text.classList.remove('.shop-pagination')
        }else{
            item.style.display = 'none';
            
        }
    });
}