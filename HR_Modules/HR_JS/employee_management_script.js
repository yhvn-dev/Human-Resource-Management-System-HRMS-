



const status_history_btn_href = document.getElementById("status_history-btn-href");
const delete_emp_btn_href = document.getElementById("delete_emp-btn-href");

const main_contents = document.querySelector(".main_contents");
const status_history_table = document.querySelector(".sth_main_content");
const delete_fired_employees_table = document.querySelector(".delete_fired_employees_table");

status_history_btn_href.addEventListener("click", () => {
  

    main_contents.classList.add("hide");
    delete_fired_employees_table.classList.add("hide");
    status_history_table.classList.remove("hide");


    status_history_btn_href.classList.add("active");
    delete_emp_btn_href.classList.remove("active");
});

delete_emp_btn_href.addEventListener("click", () => {
    


    main_contents.classList.add("hide");
    status_history_table.classList.add("hide");
    delete_fired_employees_table.classList.remove("hide");

    
    delete_emp_btn_href.classList.add("active");
    status_history_btn_href.classList.remove("active");
});