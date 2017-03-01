<?php
class servicios_model extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function Articulos()
    {
        $i=0;
        $rtnArticulo=array();
        $query = $this->sqlsrv->fetchArray("SELECT * FROM GMV_mstr_articulos",SQLSRV_FETCH_ASSOC);
        foreach($query as $key){
            $rtnArticulo['results'][$i]['mCodigo']     = $key['ARTICULO'];
            $rtnArticulo['results'][$i]['mName']  = $key['DESCRIPCION'];
            $rtnArticulo['results'][$i]['mExistencia']   = number_format($key['EXISTENCIA'],2,'.','');
            $rtnArticulo['results'][$i]['mUnidad']       = $key['UNIDAD'];
            $rtnArticulo['results'][$i]['mPrecio']       = number_format($key['PRECIO'],2,'.','');
            $rtnArticulo['results'][$i]['mPuntos']       = $key['PUNTOS']   ;
            $rtnArticulo['results'][$i]['mReglas']       = $key['REGLAS'];
            $i++;
        }
        echo json_encode($rtnArticulo);
        $this->sqlsrv->close();
    }
    public function ClienteMora($Cliente)
    {
        $i=0;
        $rtnCliente=array();
        $query = $this->sqlsrv->fetchArray("SELECT * FROM GMV_ClientesPerMora WHERE VENDEDOR='".$Cliente."'",SQLSRV_FETCH_ASSOC);
        foreach($query as $key){
            $rtnCliente['results'][$i]['CLIENTE']      = $key['CLIENTE'];
            $rtnCliente['results'][$i]['NOMBRE']       = $key['NOMBRE'];
            $rtnCliente['results'][$i]['NoVencidos']   = number_format($key['NoVencidos'],2,'.','');
            $rtnCliente['results'][$i]['Dias30']       = number_format($key['Dias30'],2,'.','');
            $rtnCliente['results'][$i]['Dias60']       = number_format($key['Dias60'],2,'.','');
            $rtnCliente['results'][$i]['Dias90']       = number_format($key['Dias90'],2,'.','');
            $rtnCliente['results'][$i]['Dias120']      = number_format($key['Dias120'],2,'.','');
            $rtnCliente['results'][$i]['Mas120']       = number_format($key['Mas120'],2,'.','');
            $rtnCliente['results'][$i]['SALDO']        = number_format($key['SALDO'],2, '.', '');
            $rtnCliente['results'][$i]['LIMITE']       = number_format($key['LIMITE_CREDITO'],2, '.', '');
            $i++;
        }
        echo json_encode($rtnCliente);
        $this->sqlsrv->close();
    }

}
?>
