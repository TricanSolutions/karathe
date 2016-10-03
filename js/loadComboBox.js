function load_month(selected, callBack) {
    var comboData = '';
    $.post("models/loadComboBox.php", {comboBox: 'load_month'}, function(e) {
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('#month').html('').append(comboData);
            chosenRefresh();
        } else {
            $.each(e, function(index, qData) {
                if (selected !== undefined || e !== null || e.length !== 0) {
                    if (parseInt(selected) === parseInt(qData.month_id)) {
                        comboData += '<option value="' + qData.month_id + '" selected>' + qData.month_no + '</option>';
                    } else {
                        comboData += '<option value="' + qData.month_id + '">' + qData.month_no + '</option>';
                    }
                } else {
                    comboData += '<option value="' + qData.month_id + '">' + qData.month_no + '</option>';
                }
            });
            $('#month').html('').append(comboData);
            chosenRefresh();
        }
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }
    }, "json");
}

function load_value(selected, callBack) {
    var comboData = '';
    $.post("models/loadComboBox.php", {comboBox: 'load_value'}, function(e) {
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('#value').html('').append(comboData);
            chosenRefresh();
        } else {
            $.each(e, function(index, qData) {
                if (selected !== undefined || e !== null || e.length !== 0) {
                    if (parseInt(selected) === parseInt(qData.month_id)) {
                        comboData += '<option value="' + qData.amount_value + '" selected>' + qData.amount_value + '</option>';
                    }
                } else {
                    comboData += '<option value="' + qData.amount_value + '">' + qData.amount_value + '</option>';
                }
            });
            $('#value').html('').append(comboData);
            chosenRefresh();
        }
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }
    }, "json");
}

function load_country(selected, callBack) {
    var comboData = '';
    $.post("models/loadComboBox.php", {comboBox: 'load_country'}, function(e) {
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('#country').html('').append(comboData);
            chosenRefresh();
        } else {
            $.each(e, function(index, qData) {
                if (selected !== undefined || e !== null || e.length !== 0) {
                    if (parseInt(selected) === parseInt(qData.country_id)) {
                        comboData += '<option value="' + qData.country_id + '" selected>' + qData.country_name + '</option>';
                    } else {
                        comboData += '<option value="' + qData.country_id + '">' + qData.country_name + '</option>';
                    }
                } else {
                    comboData += '<option value="' + qData.country_id + '">' + qData.country_name + '</option>';
                }
            });
            $('#country').html('').append(comboData);
            chosenRefresh();
        }
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }
    }, "json");
}

function load_states(cun_id, selected, callBack) {
    var comboData = '';
    $.post("models/loadComboBox.php", {comboBox: 'load_states', cun_id: cun_id}, function(e) {
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('#states').html('').append(comboData);
            chosenRefresh();
        } else {
            $.each(e, function(index, qData) {
                if (selected !== undefined || e !== null || e.length !== 0) {
                    if (parseInt(selected) === parseInt(qData.country_id)) {
                        comboData += '<option value="' + qData.states_id + '" selected>' + qData.states_name + '</option>';
                    } else {
                        comboData += '<option value="' + qData.states_id + '">' + qData.states_name + '</option>';
                    }
                } else {
                    comboData += '<option value="' + qData.states_id + '">' + qData.states_name + '</option>';
                }
            });
            $('#states').html('').append(comboData);
            chosenRefresh();
        }
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }
    }, "json");
}



function load_district(sta_id, selected, callBack) {
    var comboData = '';
    $.post("models/loadComboBox.php", {comboBox: 'load_district', sta_id: sta_id}, function(e) {
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('#district').html('').append(comboData);
            chosenRefresh();
        } else {
            $.each(e, function(index, qData) {
                if (selected !== undefined || e !== null || e.length !== 0) {
                    if (parseInt(selected) === parseInt(qData.district_id)) {
                        comboData += '<option value="' + qData.district_id + '" selected>' + qData.district_name + '</option>';
                    } else {
                        comboData += '<option value="' + qData.district_id + '">' + qData.district_name + '</option>';
                    }
                } else {
                    comboData += '<option value="' + qData.district_id + '">' + qData.district_name + '</option>';
                }

            });
            $('#district').html('').append(comboData);
            chosenRefresh();
        }
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }
    }, "json");
}


function load_mpmember_id(selected, callBack) {
    var comboData = '';
    $.post("models/loadComboBox.php", {comboBox: 'load_mpmember_id'}, function(e) {
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('#mpmember_id').html('').append(comboData);
            chosenRefresh();
        } else {
            $.each(e, function(index, qData) {
                if (selected !== undefined || e !== null || e.length !== 0) {
                    if (parseInt(selected) === parseInt(qData.mp_member_id)) {
                        comboData += '<option value="' + qData.mp_member_id + '" selected>' + qData.mp_member_id + '</option>';
                    } else {
                        comboData += '<option value="' + qData.mp_member_id + '">' + qData.mp_member_id + '</option>';
                    }
                } else {
                    comboData += '<option value="' + qData.mp_member_id + '">' + qData.mp_member_id + '</option>';
                }
            });
            $('#mpmember_id').html('').append(comboData);
            chosenRefresh();
        }
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }
    }, "json");
}