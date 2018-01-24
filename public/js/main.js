function markNotificationAsRead(notificationCount) {
    if(notificationCount !=='0'){
        $.get('/markAsRead');
    }
}


function dropdownD() {
    $('#dropD').toggle();
}