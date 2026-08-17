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
        $categories     = ServiceCategory::withCount(['spaServices' => function ($q) {
                                                    $q->where('is_active', true);
                                            }])->orderBy('sort_order', 'asc')->get();
        $settings       = AppSetting::all()->pluck('value', 'key');
        return view('frond.index', compact('categories', 'settings'));
    }

    public function services(): View
    {
        $categories     = ServiceCategory::withCount(['spaServices' => function ($q) {
                                                    $q->where('is_active', true);
                                            }])->orderBy('sort_order', 'asc')->get();

        $services           = SpaService::where('is_active', true)->with('category')->get();
        $selectedCategory   = null;
        $settings           = AppSetting::all()->pluck('value', 'key');

        return view('frond.services', compact('categories', 'services', 'selectedCategory', 'settings'));
    }

    public function categoryServices(ServiceCategory $category): View
    {
        $categories     = ServiceCategory::withCount(['spaServices' => function ($q) {
                                        $q->where('is_active', true);
                                    }])->orderBy('sort_order', 'asc')->get();

        $services       = SpaService::where('is_active', true)
                                    ->where('service_category_id', $category->id)
                                    ->with('category')
                                    ->get();

        $selectedCategory = $category;
        $settings = AppSetting::all()->pluck('value', 'key');

        return view('frond.services', compact('categories', 'services', 'selectedCategory', 'settings'));
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
