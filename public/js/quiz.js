$(document).ready(function(){
answers = new Object();
points = new Object();
var correct = 0;
var wrong = 0;
 var qid = $('#qid').val();
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


axios.get('/user/quizzes', {
        params: {
          quiz: qid
        }
      })
      .then(function (response) {
        console.log(response);
        if(response.data == 'success')
        {
        swal({
            title: "Quiz Already Solved!",
            html: true,
            text: "<span style='color:#0a0a0a;font-weight:400'>You have Already solved this Quiz!</span>",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#0048bc",
            cancelButtonColor:"#019e13",
            confirmButtonText: "View Result!",
            cancelButtonText: "Solve Another!",
            closeOnConfirm: false,
            closeOnCancel: false
          },
          function(isConfirm){
             if(isConfirm) {
                window.location.href = "/quiz/" + qid + "/result";
             } else {
              window.location.href = "/quiz/random";
             }
            
          });
        }
      })
      .catch(function (error) {
        console.log(error);
      });


      $('#challenge').on('click', function(){
          
          swal({
          title: "Challenge Friend!",
          text: "<span style='color:#0a0a0a;font-weight:400'>Enter email Id of the friend to Challenge!</span>",
          type: "input",
          html: true,
          showCancelButton: true,
           confirmButtonColor: "#0048bc",
          closeOnConfirm: false,
          animation: "slide-from-top",
          inputPlaceholder: "Ex.: xyz@gmail.com",
          showLoaderOnConfirm: true,
        },
        function(inputValue){
          if (inputValue === false) return false;
          
          if (inputValue === "") {
            swal.showInputError("You need to enter email id!");
            return false
          }

          axios.post('/user/challenge', {
            email: inputValue,
            quiz: qid
          })
          .then(function (response) {
            console.log(response);
            if(response.data == 'success'){
               swal({
                title: "Challenge Sent!",
                text: "<span style='color:#0a0a0a;font-weight:400'>Done!, Challenge sent to <span style='color:#019e13;font-weight:bold;'>" + inputValue + "!</span>",
                type: "success",
                html: true,
                confirmButtonColor: "#0048bc",
              });
            }
            
          })
          .catch(function (error) {
            console.log(error);
          });
          
         
        });

      });




      $('#save').on('click', function(){
          
          if($('#save').data('save')) {
              axios.post('/profile/quiz/save', {
                quiz: qid
              })
              .then(function (response) {
                console.log(response);
                if(response.data == 'success'){
                   $('#save').html('Unsave quiz');
                     $('#save').data('save', 0);
                   swal({
                    title: "quiz Saved!",
                    text: "<span style='color:#0a0a0a;font-weight:400'>Done!, quiz saved to your profile!",
                    type: "success",
                    html: true,
                    confirmButtonColor: "#0048bc",
                  });
                }
                
              })
              .catch(function (error) {
                console.log(error);
              });

         } else {
           axios.post('/profile/quiz/unsave', {
            quiz: pid
          })
          .then(function (response) {
            console.log(response);
            if(response.data == 'success'){
              $('#save').html('Save quiz');
              $('#save').data('save', 1);
               swal({
                title: "quiz Removed!",
                text: "<span style='color:#0a0a0a;font-weight:400'>Done!, quiz removed from your profile!",
                type: "success",
                html: true,
                confirmButtonColor: "#0048bc",
              });
            }
            
          })
          .catch(function (error) {
            console.log(error);
          });
         } 


      });





});


function sum_values(){
var the_sum = 0;
for (question in points){
    the_sum = the_sum + parseInt(points[question])
}
return the_sum
}

