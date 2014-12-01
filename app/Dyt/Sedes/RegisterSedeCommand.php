<?php namespace Dyt\Sedes ;

class RegisterSedeCommand {
    public $nombre_sede;
    public $localidad;
    public $provincia;
    public $responsable_sede;
    public $email_responsable_sede;
    public $telefono_responsable_sede;

    /**
     */
    public function __construct($nombre_sede, $localidad, $provincia, $responsable_sede, $email_responsable_sede, $telefono_responsable_sede )
    {
        $this->nombre_sede = $nombre_sede;
        $this->localidad = $localidad;
        $this->provincia = $provincia;
        $this->responsable_sede = $responsable_sede;
        $this->email_responsable_sede = $email_responsable_sede;
        $this->telefono_responsable_sede = $telefono_responsable_sede;
    }

}