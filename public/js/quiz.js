$(document).ready(function(){
answers = new Object();
points = new Object();
var correct = 0;
var wrong = 0;
$('.option').change(function(){
    var point = ($(this).data('points'));
    var answer = ($(this).attr('value'));
    var question = ($(this).attr('name'));
    answers[question] = answer;
    points[question] = point;

})
var item1 = document.getElementById('questions');

var totalQuestions = $('.questions').size();
var currentQuestion = 0;
$questions = $('.questions');
$questions.hide();
$($questions.get(currentQuestion)).fadeIn();
$('#next').click(function(){
    $($questions.get(currentQuestion)).fadeOut(function(){
        currentQuestion = currentQuestion + 1;
        if(totalQuestions-currentQuestion == 1){
            $('#next').html('Finish Quiz');
        }

        if(currentQuestion == totalQuestions){
               var points = sum_values()
               var qid = $('#qid').val();
               //do stuff with the result
               axios.post('/user/quizzes', {
                quiz: qid,
                ans: answers,
                points: points,
               })
                .then(function (response) {
                  console.log(response);
                   swal({
                        title: "Quiz Solved!",
                        html: true,
                        text: "<span style='color:#0a0a0a;font-weight:400'>You gain " + points + " points to your skillometer!</span>",
                        type: "success",
                        showCancelButton: true,
                        confirmButtonColor: "#0048bc",
                        confirmButtonText: "View Result!",
                        cancelButtonText: "Go Home!",
                        closeOnConfirm: false,
                        closeOnCancel: false,
                      },
                      function(isConfirm){
                         if(isConfirm) {
                          window.location.href = "/quiz/" + qid + "/result/";
                         } else {
                          window.location.href = "/home";
                         } 
                      });
                  
                })
                .catch(function (error) {
                  console.log(error);
                });
        }else{

           $q =  parseInt(currentQuestion+1) 
           $('#question_no').html('Question #' + $q);
           $('#points').html($('.points').attr('value')); 
           $($questions.get(currentQuestion)).fadeIn();

        }
    });

});
});


function sum_values(){
var the_sum = 0;
for (question in points){
    the_sum = the_sum + parseInt(points[question])
}
return the_sum
}

