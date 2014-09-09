/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var PATH = "http://" + window.document.domain + "/larq/manager/";

$(document).ready(function() { 

    setDialogEdit();

    $("#div-novo-registro").hide();

    $("#btn-novo").click(function() {
        $("#div-novo-registro").show();
    });

    $("#btn-cancel").click(function() {
        $("#div-novo-registro").hide();
    });

    $("#btn-salvar").click(function() {
        var data = $("#form-first").serialize() + "&" +
                $("#form-tecnologia").serialize() + "&" +
                $("#form-decoracao").serialize() + "&" +
                $("#form-dados-finais").serialize();
//        var data = $("#form-first").serialize();

        $.ajax({
            url: PATH + "insere",
            type: "GET",
            data: data,
            error: function() {
                alert("Não foi possivel inserir dados. Contacte o Administrador");
            },
            success: function(data) {
                console.log(data);
                alert("Dados inseridos com sucesso!");
                window.location.reload(true);
            }
        });
    });

    $(".artefatos").click(function() {
        $.ajax({
            url: PATH + "selecionado",
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