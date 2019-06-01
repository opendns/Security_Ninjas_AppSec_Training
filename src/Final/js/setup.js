function DisplayHintOrSolution(value){
    $.ajax({
        url: "http://localhost:8899/hintsAndSolutions.php?q=" + value,
        success: function(data, textStatus, jqXHR) {							
            $("#"+value).html(data);
        }
    });
}