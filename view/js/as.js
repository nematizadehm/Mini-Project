function send_like(post_id){
    let  btn =document.getElementById("btn-like"+ post_id);
    let count_number_tag = document.getElementById("count-like-"+post_id);
    let form=document.getElementById("form-like-"+post_id);
    let form_data = new FormData(form);

    fetch("send-like",{
        method : "post",
        body : form_data
    }).then(
        result=>result.text()
    ).then(result=>{
        if (result == 1){
            //alert("لایک");
            btn.classList.remove("btn-outline-primary");
            btn .classList.add("btn-primary");
            let number= count_number_tag.innerHTML;
            number++;
            count_number_tag.innerHTML = number;
        } else if (result == 0){
            //alert("دیس لایک");
            btn.classList.remove("btn-outline-primary");
            btn .classList.add("btn-primary");
            let number= count_number_tag.innerHTML;
            number--;
            count_number_tag.innerHTML = number;
        }).catch(error =>{
            console.log(error);
        });

        }

    )
}