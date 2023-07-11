const sem_1_credit_value = document.getElementsByName('sem_1_credit_value');
const sem_2_credit_value = document.getElementsByName('sem_2_credit_value');

const total_sem_1_credits = document.getElementById('total_sem_1_credits');
const total_sem_2_credits = document.getElementById('total_sem_2_credits');
const total_year_credits = document.getElementById('total_year_credits');

let sem_1_total = 0;
let sem_2_total = 0;

function getTotal(){
    for(let i = 0; i < sem_1_credit_value.length; i++){
        sem_1_total += parseInt(sem_1_credit_value[i].innerHTML.toString());
    }

    for(let i = 0; i < sem_2_credit_value.length; i++){
        sem_2_total += parseInt(sem_2_credit_value[i].innerHTML.toString());
    }

    total_sem_1_credits.innerHTML = sem_1_total;
    total_sem_2_credits.innerHTML = sem_2_total;

    total_year_credits.innerHTML = sem_1_total + sem_2_total;

}

getTotal();