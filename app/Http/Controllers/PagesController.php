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
                                            }])->get();
        $settings       = AppSetting::all()->pluck('value', 'key');
        
        $title          = 'The Menorah Spa & Wellness - Luxury Home & Villa Spa in Seminyak Bali';
        $description    = 'Nikmati layanan spa mewah, massage tradisional, dan body treatment langsung di vila atau rumah Anda di Seminyak, Bali.';

        return view('frond.index', compact('categories', 'settings', 'title', 'description'));
    }

    public function services(): View
    {
        $categories     = ServiceCategory::withCount(['spaServices' => function ($q) {
                                                    $q->where('is_active', true);
                                            }])->orderBy('sort_order', 'asc')->get();

        $services           = SpaService::where('is_active', true)->with('category')->get();
        $selectedCategory   = null;
        $settings           = AppSetting::all()->pluck('value', 'key');

        $title          = 'Menu Layanan & Ritual Spa - The Menorah Spa & Wellness';
        $description    = 'Jelajahi berbagai pilihan perawatan spa profesional, aromatherapy, massage, dan paket wellness terbaik di Bali.';

        return view('frond.services', compact('categories', 'services', 'selectedCategory', 'settings', 'title', 'description'));
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

        $title          = "Kategori {$category->name} - The Menorah Spa & Wellness";
        $description    = $category->description ?? "Layanan perawatan {$category->name} terbaik untuk relaksasi dan kesehatan di Bali.";
        $ogImage        = $category->image ? (str_starts_with($category->image, 'http') || str_starts_with($category->image, 'img/') ? asset($category->image) : asset('storage/' . $category->image)) : null;

        return view('frond.services', compact('categories', 'services', 'selectedCategory', 'settings', 'title', 'description', 'ogImage'));
    }

    public function about(): View
    {
        $settings = AppSetting::all()->pluck('value', 'key');

        $title          = 'Tentang Kami - The Menorah Spa & Wellness';
        $description    = 'Kenali lebih dekat The Menorah Spa & Wellness, penyedia layanan spa dan wellness profesional terkemuka di Seminyak, Bali.';

        return view('frond.about', compact('settings', 'title', 'description'));
    }

    public function contact(): View
    {
        $services = SpaService::where('is_active', true)->get();
        $settings = AppSetting::all()->pluck('value', 'key');
        $faqs = Faq::where('is_active', true)->orderBy('sort_order', 'asc')->get();

        $title          = 'Hubungi Kami & Reservasi - The Menorah Spa & Wellness';
        $description    = 'Hubungi The Menorah Spa & Wellness untuk reservasi home/villa spa di Seminyak Bali atau konsultasikan kebutuhan relaksasi Anda.';

        return view('frond.contact', compact('services', 'settings', 'faqs', 'title', 'description'));
    }
}
