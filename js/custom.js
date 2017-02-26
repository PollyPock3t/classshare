$(document).ready(function(){

/* When the user clicks on the Add button, 
toggle between hiding and showing the dropdown content */
function myFunctionAdd() {
    document.getElementById("myDropdownAdd").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtnAdd')) {

    var dropdowns = document.getElementsByClassName("dropdownAdd-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

/* When the user clicks on the view button, 
toggle between hiding and showing the dropdown content */
function myFunctionView() {
    document.getElementById("myDropdownView").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtnView')) {

    var dropdowns = document.getElementsByClassName("dropdownView-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function createFunction() {
        var event = prompt("Please type the event name");
        if (event != null) {
            document.getElementById("banner").innerHTML = event;
        
        }
    }

    function myFunctionAddNotes() {
        var sourceNotes = prompt("Please type the document url")
        if (sourceNotes != null) {
            document.getElementById("notesList").innerHTML = sourceNotes;
    }
    }
    
    function myFunctionAddVideo() {
        var sourceVideo = prompt("Please type the video url")
        if (sourceVideo != null) {
            document.getElementById("videoList").innerHTML = sourceVideo;
    }
    }
    
    function myFunctionAddAudio() {
        var sourceAudio = prompt("Please type the audio file url")
        if (sourceAudio != null) {
            document.getElementById("audioList").innerHTML = sourceAudio;
    }
    }


});