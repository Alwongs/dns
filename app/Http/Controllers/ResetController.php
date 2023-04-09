<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class ResetController extends Controller
{
    public function reset() {
        Artisan::call('migrate:fresh --seed');

        foreach(['categories', 'products', 'static'] as $folder) {
            Storage::deleteDirectory($folder);
            Storage::makeDirectory($folder);
    
            $files = Storage::disk('reset')->files($folder);
    
            foreach($files as $file) {
                Storage::put($file, Storage::disk('reset')->get($file));
            }
        }

        session()->flash('success', 'Проект был сброшен в начальное состояние');
        return redirect()->route('welcome');
    }

    public function clearConfig() {
        Artisan::call('config:clear'); 
        session()->flash('success', 'Config has been successfully cleaned');
        return redirect()->route('welcome');               
    }

    public function clearRoute() {
        Artisan::call('route:clear');   
        session()->flash('success', 'Route has been successfully cleaned');
        return redirect()->route('welcome');             
    }

    public function clearView() {
        Artisan::call('view:clear');   
        session()->flash('success', 'View has been successfully cleaned');
        return redirect()->route('welcome');        
    }

    public function makeSimLink() {
        Artisan::call('storage:link');   
        session()->flash('success', 'The link is successfully made');
        return redirect()->route('welcome');        
    }

    public function sessionFlush() {
        session()->flush(); 
        session()->flash('success', 'Session is successfully cleared');
        return redirect()->route('welcome');        
    }
}
