const nav = document.querySelector('#nav')
const btn = document.querySelector('#btn')

console.log(nav.classList.contains('h'))

if(nav.classList.contains('h')){
    nav.classList.add('null')
    btn.addEventListener('click', function(err){
        nav.classList.add('show')
        setTimeout(function() {
            nav.classList.remove('null')
        }, 3000);
        btn.classList.add("spin")
        nav.classList.add('s')
        nav.classList.remove('h')
        btn.addEventListener('click', function(){
            btn.classList.add("close")
            nav.classList.add('hide')
            setTimeout(function() {
                nav.classList.add('null')
            }, 3000);
            btn.classList.remove("spin")
            nav.classList.add('h')
            nav.classList.remove('s')
            setTimeout(function() {
                window.location.reload()
            }, 3000)
        })
        
        return err;
    })
} else {
    console.log("Kesalahan Sistem")
}

if(nav.classList.contains('s')){
    
    console.log('show')
}