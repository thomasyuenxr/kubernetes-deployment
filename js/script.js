/**
MEANINGFUL INTERACTION #1
A pop-up window to inform guest with the booking success and booking information
*/
let btn1 = document.getElementById("booking-btn");
if (btn1) {
    btn1.onclick=function(){
        var guestName = document.getElementById("name-input").value;
        var fromDate = document.getElementById("datepicker1").value;
        var toDate = document.getElementById("datepicker2").value;
        var guestNum = document.getElementById("guest-num").value;
        alert("Congrats!\n\n" +guestName+"\n\nThanks for choosing us!"+"\n\nYou have successfully order a trip\n \nFrom  " +fromDate+ "\n\nTo  " +toDate+"\n\nwith "+ guestNum+ " members\n\nWe are all excited about your coming!");
    };
}



var submit1  = document.getElementById("submitbtn");
if (submit1) {
    submit1.onclick=function(){
        var contactName = document.getElementById("nameinput").value;
        alert("We have heard your voice "+contactName+".\n\nWe will reply to you as soon as possible!");
    };
}



/**
MEANINGFUL INTERACTION #2
By clicking the button, popup a modal to show the information.
*/

/* inspired by https://www.w3schools.com/howto/howto_css_modals.asp */ 


var open1 = document.getElementById('plan1');
var open2 = document.getElementById('plan2');
var closebtn = document.getElementById('closebtn');
var modal_container = document.getElementById("modal");
var overlay = document.getElementById('overlay')

if (open1) {
    open1.onclick = function() {
        modal_container.style.display = 'block';
        overlay.style.display = 'block';
    }
}

if (open2) {
    open2.onclick = function() {
        modal_container.style.display = 'block';
        overlay.style.display = 'block';
    }
}

if (closebtn) {
    closebtn.onclick = function() {
        modal_container.style.display = 'none';
        overlay.style.display = 'none';
    }
}



/**
MEANINGFUL INTERACTION #3
Allow the guest to control a button to show more activities when they have interest about the club. It is useful to control the length of the page, avoid redundant information.
*/



var readMore = document.getElementById('read-more');

if (readMore) {
    readMore.onclick = function() {
        var moreActivity = document.getElementById('more-activity');
        if (readMore.innerHTML=="SHOW MORE") {
            moreActivity.style.display = "block";
            readMore.innerHTML = "SHOW LESS";
        } else {
            moreActivity.style.display = "none";
            readMore.innerHTML = "SHOW MORE";
        }
    };
};





/**
MEANINGFUL INTERACTION #4
Through the text input area and enter button, display guest's entered comment immediately.Simulating the comment post.
*/


var addFeedbackBtn = document.getElementById('apply-feedback');
var commentBox = document.getElementById('added-comment');
var addText = document.getElementById('added-p');

if (addFeedbackBtn) {
    addFeedbackBtn.onclick = function(){
        var feedbackContent = document.getElementById('comment-input').value;
        addText.innerHTML = feedbackContent;
        commentBox.style.display = 'block';
        return false;
    };
};
