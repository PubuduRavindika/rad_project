function imgPreview(input){
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
                document.getElementById('st_image_preview').src = e.target.result;  
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function passwordChecker(){
    
}

/*

Subject Selection


*/

// Remove items from options
// function remove_from_options(current_select_item,previous_select_item){
//     var options = current_select_item.getElementsByTagName("option");
//         for(var i = 0; i< options.length; i++){
//             if(options[i].value == previous_select_item.value){
//                 options[i].disabled = true;
//             }
//             else{
//                 options[i].disabled = false;
//             }
//         }
// }

// Reset items of the option tag

// function reset_from_options(current_select_item,previous_select_item){
//     var options = current_select_item.getElementsByTagName("option");
//         for(var i = 0; i< options.length; i++){
//             if(options[i].value == previous_select_item.value){
//                 options[i].disabled = false;
//             }
//         }
// }

// function duplicate_checker(select_item_1, select_item_2, select_item_3) {
//     const lists = [select_item_1, select_item_2, select_item_3];
//     const items = [];
//     if (select_item_1.disabled == false) {
//         items.push(select_item_1.value);
//     }
//     1
//     if (select_item_2.disabled == false) {
//         items.push(select_item_2.value);
//     }
//     if (select_item_3.disabled == false) {
//         items.push(select_item_3.value);
//     }
//     console.log(items);
//     items.forEach(function checker(item) {
//         for (var k = 0; k < 3; k++) {
//             var options = lists[k].getElementsByTagName("option");
//             for (var i = 0; i < options.length; i++) {
//                 if (options[i].value == item.value) {
//                     options[i].disabled = true;
//                 }
//                 else {
//                     options[i].disabled = false;
//                 }
//             }
//         }
//     });
// }

// Special Subjects
function special_selection_enabler() {
    var special_switch_1 = document.getElementById("special_switch_1");
    var special_option_1 = document.getElementById("special_option_1");

    var special_switch_2 = document.getElementById("special_switch_2");
    var special_option_2 = document.getElementById("special_option_2");

    var special_switch_3 = document.getElementById("special_switch_3");
    var special_option_3 = document.getElementById("special_option_3");


    if (special_switch_1.checked == true) {
        special_option_1.disabled = false;
        special_switch_2.disabled = false;
        special_switch_3.disabled = false;
    }
    else {
        special_option_1.disabled = true;
        special_switch_2.disabled = true;
        special_switch_3.disabled = true;
        special_switch_2.checked = false;
        special_switch_3.checked = false;
        special_option_1.value = 0;
        special_option_2.value = 0;
        special_option_3.value = 0;
    }


    if (special_switch_2.checked == true) {
        special_option_2.disabled = false;
        special_switch_3.disabled = false;
    }
    else {
        special_option_2.disabled = true;
        special_switch_3.disabled = true;
        special_switch_3.checked = false;
        special_option_2.value = 0;
        special_option_3.value = 0;

    }


    if (special_switch_3.checked == true) {
        special_option_3.disabled = false;
    }
    else {
        special_option_3.disabled = true;
        special_option_3.value = 0;
    }
}

// Joint Major Subjects

function jmajor_selection_enabler() {
    var jmajor_switch_1 = document.getElementById("jmajor_switch_1");
    var jmajor_option_1 = document.getElementById("jmajor_option_1");

    var jmajor_switch_2 = document.getElementById("jmajor_switch_2");
    var jmajor_option_2 = document.getElementById("jmajor_option_2");

    var jmajor_switch_3 = document.getElementById("jmajor_switch_3");
    var jmajor_option_3 = document.getElementById("jmajor_option_3");



    if (jmajor_switch_1.checked == true) {
        jmajor_option_1.disabled = false;
        jmajor_switch_2.disabled = false;
        jmajor_switch_3.disabled = false;
    }
    else {
        jmajor_option_1.disabled = true;
        jmajor_switch_2.disabled = true;
        jmajor_switch_2.checked = false;
        jmajor_switch_3.disabled = true;
        jmajor_switch_3.checked = false;
        jmajor_option_1.value = 0;
        jmajor_option_2.value = 0;
        jmajor_option_3.value = 0;
    }


    if (jmajor_switch_2.checked == true) {
        jmajor_option_2.disabled = false;
        jmajor_switch_3.disabled = false;
    }
    else {
        jmajor_option_2.disabled = true;
        jmajor_switch_3.disabled = true;
        jmajor_switch_3.checked = false;
        jmajor_option_2.value = 0;
        jmajor_option_3.value = 0;
    }


    if (jmajor_switch_3.checked == true) {
        jmajor_option_3.disabled = false;
    }
    else {
        jmajor_option_3.disabled = true;
        jmajor_option_3.value = 0;
    }


}
// General Subjects

function general_selection_enabler() {
    var general_switch_1 = document.getElementById("general_switch_1");
    var general_option_1 = document.getElementById("general_option_1");

    var general_switch_2 = document.getElementById("general_switch_2");
    var general_option_2 = document.getElementById("general_option_2");

    var general_switch_3 = document.getElementById("general_switch_3");
    var general_option_3 = document.getElementById("general_option_3");



    if (general_switch_1.checked == true) {
        general_option_1.disabled = false;
        general_switch_2.disabled = false;
        general_switch_3.disabled = false;
    }
    else {
        general_option_1.disabled = true;
        general_switch_2.disabled = true;
        general_switch_2.checked = false;
        general_switch_3.disabled = true;
        general_switch_3.checked = false;
        general_option_1.value = 0;
        general_option_2.value = 0;
        general_option_3.value = 0;
    }


    if (general_switch_2.checked == true) {
        general_option_2.disabled = false;
        general_switch_3.disabled = false;
    }
    else {
        general_option_2.disabled = true;
        general_switch_3.disabled = true;
        general_switch_3.checked = false;
        general_option_2.value = 0;
        general_option_3.value = 0;
    }


    if (general_switch_3.checked == true) {
        general_option_3.disabled = false;
    }
    else {
        general_option_3.disabled = true;
        general_option_3.value = 0;
    }


}

/**
 * 
 * 
 * 
 * Credit Balance Scripts
 * 
 * 
 * 
 */

function get_credits_total(){
    // alert("Hi");
    // Semester 1 Compulsory
    var sem_1_comp_credits_total = 0;
    const credit_elements_1 = document.getElementsByName('sem_1_comp_credits');
    credit_elements_1.forEach(element => {
        sem_1_comp_credits_total += parseInt(element.innerText);
    });
    document.getElementById('compulsory_credits_count_semseter_1').innerHTML = sem_1_comp_credits_total;

    // Semester 2 Compulsory

    var sem_2_comp_credits_total = 0;
    const credit_elements_2 = document.getElementsByName('sem_2_comp_credits');
    credit_elements_2.forEach(element => {
        sem_2_comp_credits_total += parseInt(element.innerText);
    });
    document.getElementById('compulsory_credits_count_semseter_2').innerHTML = sem_2_comp_credits_total;

    const num_of_sem_1_subsidairy_modules = document.getElementsByName('sem_1_subs_credits').length;
    const num_of_sem_2_subsidairy_modules = document.getElementsByName('sem_2_subs_credits').length;

    // const num_of_subs_modules = document.getElementsByName("subs_credits");

    // Subsidairy Subjects
    var sem_1_subs_credits_total = 0;
    var year_max = 33 - (sem_1_comp_credits_total + sem_2_comp_credits_total);
    var year_min = 30 - (sem_1_comp_credits_total + sem_2_comp_credits_total);
    for(var i = 1; i <= num_of_sem_1_subsidairy_modules;i++){
        var input = document.getElementById("sem_1_subs_input_" + i);
        var credit_value = document.getElementById("sem_1_subs_credits_" + i).innerText;
        if(input.checked){
            sem_1_subs_credits_total += parseInt(credit_value);
            year_max -= credit_value;
        }
        
    }
    //Getting Total Sub Count
    var sem_2_subs_credits_total = 0;
    // var sem_2_max = 6;
    for(var i = 1; i <= num_of_sem_2_subsidairy_modules;i++){
        var input = document.getElementById("sem_2_subs_input_" + i);
        var credit_value = parseInt(document.getElementById("sem_2_subs_credits_" + i).innerText);
        if(input.checked){
            sem_2_subs_credits_total += credit_value;
            year_max -= credit_value;
        }
    }
    // If maximum reaches this function disabled the inputs
    for(var i = 1; i <= num_of_sem_2_subsidairy_modules;i++){
        var input = document.getElementById("sem_2_subs_input_" + i);
        var credit_value = parseInt(document.getElementById("sem_2_subs_credits_" + i).innerText);
            if(!input.checked){
                if(year_max < credit_value){
                    input.disabled = true;
                }
                else{
                    input.disabled = false;
                }
            }
    }
    // If maximum reaches this function disabled the inputs
    for(var i = 1; i <= num_of_sem_1_subsidairy_modules;i++){
        var input = document.getElementById("sem_1_subs_input_" + i);
        var credit_value = parseInt(document.getElementById("sem_1_subs_credits_" + i).innerText);
            if(!input.checked){
                if(year_max < credit_value){
                input.disabled = true;
            }
            else{
                input.disabled = false;
            }
        }
    }


    // Total Values

    var semester_1_total_credits_count = sem_1_comp_credits_total + sem_1_subs_credits_total; 
    var semester_2_total_credits_count = sem_2_comp_credits_total + sem_2_subs_credits_total; 
    var year_total_credits_count = semester_1_total_credits_count + semester_2_total_credits_count;

    document.getElementById('semester_1_total_optional_count').innerText = sem_1_subs_credits_total;    
    document.getElementById('semester_2_total_optional_count').innerText = sem_2_subs_credits_total;    
    document.getElementById('semester_1_total_credits_count').innerText = semester_1_total_credits_count ;
    document.getElementById('semester_2_total_credits_count').innerText = semester_2_total_credits_count ;
    document.getElementById('year_total_credits_count').innerText = year_total_credits_count;
    if(30 <= year_total_credits_count && year_total_credits_count <= 33){
        document.getElementById('btn_submit').disabled = false;
    }
    else{
        document.getElementById('btn_submit').disabled = true;
    }
}

function submitTwo(){
    document.getElementById("form1").submit();
    document.getElementById("form2").submit();
}