

function load_mp_user_Table() {
    var tableData;
    $.post("models/loadTables.php", {table: "load_mp_user"}, function (reply) {
        if (reply === undefined || reply.length === 0 || reply === null) {
            tableData += '<tr class="error text-centered"><td colspan="6"> -- No Data Found -- </td></tr>';
            $('#mp_user_table tbody').html('').append(tableData);
        } else {
            $.each(reply, function (index, tableValue) {
                index++;
                tableData += '<tr>';
                tableData += '<td>' + index + '</td>';
                tableData += '<td>' + tableValue.mp_user_id + '</td>';
                tableData += '<td>' + tableValue.mp_user_name + '</td>';
                tableData += '<td>' + tableValue.mp_user_email + '</td>';
                tableData += '<td class="">' + tableValue.mp_user_nic + '</td>';
             //   tableData += '<td class="">' + tableValue.mp_user_status + '</td>';
                tableData += '<td><div class="btn-group"><button class="btn btn-primary select_mp_user" value="' + tableValue.mp_user_id + '"><i class="fa fa-plus-square fa-lg"></i>&nbsp;Select</button><button class="btn btn-danger delete_mp_user" value="' + tableValue.mp_user_id + '"><i class="fa fa-trash-o fa-lg"></i>&nbsp;Delete</button></div></td>';
                tableData += '</tr>';
            });
            $('#mp_user_table tbody').html('').append(tableData);

        }
        
       $('.select_mp_user').click(function () {
                    mp_user_select($(this).val());
                    $('#mp_user_save_erea').addClass("hidden");
                    $('#mp_user_update_erea').removeClass("hidden");
                });
                
       $('.delete_mp_user').click(function(){
                    var del_id = $(this).val();
                    
                    confirm("Confirm", "Are sure delete user??", "No", "Yes", function(){
                    delete_mp_user(del_id);
       }); 
   });
        
    }, "json");
}




function load_mp_member_Table() {
    var tableData;
    $.post("models/loadTables.php", {table: "load_mp_member"}, function (reply) {
        if (reply === undefined || reply.length === 0 || reply === null) {
            tableData += '<tr class="error text-centered"><td colspan="6"> -- No Data Found -- </td></tr>';
            $('#mp_member_table tbody').html('').append(tableData);
        } else {
            $.each(reply, function (index, tableValue) {
                index++;
                tableData += '<tr>';
                tableData += '<td>' + index + '</td>';
                tableData += '<td>' + tableValue.mp_member_id + '</td>';
                tableData += '<td>' + tableValue.full_name + '</td>';
                tableData += '<td>' + tableValue.email + '</td>';
               
                tableData += '<td><div class="btn-group"><button class="btn btn-primary select_mp_member" value="' + tableValue.mp_member_id + '"><i class="fa fa-plus-square fa-lg"></i>&nbsp;Select</button><button class="btn btn-danger delete_mp_member" value="' + tableValue.mp_member_id + '"><i class="fa fa-trash-o fa-lg"></i>&nbsp;Delete</button></div></td>';
                tableData += '</tr>';
            });
            $('#mp_member_table tbody').html('').append(tableData);

        }
        
       $('.select_mp_member').click(function () {
                    select_mp_member($(this).val());
                    $('#mp_member_save_erea').addClass("hidden");
                    $('#mp_member_update_erea').removeClass("hidden");
                });
                
       $('.delete_mp_member').click(function(){
                    var del_id = $(this).val();
                    
                    confirm("Confirm", "Are sure delete member??", "No", "Yes", function(){
                    delete_mp_member(del_id);
       }); 
   });
        
    }, "json");
}

