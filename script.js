function init() {
    //считываем
    $.getJSON("data.json", showTeachers);
    $.getJSON("data.json", showLessons);
    $.getJSON("data.json", showTypes);
    $.getJSON("data.json", formLessons);
    $.getJSON("data.json", timeLessons);
    $.getJSON("data.json", showGroups);
}

document.getElementById('1').style.display = 'none';

function showInput() {
    document.getElementById('1').style.display = 'block';
}
function showInputClose() {
    document.getElementById('1').style.display = 'none';
}



function showTeachers(data) {
    var out = '<select name="nameTeacher">';
    out += `<option id="gteacher" data-id = "0">Выбрать</option>`;
    var key = 0;
    while (key < 6) {
        out += `<option id="gteacher" data-id="${data.teachers[key].id_Teacher}">${data.teachers[key].name}</option>`;
        key += 1;
    }
    out += '</select>';
    $('.show-teachers').html(out);
    $('.show-teachers select').on('change', selectOptionsTeacher);
}

function selectOptionsTeacher() {
    var id_Teacher = $('.show-teachers select option:selected').attr('data-id');
    console.log(id_Teacher);
}

function showLessons(data) {
    var out = '<select name="nameLessons">';
    out += `<option id="glesson" data-id = "0">Выбрать</option>`;
    var key = 0;
    while (key < 6) {
        out += `<option id="glesson" data-id="${data.lessons[key].id_Lesson}">${data.lessons[key].name}</option>`;
        key += 1;
    }
    out += '</select>';
    $('.show-lessons').html(out);
}


function showTypes(data) {
    var out = '<select name="nameTypes">';
    out += `<option id="gtype" data-id = "0">Выбрать</option>`;
    var key = 0;
    while (key < 5) {
        out += `<option id="gtype" data-id="${data.typeLesson[key].id_Type}">${data.typeLesson[key].type}</option>`;
        key += 1;
    }
    out += '</select>';
    $('.show-types').html(out);
}

function formLessons(data) {
    var out = '<select name="nameForms">';
    out += `<option id="gform" data-id = "0">Выбрать</option>`;
    var key = 0;
    while (key < 2) {
        out += `<option id="gform" data-id="${data.formLesson[key].id_Form}">${data.formLesson[key].form}</option>`;
        key += 1;
    }
    out += '</select>';
    $('.show-form-lessons').html(out);
}

function timeLessons(data) {
    var out = '<select name="nameTime">';
    out += `<option id="gtime" data-id="0">Выбрать</option>`;
    var key = 0;
    while (key < 5) {
        out += `<option id="gtime" data-id="${data.timelessons[key].id_Time}">${data.timelessons[key].time}</option>`;
        key += 1;
    }
    out += '</select>';
    $('.time-lessons').html(out);
}

function showGroups(data) {
    var out = '<select name="nameGroup">';
    out += `<option id="ggroup" data-id="0">Выбрать</option>`;
    var key = 0;
    while (key < 11) {
        out += `<option id="ggroup" data-id="${data.groups[key].id_Group}">${data.groups[key].name}</option>`;
        key += 1;
    }
    out += '</select>';
    $('.show-groups').html(out);
}


$(document).ready(function () {
    init();
    // $('.add-to-db').on('click', saveToDb);
});     