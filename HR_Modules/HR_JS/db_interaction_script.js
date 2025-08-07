

const show_history_button = document.getElementById("status_history_button");

const db_main_contents = document.getElementById("db_main_contents_id");
const aside = document.getElementById("db_aside_id");
const vector_div = document.querySelector(".vector_div");
const aside_vector = document.getElementById("aside_vector");
    const vd_a = document.querySelector(".vd_a");
    const vd_b = document.querySelector(".vd_b");



const aside_main_content_div = document.querySelector(".aside_main_content_div");
const status_history = document.querySelector(".status_history");
const status_history_button = document.getElementById("status_history_button");
const back_to_main_table = document.getElementById("back_to_main_table");






show_history_button.addEventListener("click", () => {   
  
    show_history_button.classList.toggle("active");
      
     

    db_main_contents.classList.toggle("hide");
    aside.classList.toggle("active");
        vector_div.classList.toggle("active");
        aside_vector.classList.toggle("active");
        vd_a.classList.toggle("active");
        vd_b.classList.toggle("active");


    status_history.classList.toggle("active");
    aside_main_content_div.classList.toggle("active");
  


});