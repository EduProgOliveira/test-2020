function register(student){
    var course = $('#course').val()
    $.ajax({
        url: "/register-courses/" + student,
        type: "get",
        data: {course: course,student: student},
        dataType: 'json',
        success: function (response){
            if(response.success === true){
                window.location.href = "/alunos/"+ student;
            }else{
                $('.messageBox').removeClass('d-none').html(response.message);
            }
        }
    });
}

function studentDelete(student){
    $.ajax({
        url: "/delete-student/" + student,
        type: "get",
        data: {student: student},
        dataType: 'json',
        success: function (response){
            if(response.success === true){
                window.location.href = "/alunos/"+ student;
            }else{
                $('.messageBox').removeClass('d-none').html(response.message);
            }
        }
    });
}

function courseDelete(course){
    $.ajax({
        url: "/delete-course/" + course,
        type: "get",
        data: {course: course},
        dataType: 'json',
        success: function (response){
            if(response.success === true){
                window.location.href = "/cursos/"+ course;
                document.location.reload(true);
            }else{
                $('.messageBox').removeClass('d-none').html(response.message);
            }
        }
    });
}

