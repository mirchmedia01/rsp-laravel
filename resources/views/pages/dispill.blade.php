@extends('layouts.app')

@section('title', 'Dis-Pill Multi-Dose Packaging - Medication Made Simple | R & S Pioneer Pharmacy')
@section('meta_description', 'Never miss a dose with Dis-Pill blister packaging at R & S Pioneer Pharmacy Bronx NY. Color-coded morning, noon, evening, and bedtime pods. 100% free service.')

@section('content')
<!-- Hero Section (Goldberger Elevated Card Layout with Photo Background) -->
<div class="relative flex min-h-[75vh] sm:min-h-[82vh] lg:min-h-[88vh] w-full bg-cover bg-center bg-no-repeat text-white overflow-hidden" 
     style="background-image: linear-gradient(to right, rgba(7, 30, 60, 0.92) 0%, rgba(7, 30, 60, 0.72) 55%, rgba(7, 30, 60, 0.35) 100%), url('{{ asset('images/dispill-packaging.jpg') }}');">
    
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 py-10 sm:py-14 lg:py-20 mt-auto w-full flex items-end justify-between relative z-10 !pb-0">
        
        <!-- Bottom Elevated Navy Glass Card -->
        <section class="w-full lg:max-w-3xl rounded-t-3xl sm:rounded-t-[2.5rem] bg-gradient-to-b from-[#0B2F5C]/95 via-[#071E3C]/95 to-[#071E3C]/98 p-6 sm:p-10 lg:p-14 border-t border-l border-r border-white/20 shadow-[0_25px_60px_-15px_rgba(0,0,0,0.6)] backdrop-blur-xl relative z-10 pb-20 sm:pb-32 lg:pb-44">
            <div class="flex flex-col gap-4 sm:gap-6">
                
                <!-- Pill Badge -->
                <div class="inline-flex items-center gap-2 bg-[#C1272D] px-3.5 py-1.5 rounded-full text-[11px] sm:text-xs font-bold uppercase tracking-wider text-white shadow-md w-fit">
                    <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
                    <span>100% Free Packaging Service &bull; Highbridge Bronx</span>
                </div>

                <!-- 2-Tone Headline -->
                <h1 class="font-display leading-[1.15] tracking-tight text-white">
                    <span class="block text-base sm:text-xl lg:text-2xl font-normal text-slate-200">Dis-Pill Multi-Dose Packaging</span>
                    <span class="block text-2xl sm:text-4xl lg:text-5xl font-extrabold text-white mt-1">
                        Medication Management Made Simple
                    </span>
                </h1>

                <!-- Subtitle with Official Motto -->
                <p class="text-slate-200 text-xs sm:text-sm sm:leading-relaxed font-sans max-w-2xl">
                    Replace confusing pill bottles with a single, color-coded calendar blister pack. Pharmacist-verified for safety, detachable for travel, and completely free for our patients: <strong class="text-white font-semibold italic">"We're the pharmacy that cares."</strong>
                </p>

                <!-- Dual Action Buttons -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-1">
                    <a href="tel:7185388183" class="inline-flex items-center justify-center gap-2 bg-[#C1272D] hover:bg-[#a51d22] text-white px-6 py-3 rounded-full font-bold text-xs sm:text-sm shadow-xl hover:scale-105 transition-all">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>Call to Enroll: (718) 538-8183</span>
                    </a>
                    <a href="{{ route('transfer') }}" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-100 text-[#0B2F5C] px-6 py-3 rounded-full font-bold text-xs sm:text-sm shadow-md hover:scale-105 transition-all">
                        <span>Transfer ℞ for Dis-Pill</span>
                        <svg class="w-3.5 h-3.5 text-[#C1272D] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

            </div>
        </section>

        <!-- Right Floating Badges (Desktop) -->
        <div class="hidden xl:flex flex-col gap-4 pb-36 z-10 max-w-xs">
            <div class="flex items-center gap-3.5 bg-white/95 backdrop-blur-md rounded-2xl p-4 shadow-2xl border border-white/30 text-slate-900">
                <div class="w-10 h-10 rounded-xl bg-emerald-600 text-white flex items-center justify-center font-bold text-base shrink-0 shadow">
                    $0
                </div>
                <div>
                    <strong class="block text-slate-900 font-bold text-xs sm:text-sm">$0 Packaging Surcharge</strong>
                    <span class="text-slate-600 text-[11px]">Free service for all patients</span>
                </div>
            </div>
            <div class="flex items-center gap-3.5 bg-[#071E3C]/90 backdrop-blur-md rounded-2xl p-4 shadow-2xl border border-white/10 text-white">
                <div class="w-10 h-10 rounded-xl bg-blue-500/20 text-blue-300 flex items-center justify-center font-bold text-base shrink-0">
                    <svg class="w-5 h-5 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <div>
                    <strong class="block text-white font-bold text-xs sm:text-sm">Never Double-Dose</strong>
                    <span class="text-slate-300 text-[11px]">Clear visual calendar proof</span>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Floating Overlapping Strip: 4 Daily Dosage Slots (Goldberger Format) -->
<div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 -mt-12 sm:-mt-20 lg:-mt-32 relative z-30 mb-12 sm:mb-16">
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
                    Taking multiple medications shouldn't feel like a full-time job. With R &amp; S Pioneer Pharmacy's Dis-Pill packaging, Pharmacist Kunal Shah and our team organize your entire month's prescriptions into one easy-to-follow, cold-sealed blister calendar.
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
                            <strong class="text-slate-900 text-xs sm:text-sm block">No More Hard-to-Open Bottle Caps</strong>
                            <p class="text-xs text-slate-600">Foil-backed push-through blisters require gentle pressure, making them effortless for patients with arthritis.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-800 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <strong class="text-slate-900 text-xs sm:text-sm block">Synchronized Monthly Refills</strong>
                            <p class="text-xs text-slate-600">We synchronize all your medications so you receive your complete pack once a month with free home delivery.</p>
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

        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
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
</section>

<!-- Bottom Full Navy CTA Banner (Goldberger Style) -->
<div class="flex w-full bg-[#0B2F5C] py-12 sm:py-16 lg:py-24 text-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 text-center space-y-5 sm:space-y-6">
        <h3 class="text-[#E8F0FE] font-bold text-xs sm:text-sm tracking-wider uppercase">Simplifying Healthcare Across the Bronx</h3>
        <h2 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-display text-white">
            Ready to Try Dis-Pill for Yourself or a Loved One?
        </h2>
        <p class="max-w-2xl mx-auto text-slate-200 text-xs sm:text-base leading-relaxed">
            Stop by 1018 Ogden Ave or call (718) 538-8183. Pharmacist Kunal Shah will review your medications and prepare your first month's Dis-Pill pack with free doorstep delivery.
        </p>
        <div class="pt-2 flex flex-col sm:flex-row justify-center items-stretch sm:items-center gap-3 sm:gap-4">
            <a href="tel:7185388183" class="rounded-full bg-white text-[#0B2F5C] font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm hover:bg-[#E8F0FE] transition shadow hover:scale-105">
                <span>Call (718) 538-8183</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="{{ route('transfer') }}" class="rounded-full border border-white text-white font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm hover:bg-white hover:text-[#0B2F5C] transition shadow">
                <span>Transfer ℞ for Dis-Pill</span>
            </a>
        </div>
    </div>
</div>
@endsection
