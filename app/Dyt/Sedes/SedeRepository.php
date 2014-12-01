<?php namespace Dyt\Sedes;



use Dyt\Sedes\Sede;


class SedeRepository {


	public function save(Sede $sede) {
		return $sede->save();
	}


    public function getPaginated($howMany=25){

        return Sede::orderBy('nombre_sede','asc')->paginate($howMany);

    }



    /**
     * Find the sede by their id
     *
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return Sede::findOrFail($id);
    }


}