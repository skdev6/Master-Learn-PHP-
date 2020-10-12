document.addEventListener('DOMContentLoaded', function(){
    var link = document.querySelectorAll(".delete");
    for (let i = 0; i < array.link; i++) {
         link[i].addEventListener("click",function(e){
            if(!confirm("are you sure")){
                e.preventDefault();
            }
         });
    }
});