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

    public function findArtefatos() {
        $data = $this->db->get('artefatos')->result();

        foreach ($data as $a) {
            $a->natureza = $this->findFeature("natureza_peca", "idnatureza", $a->idartefatos);
        }

        return $data;
    }

    /*
     * Busca característica do Artefato
     */

    private function findFeature($e, $key, $artefato) {
        $this->db->from($e . " e");
        $this->db->join("artefatos a", "e.$key = a.$key  ", "inner");
        $this->db->where("idartefatos", $artefato);
        return $this->db->get()->result();
    }

    public function findAllById($id) {
        $this->db->where("idartefatos", $id);
        return $this->db->get("artefatos")->result();
    }

    public function insert($param) {
        $data = array(
            'numero_inventario' => $param['input_numero_inventario'],
            'idnatureza' => $param['input_natureza'],
            'idcontorno' => $param['input_contorno'],
            'idforma' => $param['input_forma'],
            'idlabio' => $param['input_labio'],
            'idborda' => $param['input_borda'],
            'idparede' => $param['input_parede'],
            'idbase' => $param['input_base'],
            'idflexao' => $param['input_inflexao'],
            'flange_labial' => $param['input_flange_labial'],
            'flange_mesial' => $param['input_flange_mesial'],
            'idapendice' => $param['input_apencide'],
            'altura' => $param['input_altura'],
            'idespessura' => $param['input_espessura'],
            'diametro' => $param['input_diametro'],
            'idqueima' => $param['input_queima'],
            'idtempero' => $param['input_tempero'],
            'idtecnica' => $param['input_manufatura'],
            'idtratamento' => $param['input_tratamento'],
            'id_local_decoracao' => $param['input_decoracao_local'],
            'id_tipo_decoracao' => $param['input_tipo_decoracao'],
//            'cor_engobo' => $param['input_cor_engobo'],
//            'cor_super_interna' => $param['input_cor_super_interna'],
//            'cor_super_externa' => $param['input_cor_super_externa'],
            'idmotivo' => $param['input_motivo'],
            'iddecoracao_plastica' => $param['input_decoracao_plastica'],
            'marcas_uso' => $param['input_marcas'],
            'filiacao_cultural' => $param['input_filiacao_cultural'],
            'idtafonomia' => $param['input_tafonomia'],
            'filiacao' => $param['input_filiacao'],
            'perfil_borda' => $param['input_perfil_borda'],
            'reconstituicao_artefato' => $param['input_reconstituicao'],
            'fotografia' => $param['input_fotografia']
//            'data' => date("Y/m/d")
        );

        $this->db->insert("artefatos", $data);
    }

}
