<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Artefato extends CI_Model {

    var $idartefatos,
            $numero_inventario,
            $natureza_peca,
            $contorno,
            $forma,
            $labio,
            $borda,
            $parede,
            $base,
            $inflexao,
            $flange_labial,
            $flange_mesial,
            $apencide,
            $altura,
            $espessura,
            $diametro,
            $queima,
            $tempero,
            $tecnica_manufatura,
            $local_decoracao,
            $tipo_decoracao,
            $cor_engobo,
            $cor_super_interna,
            $cor_super_externa,
            $motivo,
            $decoracao_plastica,
            $marcas_uso,
            $filiacao_cultural,
            $tafonomia,
            $filiacao,
            $perfil_borda,
            $reconstituicao_artefato,
            $fotografia,
            $data;

    public function __construct() {
        parent::__construct();
    }

    public function findAll($entity) {
        return $this->db->get($entity)->result();
    }

    public function findAllById($id) {
        $this->db->where("idartefatos", $id);
        return $this->db->get("artefatos")->result();
    }

    public function insert($param) {
        $data = array(
            'numero_inventario' => $param['input_numero_inventario'],
            'natureza_peca' => $param['input_natureza'],
            'contorno' => $param['input_contorno'],
            'forma' => $param['input_forma'],
            'labio' => $param['input_labio'],
            'borda' => $param['input_borda'],
            'parede' => $param['input_parede'],
            'base' => $param['input_base'],
            'inflexao' => $param['input_inflexao'],
            'flange_labial' => $param['input_flange_labial'],
            'flange_mesial' => $param['input_flange_mesial'],
            'apencide' => $param['input_apencide'],
            'altura' => $param['input_altura'],
            'espessura' => $param['input_espessura'],
            'diametro' => $param['input_diametro'],
            'queima' => $param['input_queima'],
            'tempero' => $param['input_tempero'],
            'tecnica_manufatura' => $param['input_manufatura'],
            'tratamento_superficie' => $param['input_tratamento'],
            'local_decoracao' => $param['input_decoracao_local'],
            'tipo_decoracao' => $param['input_tipo_decoracao'],
            'cor_engobo' => $param['input_cor_engobo'],
            'cor_super_interna' => $param['input_cor_super_interna'],
            'cor_super_externa' => $param['input_cor_super_externa'],
            'motivo' => $param['input_motivo'],
            'decoracao_plastica' => $param['input_decoracao_plastica'],
            'marcas_uso' => $param['input_marcas'],
            'filiacao_cultural' => $param['input_filiacao_cultural'],
            'tafonomia' => $param['input_tafonomia'],
            'filiacao' => $param['input_filiacao'],
            'perfil_borda' => $param['input_perfil_borda'],
            'reconstituicao_artefato' => $param['input_reconstituicao'],
            'fotografia' => $param['input_fotografia'],
            'data' => date("Y/m/d"),
        );

        $this->db->insert("artefatos", $data);
    }

}
