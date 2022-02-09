<?php

namespace App\Exceptions;

use Exception;

class ParcelMachineNotFoundException extends Exception
{
    /**
     * Report the exception.
     *
     * @return bool|null
     */
    public function report()
    {
        //
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function render($request)
    {
        return view('errors.parcel-machines-not-found', ["error" => 'Parcel machines not found']);
    }

}