function load_mpmember_detail_Table() {
    var tableData;
    $.post("models/loadTables.php", {table: "load_mpmember_detail_Table"}, function (reply) {
        if (reply === undefined || reply.length === 0 || reply === null) {
            tableData += '<tr class="error text-centered"><td colspan="6"> -- No Data Found -- </td></tr>';
            $('#mpmember_detail_table tbody').html('').append(tableData);
        } else {
            $.each(reply, function (index, tableValue) {
                index++;
                tableData += '<tr>';
                tableData += '<td>' + index + '</td>';
                tableData += '<td>' + tableValue.mp_member_id + '</td>';
                tableData += '<td>' + tableValue.full_name + '</td>';
                tableData += '<td>' + tableValue.nic_number + '</td>';
                tableData += '<td class="hidden">' + tableValue.postal_address + '</td>';
                tableData += '<td class="hidden">' + tableValue.contact_number + '</td>';
                tableData += '<td class="hidden">' + tableValue.mobile_phone_number + '</td>';
                tableData += '<td class="hidden">' + tableValue.gender + '</td>';
                tableData += '<td class="hidden">' + tableValue.country + '</td>';
                tableData += '<td class="hidden">' + tableValue.states + '</td>';
                tableData += '<td class="hidden">' + tableValue.district + '</td>';
                tableData += '<td class="hidden">' + tableValue.village + '</td>';
                tableData += '<td class="hidden">' + tableValue.birth_of_date + '</td>';
                tableData += '<td class="hidden">' + tableValue.mother_tongue + '</td>';
                tableData += '<td class="hidden">' + tableValue.residency_status + '</td>';
                tableData += '<td class="hidden">' + tableValue.religion + '</td>';
                tableData += '<td class="hidden">' + tableValue.caste + '</td>';
                tableData += '<td class="hidden">' + tableValue.hieght + '</td>';
                tableData += '<td class="hidden">' + tableValue.complexion + '</td>';
                tableData += '<td class="hidden">' + tableValue.body_type + '</td>';
                tableData += '<td class="hidden">' + tableValue.marital_status + '</td>';
                tableData += '<td class="hidden">' + tableValue.children + '</td>';
                tableData += '<td class="hidden">' + tableValue.no_of_children + '</td>';
                tableData += '<td class="hidden">' + tableValue.education_category + '</td>';
                tableData += '<td class="hidden">' + tableValue.educatin_in_detail + '</td>';
                tableData += '<td class="hidden">' + tableValue.job_category + '</td>';
                tableData += '<td class="hidden">' + tableValue.job_in_detail + '</td>';
                tableData += '<td class="hidden">' + tableValue.work_place_category + '</td>';
                tableData += '<td class="hidden">' + tableValue.work_place_in_detail + '</td>';
                tableData += '<td class="hidden">' + tableValue.business_in_detail + '</td>';
                tableData += '<td class="hidden">' + tableValue.monthly_salary + '</td>';
                tableData += '<td class="hidden">' + tableValue.dowry_cash + '</td>';
                tableData += '<td class="hidden">' + tableValue.property + '</td>';
                tableData += '<td class="hidden">' + tableValue.papa_kendara + '</td>';
                tableData += '<td class="hidden">' + tableValue.lagnaya + '</td>';
                tableData += '<td class="hidden">' + tableValue.ganaya + '</td>';
                tableData += '<td class="hidden">' + tableValue.nekatha + '</td>';
                tableData += '<td class="hidden">' + tableValue.display_horescope + '</td>';
                tableData += '<td class="hidden">' + tableValue.budha + '</td>';
                tableData += '<td class="hidden">' + tableValue.chandra + '</td>';
                tableData += '<td class="hidden">' + tableValue.guru + '</td>';
                tableData += '<td class="hidden">' + tableValue.kethu + '</td>';
                tableData += '<td class="hidden">' + tableValue.kuja + '</td>';
                tableData += '<td class="hidden">' + tableValue.rahu + '</td>';
                tableData += '<td class="hidden">' + tableValue.ravi + '</td>';
                tableData += '<td class="hidden">' + tableValue.shani + '</td>';
                tableData += '<td class="hidden">' + tableValue.shukra + '</td>';
                tableData += '<td class="hidden">' + tableValue.diet + '</td>';
                tableData += '<td class="hidden">' + tableValue.special_cases + '</td>';
                tableData += '<td class="hidden">' + tableValue.looking_from + '</td>';
                tableData += '<td class="hidden">' + tableValue.self_description + '</td>';
                tableData += '<td class="hidden">' + tableValue.accept_teamcon + '</td>';
                tableData += '<td>' + tableValue.gender + '</td>';
                tableData += '<td>' + tableValue.age + '</td>';
                tableData += '<td><div class="btn-group"><button class="btn btn-primary select_mpmember_detail" value="' + tableValue.mp_member_id + '"><i class="fa fa-plus-square fa-lg"></i>&nbsp;Select</button></div></td>';
                tableData += '</tr>';
            });
            $('#mpmember_detail_table tbody').html('').append(tableData);

        }
        
        $('.select_mpmember_detail').click(function () {
                    select_mpmember_detail($(this).val());
                    $('#mpmember').addClass("hidden");
                    $('#mp_member').removeClass("hidden");
                });
        
       $('.select_mpmember_detail').click(function () {
                    select_mpmember_detail($(this).val());
                    $('#mpmem_save_area').addClass("hidden");
                    $('#mpmem_update_area').removeClass("hidden");
                });
                
      
        
    }, "json");
}


