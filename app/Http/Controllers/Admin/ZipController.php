<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ZipController extends Controller
{
    public function qrzip(Request $request) 
    {

        try {
            File::delete(public_path('QrCOdes.zip'));

            $ids = $request->ids;
            $users = \App\Models\User::whereIn('id',$ids)->pluck('membership_number')->toArray();
            $MemebrfileNames = preg_filter('/$/', '.png', $users);

            $zip = new \ZipArchive();
            $fileName = 'QrCOdes.zip';
            if ($zip->open(public_path($fileName), \ZipArchive::CREATE)== TRUE)
            {
                $files = File::files(storage_path('app\public\QrCodes'));
                foreach ($files as $key => $value) {
                    $relativeName = basename($value);
                    if (in_array($relativeName, $MemebrfileNames) ) {
                        $zip->addFile($value, $relativeName);
                    }
                }
                $zip->close();
            }

        return response()->download(public_path($fileName));
            
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error','QR Code does not exist');
        }
    }
}
