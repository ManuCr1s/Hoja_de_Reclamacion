let btn=document.getElementById('btn');
btn.addEventListener('click',function(){
    document.querySelector(".capcha").src = 'scripts/capcha.php?' + Date.now();
});
