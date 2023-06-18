
// session timer
let off = Boolean(sessionStorage.getItem('off')) || false;

function setCounter(seconds, booking_id){
    console.log('timer set');
    seconds = parseInt(sessionStorage.getItem('seconds')) || seconds;

    function tic(){
        seconds--;
        sessionStorage.setItem('seconds', seconds);
        if(!off){
            if(seconds > 0){
                console.log(seconds);
                setTimeout(tic, 1000);  // update per second
            }
            else{
                // update database
                jQuery.ajax({
                    url: 'update-seat.php',
                    type: 'post',
                    data: {
                        "delete": true,
                        "booking_id": booking_id,
                    },
                    success: function(response){
                        console.log('Time Out!');
                    },
                });
            }
        }
    }
    tic();
}

function offCounter(){
    off = true;
    sessionStorage.setItem('off', off);
    /*
    jQuery.ajax({
        url: 'update-seat.php',
        type: 'post',
        data: {
            "paid": true,
            "booking_id": booking_id,
        },
        success: function(){
            console.log("Payment successed.");
        }
    });
    */
}