function load_mpmem_payment_detail_table() {
    var tableData;
    $.post("models/loadTables.php", {table: "load_mpmem_payment_detail_table"}, function (reply) {
        if (reply === undefined || reply.length === 0 || reply === null) {
            tableData += '<tr class="error text-centered"><td colspan="6"> -- No Data Found -- </td></tr>';
            $('#mpmem_payment_detail_table tbody').html('').append(tableData);
        } else {
            $.each(reply, function (index, tableValue) {
                index++;
                tableData += '<tr>';
                tableData += '<td>' + index + '</td>';
                tableData += '<td>' + tableValue.mp_member_id + '</td>';
                tableData += '<td>' + tableValue.full_name + '</td>';
                tableData += '<td>' + tableValue.email + '</td>';
                tableData += '<td>' + tableValue.paypal_email + '</td>';
                tableData += '<td>' + tableValue.no_of_month + '</td>';
                tableData += '<td>' + tableValue.payment_value + '</td>';
               
                tableData += '<td><div class="btn-group"><button class="btn btn-primary select_mpmem_payment" value="' + tableValue.mp_member_id + '"><i class="fa fa-plus-square fa-lg"></i>&nbsp;Select</button><button class="btn btn-danger delete_mp_member" value="' + tableValue.mp_member_id + '"><i class="fa fa-trash-o fa-lg"></i>&nbsp;Delete</button></div></td>';
                tableData += '</tr>';
            });
            $('#mpmem_payment_detail_table tbody').html('').append(tableData);

        }
        
       $('.select_mpmem_payment').click(function () {
                    select_mpmem_payment($(this).val());
                    
                });
                
       $('.delete_mp_member').click(function(){
                    var del_id = $(this).val();
                    
                    confirm("Confirm", "Are sure delete member??", "No", "Yes", function(){
                    delete_mp_member(del_id);
       }); 
   });
        
    }, "json");
}


function load_sp_member_Table() {
    var tableData;
    $.post("models/loadTables.php", {table: "load_sp_member"}, function (reply) {
        if (reply === undefined || reply.length === 0 || reply === null) {
            tableData += '<tr class="error text-centered"><td colspan="6"> -- No Data Found -- </td></tr>';
            $('#sp_member_table tbody').html('').append(tableData);
        } else {
            $.each(reply, function (index, tableValue) {
                index++;
                tableData += '<tr>';
                tableData += '<td>' + index + '</td>';
                tableData += '<td>' + tableValue.service_provider_id + '</td>';
                tableData += '<td>' + tableValue.full_name + '</td>';
                tableData += '<td>' + tableValue.email + '</td>';
               
                tableData += '<td><div class="btn-group"><button class="btn btn-primary select_sp_member" value="' + tableValue.service_provider_id + '"><i class="fa fa-plus-square fa-lg"></i>&nbsp;Select</button><button class="btn btn-danger delete_sp_member" value="' + tableValue.service_provider_id + '"><i class="fa fa-trash-o fa-lg"></i>&nbsp;Delete</button></div></td>';
                tableData += '</tr>';
            });
            $('#sp_member_table tbody').html('').append(tableData);

        }
        
       $('.select_sp_member').click(function () {
                    select_mp_member($(this).val());
                    $('#sp_member_save_erea').addClass("hidden");
                    $('#sp_member_update_erea').removeClass("hidden");
                });
                
       $('.delete_sp_member').click(function(){
                    var del_id = $(this).val();
                    
                    confirm("Confirm", "Are sure delete member??", "No", "Yes", function(){
                    delete_sp_member(del_id);
       }); 
   });
        
    }, "json");
}