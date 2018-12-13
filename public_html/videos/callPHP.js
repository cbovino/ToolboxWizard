function callPHP(){
  $.ajax({
    url:"videospage.php", // page with php script
    type:"POST", // request type
    success: function(){
      alert("Completion added!"); // an alert to show the user that video for a subject has been completed
    }
  });
}
