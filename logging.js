$(document).ready(() => {
    var date = new Date(); 

    var dd = date.getDate(); 
    var mm = date.getMonth() + 1; 

    var yyyy = date.getFullYear(); 
    if (dd < 10) { 
        dd = '0' + dd; 
    } 
    if (mm < 10) { 
        mm = '0' + mm; 
    } 
    var today = dd + '/' + mm + '/' + yyyy;
    var time = date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();
    console.log(`[${today} ${time}]Somebody visited our page...`);
    $.post( "./logging.php",{
        logData: `[${today} ${time}]Somebody visited our page...`
    });
});