addEventListener("DOMContentLoaded",()=>{

    const TABLE_A_SW = document.getElementById("table-a-switch");
    const TABLE_B_SW = document.getElementById("table-b-switch");
    const table_a_cd = document.getElementById("table_a_cd");
    const table_b_cd = document.getElementById("table_b_cd");




    TABLE_A_SW.addEventListener("click",()=>{
        table_a_cd.style.display = `flex`;
        table_b_cd.style.display = `none`;
        TABLE_A_SW.style.background = `#adbbda`;
        TABLE_B_SW.style.background = `#ede8f5`;
     
    });

    TABLE_B_SW.addEventListener("click",()=>{
        table_a_cd.style.display = `none`;
        table_b_cd.style.display = `flex`;
        TABLE_A_SW.style.background = `#ede8f5`;
        TABLE_B_SW.style.background = `#adbbda`;
 
    });

  
    
})