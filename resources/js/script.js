$(document).ready(function() {

    $("#documento").click(function() {

        $("#documento").keydown(function() {

            let val = $("#documento").val()
            
            let qtd = val.length

            if (qtd <= 10) {

                $("#documento").mask("00.000.000-0")

            } else if (qtd > 9) {

                $("#documento").mask("000.000.000-00")

            }

            console.log(val, qtd)

        })
        
    })

    $("#cel").click(function() {

        $("#cel").mask("(00) 00000-0000")

    })

})