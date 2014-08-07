/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {

    setDialogEdit();

    $("#div-novo-registro").hide();

    $("#btn-novo").click(function() {
        $("#div-novo-registro").show();
    });

    $("#btn-salvar").click(function() {
        var data = $("#form-first").serialize() + "&" +
                $("#form-tecnologia").serialize() + "&" +
                $("#form-decoracao").serialize() + "&" +
                $("#form-dados-finais").serialize();

        console.log(data);

        $.ajax({
            url: "http://localhost/cch/home/insere",
            type: "GET",
            data: data,
            error: function() {
                alert("Não foi possivel inserir dados. Contacte o Administrador");
            },
            success: function(data) {
                alert("Dados inseridos com sucesso!");
                window.location.reload(true);
            }
        });
    });

    $(".artefatos").click(function() {
        $.ajax({
            url: "http://localhost/cch/home/selecionado",
            type: "GET",
            data: {
                id: $(this).attr("id")
            },
            error: function() {
                alert("Não foi possivel buscar dados. Contacte o Administrador");
            },
            success: function(data) {
                $("#div-selecionado").html(data);
                $("#div-selecionado").dialog("open");
            }
        });
    });
});

function setDialogEdit() {
    $("#div-selecionado").dialog({
        autoOpen: false,
        width: 685,
        height: 600,
        modal: true/*,
        position: { my: "left top", at: "left bottom"}*/
    });
}