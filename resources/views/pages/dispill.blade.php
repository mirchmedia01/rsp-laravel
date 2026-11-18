@extends('layouts.app')

@section('title', 'Multi-Dose Packaging for Medication Adherence (Dis-Pill & Cold Seal Blister Cards) | R & S Pioneer Pharmacy')
@section('meta_description', 'We offer multi-dose packaging for medication adherence at R & S Pioneer Pharmacy Bronx NY, including Dis-Pill multi-dose packaging and Cold Seal Blister Card packaging. 100% free service.')

@section('content')
<!-- Hero Section (Custom Multi-Service & Dis-Pill Blister Packs Banner) -->
<div class="hero-desktop-bg relative flex flex-col lg:flex-row lg:min-h-[540px] w-full bg-gradient-to-b from-[#071E3C] via-[#0B2F5C] to-[#07254E] text-white overflow-hidden" 
     style="--hero-bg: linear-gradient(to right, rgba(11, 47, 92, 0.78) 0%, rgba(11, 47, 92, 0.45) 50%, rgba(7, 30, 60, 0.15) 100%), url('{{ asset('images/dispill-hero.jpg') }}'); --hero-bg-pos: center right;">

    <!-- Mobile & Tablet Unobstructed Hero Banner Visual (< lg) -->
    <div class="lg:hidden relative w-full aspect-[16/10] sm:aspect-[2/1] md:aspect-[2.35/1] bg-[#00175D] overflow-hidden shrink-0">
        <img src="{{ asset('images/dispill-hero.jpg') }}"
             alt="Dis-Pill and Cold Seal Multi-Dose Blister Packaging"
             class="w-full h-full object-cover object-right"
             loading="eager"
             fetchpriority="high">
        <div class="pointer-events-none absolute inset-x-0 bottom-0 h-8 sm:h-10 bg-gradient-to-t from-[#071E3C] via-[#071E3C]/30 to-transparent"></div>
    </div>
    
    <div class="max-w-screen-xl mx-auto px-0 lg:px-10 pt-0 lg:pt-10 lg:mt-auto w-full flex flex-col lg:flex-row items-end justify-between gap-6 xl:gap-10 relative z-10 !pb-0">
        
        <!-- Left: Dis-Pill Blister Packs Elevated Glass Card -->
        <section class="w-full lg:max-w-xl xl:max-w-2xl px-4 sm:px-6 md:px-10 pt-4 sm:pt-6 pb-10 sm:pb-14 lg:rounded-t-[2.5rem] lg:bg-gradient-to-b lg:from-[#0B2F5C]/40 lg:via-[#0D3B74]/30 lg:to-[#07254E]/40 lg:p-10 lg:border-t lg:border-l lg:border-r lg:border-white/25 lg:shadow-2xl relative z-10 lg:pb-16 lg:backdrop-blur-md">
            <div class="flex flex-col gap-4 sm:gap-6">
                
                <!-- Badge Row -->
                <div class="flex flex-wrap items-center gap-2 sm:gap-3">
                    <div class="inline-flex items-center gap-2 bg-[#C1272D] px-3.5 py-1.5 rounded-full text-[11px] sm:text-xs font-bold uppercase tracking-wider text-white shadow-md">
                        <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
                        <span>100% Free Packaging Service</span>
                    </div>

                    <span class="inline-flex items-center px-3.5 py-1.5 rounded-full bg-white/15 backdrop-blur-md border border-white/25 text-[11px] sm:text-xs font-black uppercase tracking-widest text-white shadow-sm">
                        R &amp; S PIONEER PHARMACY
                    </span>
                </div>

                <!-- Main Headline -->
                <h1 class="text-3xl sm:text-5xl lg:text-[52px] font-extrabold font-display leading-[1.12] tracking-tight text-white break-words drop-shadow-[0_2px_8px_rgba(0,0,0,0.85)]">
                    Dis-Pill &amp; Cold Seal <span class="italic text-amber-300 font-serif">Blister Cards.</span>
                </h1>

                <!-- Subtitle with Official Motto -->
                <p class="text-white text-sm sm:text-base sm:leading-relaxed font-sans max-w-xl font-medium drop-shadow-[0_1px_4px_rgba(0,0,0,0.85)]">
                    Replace confusing pill bottles with organized, color-coded calendar blister packs. Multi-dose adherence packaging tailored to your schedule: <strong class="text-white font-bold italic">"We're the pharmacy that cares."</strong>
                </p>

                <!-- Dual Action Buttons -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-2 sm:pt-3">
                    <a href="tel:7185388183" class="inline-flex items-center justify-center gap-2 bg-[#C1272D] hover:bg-[#a51d22] text-white px-7 py-3.5 rounded-full font-bold text-sm shadow-xl hover:shadow-2xl hover:scale-105 transition-all cursor-pointer">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span class="tracking-wide uppercase">Call: (718) 538-8183</span>
                    </a>
                    <a href="{{ route('transfer') }}" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-100 text-[#0B2F5C] px-7 py-3.5 rounded-full font-bold text-sm shadow-md hover:scale-105 transition-all">
                        <span class="tracking-wide uppercase">Transfer ℞ for Dis-Pill</span>
                        <svg class="w-4 h-4 text-[#C1272D] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

            </div>
        </section>

    </div>
</div>

<!-- Floating Overlapping Strip: 4 Daily Dosage Slots (Goldberger Format) -->
<div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 -mt-4 sm:-mt-6 lg:-mt-8 relative z-30 mb-12 sm:mb-16">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
        
        <!-- Slot 1: Morning -->
        <div class="h-full bg-white rounded-3xl p-5 sm:p-6 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300">
            <div class="space-y-3">
                <div class="w-11 h-11 rounded-2xl bg-amber-50 text-amber-700 flex items-center justify-center font-bold text-lg shadow-sm">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h3 class="text-base sm:text-lg font-bold text-[#0B2F5C] font-display">Morning Pod</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Yellow-banded morning slots. Perfect for morning blood pressure, thyroid, and daily health maintenance pills.
                </p>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-[11px] font-bold text-amber-700">Breakfast (7am - 9am)</span>
                <div class="w-10 h-1 bg-amber-500 rounded-full"></div>
            </div>
        </div>

        <!-- Slot 2: Noon -->
        <div class="h-full bg-white rounded-3xl p-5 sm:p-6 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300">
            <div class="space-y-3">
                <div class="w-11 h-11 rounded-2xl bg-orange-50 text-orange-700 flex items-center justify-center font-bold text-lg shadow-sm">
                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-base sm:text-lg font-bold text-[#0B2F5C] font-display">Noon Pod</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Orange-banded midday slot. Keeps afternoon doses organized without having to carry 5 separate medicine bottles to work.
                </p>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-[11px] font-bold text-orange-700">Lunch (12pm - 1pm)</span>
                <div class="w-10 h-1 bg-orange-500 rounded-full"></div>
            </div>
        </div>

        <!-- Slot 3: Evening -->
        <div class="h-full bg-white rounded-3xl p-5 sm:p-6 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300">
            <div class="space-y-3">
                <div class="w-11 h-11 rounded-2xl bg-teal-50 text-teal-700 flex items-center justify-center font-bold text-lg shadow-sm">
                    <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h3 class="text-base sm:text-lg font-bold text-[#0B2F5C] font-display">Evening Pod</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Green-banded dinner slot. Perfect for meals and evening insulin support or cholesterol medications.
                </p>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-[11px] font-bold text-teal-700">Dinner (5pm - 7pm)</span>
                <div class="w-10 h-1 bg-teal-500 rounded-full"></div>
            </div>
        </div>

        <!-- Slot 4: Bedtime -->
        <div class="h-full bg-white rounded-3xl p-5 sm:p-6 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300">
            <div class="space-y-3">
                <div class="w-11 h-11 rounded-2xl bg-indigo-50 text-indigo-700 flex items-center justify-center font-bold text-lg shadow-sm">
                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                </div>
                <h3 class="text-base sm:text-lg font-bold text-[#0B2F5C] font-display">Bedtime Pod</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Navy-banded nighttime slot. Clearly separated from daytime meds to eliminate drowsy mistakes before sleep.
                </p>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-[11px] font-bold text-indigo-700">Bedtime (9pm - 11pm)</span>
                <div class="w-10 h-1 bg-indigo-500 rounded-full"></div>
            </div>
        </div>

    </div>
</div>

<!-- Deep Dive: How Dis-Pill Works & Why It Replaces Bottles -->
<section class="py-12 sm:py-16 lg:py-24 bg-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-center">
            
            <!-- Left: Visual Image & Features -->
            <div class="lg:col-span-6 space-y-6">
                <div class="rounded-3xl overflow-hidden shadow-2xl border border-slate-200 group">
                    <img src="{{ asset('images/dispill-packaging.jpg') }}" alt="Dis-Pill Multi-Dose Blister Packaging Bronx" class="w-full h-80 sm:h-96 object-cover group-hover:scale-105 transition duration-700">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="p-4 bg-[#F8FAFC] rounded-2xl border border-slate-100 space-y-1">
                        <span class="text-xs font-bold text-[#0B2F5C] uppercase tracking-wider block">Detachable Pods</span>
                        <p class="text-xs text-slate-600">Pop off today's pods and slip them into your pocket or purse.</p>
                    </div>
                    <div class="p-4 bg-[#F8FAFC] rounded-2xl border border-slate-100 space-y-1">
                        <span class="text-xs font-bold text-[#0B2F5C] uppercase tracking-wider block">Color-Coded</span>
                        <p class="text-xs text-slate-600">Morning, noon, evening, and bedtime color bands prevent confusion.</p>
                    </div>
                </div>
            </div>

            <!-- Right: Content & Benefits -->
            <div class="lg:col-span-6 space-y-6">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#C1272D]">Clinical Care Innovation</span>
                <h2 class="text-2xl sm:text-4xl font-bold font-display text-[#0B2F5C] leading-tight">
                    The Smartest Way to Manage Complex Medication Regimens
                </h2>
                <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                    Taking multiple medications shouldn't feel like a full-time job. With R &amp; S Pioneer Pharmacy's multi-dose packaging, Pharmacist Kunal Shah, Pharm.D., and our team organize your entire month's prescriptions into one easy-to-follow adherence system. We offer both <strong>Dispill multi-dose packaging</strong> (with detachable daily pods) and <strong>Cold Seal Blister Card packaging</strong> (sealed securely without heat to preserve medication integrity).
                </p>

                <div class="space-y-3.5 pt-2">
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-800 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <strong class="text-slate-900 text-xs sm:text-sm block">100% Peace of Mind for Caregivers</strong>
                            <p class="text-xs text-slate-600">One quick look shows whether Mom or Dad took their morning blood pressure or evening heart meds.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-800 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <strong class="text-slate-900 text-xs sm:text-sm block">Cold Seal Blister Cards &amp; Easy Push-Through Foil</strong>
                            <p class="text-xs text-slate-600">Our cold-sealed blister cards protect heat-sensitive medicines, eliminate difficult childproof caps, and push through with gentle pressure for patients with arthritis.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-800 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <strong class="text-slate-900 text-xs sm:text-sm block">Synchronized Monthly Refills</strong>
                            <p class="text-xs text-slate-600">We synchronize all your maintenance medications so your complete multi-dose pack is ready once a month for fast, convenient pickup.</p>
                        </div>
                    </div>
                </div>

                <div class="pt-4 flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                    <a href="tel:7185388183" class="inline-flex items-center justify-center gap-2 bg-[#0B2F5C] hover:bg-[#071E3C] text-white px-7 py-3.5 rounded-full font-bold text-xs sm:text-sm shadow-md transition">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>Call (718) 538-8183 to Sign Up</span>
                    </a>
                    <a href="{{ route('transfer') }}" class="inline-flex items-center justify-center gap-2 border border-slate-300 hover:border-[#0B2F5C] text-[#0B2F5C] px-7 py-3.5 rounded-full font-bold text-xs sm:text-sm transition">
                        <span>Transfer Your ℞ Online</span>
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- Comparison Table: Standard Bottles vs Dis-Pill -->
<section class="py-12 sm:py-16 lg:py-20 bg-[#F8FAFC] border-t border-slate-200/60">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 md:px-10 space-y-8 sm:space-y-12">
        
        <div class="text-center space-y-3">
            <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#C1272D]">Comparison</span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold font-display text-[#0B2F5C]">
                Why Bronx Patients Are Switching to Dis-Pill
            </h2>
        </div>

        <div class="block sm:hidden text-center text-xs text-slate-500 font-medium">
            <span class="inline-flex items-center gap-1.5 bg-slate-100 px-3 py-1 rounded-full">
                <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                <span>Swipe left/right to compare features</span>
            </span>
        </div>

        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <div class="min-w-[520px]">
                    <div class="grid grid-cols-12 bg-[#0B2F5C] text-white p-4 sm:p-5 text-xs sm:text-sm font-bold">
                        <div class="col-span-5 sm:col-span-4">Feature</div>
                        <div class="col-span-3 sm:col-span-4 text-slate-300">Standard Bottles</div>
                        <div class="col-span-4 text-amber-300 font-extrabold">Dis-Pill System</div>
                    </div>

                    <div class="divide-y divide-slate-100 text-xs sm:text-sm text-slate-700">
                        <div class="grid grid-cols-12 p-4 sm:p-5 items-center">
                            <div class="col-span-5 sm:col-span-4 font-semibold">Cost to Patient</div>
                            <div class="col-span-3 sm:col-span-4 text-slate-500">Standard Copay</div>
                            <div class="col-span-4 font-bold text-emerald-700">100% Free Service ($0)</div>
                        </div>

                        <div class="grid grid-cols-12 p-4 sm:p-5 items-center bg-slate-50/50">
                            <div class="col-span-5 sm:col-span-4 font-semibold">Missed / Double Dose Risk</div>
                            <div class="col-span-3 sm:col-span-4 text-red-600 font-medium">High (Hard to track)</div>
                            <div class="col-span-4 font-bold text-emerald-700">Near Zero (Visual dates)</div>
                        </div>

                        <div class="grid grid-cols-12 p-4 sm:p-5 items-center">
                            <div class="col-span-5 sm:col-span-4 font-semibold">Ease for Arthritis</div>
                            <div class="col-span-3 sm:col-span-4 text-slate-500">Difficult childproof caps</div>
                            <div class="col-span-4 font-bold text-emerald-700">Gentle foil push-through</div>
                        </div>

                        <div class="grid grid-cols-12 p-4 sm:p-5 items-center bg-slate-50/50">
                            <div class="col-span-5 sm:col-span-4 font-semibold">Travel Convenience</div>
                            <div class="col-span-3 sm:col-span-4 text-slate-500">Carry multiple bulky bottles</div>
                            <div class="col-span-4 font-bold text-emerald-700">Tear off single daily pods</div>
                        </div>

                        <div class="grid grid-cols-12 p-4 sm:p-5 items-center">
                            <div class="col-span-5 sm:col-span-4 font-semibold">Pharmacist Verification</div>
                            <div class="col-span-3 sm:col-span-4 text-slate-500">Bottle-by-bottle</div>
                            <div class="col-span-4 font-bold text-emerald-700">Complete drug interaction check</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Bottom Full Navy CTA Banner (Goldberger Style) -->
<div class="flex w-full bg-[#0B2F5C] py-12 sm:py-16 lg:py-24 text-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 text-center space-y-5 sm:space-y-6">
        <h3 class="text-[#E8F0FE] font-bold text-xs sm:text-sm tracking-wider uppercase">Simplifying Healthcare Across the Bronx</h3>
        <h2 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-display text-white">
            Ready to Try Dis-Pill for Yourself or a Loved One?
        </h2>
        <p class="max-w-2xl mx-auto text-slate-200 text-xs sm:text-base leading-relaxed">
            Stop by 1018 Ogden Ave or call (718) 538-8183. Pharmacist Kunal Shah, Pharm.D., will review your medications and prepare your multi-dose adherence packaging (Dis-Pill or Cold Seal Blister Cards) for convenient in-store pickup.
        </p>
        <div class="pt-2 flex flex-col sm:flex-row justify-center items-stretch sm:items-center gap-3 sm:gap-4">
            <a href="tel:7185388183" class="rounded-full bg-white text-[#0B2F5C] font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm hover:bg-[#E8F0FE] transition shadow hover:scale-105">
                <span>Call (718) 538-8183</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="{{ route('transfer') }}" class="rounded-full bg-[#C1272D] hover:bg-[#a51d22] text-white font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm shadow-lg hover:shadow-xl hover:scale-105 transition-all">
                <span>Transfer ℞ for Dis-Pill</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>
</div>
@endsection
