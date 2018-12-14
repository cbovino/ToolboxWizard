function callPHP(){
  $.ajax({
    url:"poststatus.php", // page with php script
    type:"POST", 
    success: function(){
      alert("Completion added!"); // an alert to show the user that video for a subject has been completed
    }
  });
}
