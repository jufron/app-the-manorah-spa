<?php

namespace App\Http\Controllers;

use App\Models\AppSetting;
use App\Models\Faq;
use App\Models\ServiceCategory;
use App\Models\SpaService;
use Illuminate\Contracts\View\View;

class PagesController extends Controller
{
    public function index(): View
    {
        $services = SpaService::where('is_active', true)->with('category')->get();
        $categories = ServiceCategory::withCount('spaServices')->get();
        $settings = AppSetting::all()->pluck('value', 'key');

        return view('frond.index', compact('services', 'categories', 'settings'));
    }

    public function about(): View
    {
        $settings = AppSetting::all()->pluck('value', 'key');

        return view('frond.about', compact('settings'));
    }

    public function contact(): View
    {
        $services = SpaService::where('is_active', true)->get();
        $settings = AppSetting::all()->pluck('value', 'key');
        $faqs = Faq::where('is_active', true)->orderBy('sort_order', 'asc')->get();

        return view('frond.contact', compact('services', 'settings', 'faqs'));
    }
}
