<?php namespace Dyt\Sedes ;

use Dyt\Sedes\Sede;
use Dyt\Sedes\SedeRepository;
use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;

class RegisterSedeCommandHandler implements CommandHandler {



    use DispatchableTrait;

    protected $repository;

    function __construct(SedeRepository $repository) {
        $this->repository = $repository;
    }

    /**
     * Handle the command
     *
     * @param  $command
     * @return mixed
     */
    public function handle($command) {

        $sede = Sede::register(
            $command->nombre_sede,$command->provincia,$command->localidad,$command->responsable_sede,$command->email_responsable_sede, $command->telefono_responsable_sede
        );

        $this->repository->save($sede);



        return $sede;
    }


}