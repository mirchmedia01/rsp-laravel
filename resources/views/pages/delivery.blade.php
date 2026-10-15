@extends('layouts.app')

@section('title', 'Free Local Prescription Delivery - Highbridge & South Bronx | R & S Pioneer Pharmacy')
@section('meta_description', '100% free prescription delivery across Highbridge, South Bronx, and Grand Concourse. Safe, temperature-controlled, same-day delivery right to your door.')

@section('content')
<!-- Hero Section (Goldberger Elevated Card Layout with Photo Background) -->
<div class="relative flex min-h-[75vh] sm:min-h-[82vh] lg:min-h-[88vh] w-full bg-cover bg-center bg-no-repeat text-white overflow-hidden" 
     style="background-image: linear-gradient(to right, rgba(7, 30, 60, 0.92) 0%, rgba(7, 30, 60, 0.72) 55%, rgba(7, 30, 60, 0.35) 100%), url('{{ asset('images/hero-bg.jpg') }}');">
    
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 py-10 sm:py-14 lg:py-20 mt-auto w-full flex items-end justify-between relative z-10 !pb-0">
        
        <!-- Bottom Elevated Navy Glass Card -->
        <section class="w-full lg:max-w-3xl rounded-t-3xl sm:rounded-t-[2.5rem] bg-gradient-to-b from-[#0B2F5C]/95 via-[#071E3C]/95 to-[#071E3C]/98 p-6 sm:p-10 lg:p-14 border-t border-l border-r border-white/20 shadow-[0_25px_60px_-15px_rgba(0,0,0,0.6)] backdrop-blur-xl relative z-10 pb-20 sm:pb-32 lg:pb-44">
            <div class="flex flex-col gap-4 sm:gap-6">
                
                <!-- Pill Badge -->
                <div class="inline-flex items-center gap-2 bg-[#C1272D] px-3.5 py-1.5 rounded-full text-[11px] sm:text-xs font-bold uppercase tracking-wider text-white shadow-md w-fit">
                    <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
                    <span>100% Free Doorstep Delivery &bull; South Bronx</span>
                </div>

                <!-- 2-Tone Headline -->
                <h1 class="font-display leading-[1.15] tracking-tight text-white">
                    <span class="block text-base sm:text-xl lg:text-2xl font-normal text-slate-200">Prescription Delivery</span>
                    <span class="block text-2xl sm:text-4xl lg:text-5xl font-extrabold text-white mt-1">
                        Free Prescription Delivery to Your Door
                    </span>
                </h1>

                <!-- Subtitle with Official Motto -->
                <p class="text-slate-200 text-xs sm:text-sm sm:leading-relaxed font-sans max-w-2xl">
                    Can't make it to 1018 Ogden Ave? We bring your medications, vitamins, and health supplies directly to your home with zero delivery fees: <strong class="text-white font-semibold italic">"We're the pharmacy that cares."</strong>
                </p>

                <!-- Dual Action Buttons -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-1">
                    <a href="{{ route('refill') }}" class="inline-flex items-center justify-center gap-2 bg-[#C1272D] hover:bg-[#a51d22] text-white px-6 py-3 rounded-full font-bold text-xs sm:text-sm shadow-xl hover:scale-105 transition-all">
                        <span>Request Refill &amp; Delivery</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <a href="tel:7185388183" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-100 text-[#0B2F5C] px-6 py-3 rounded-full font-bold text-xs sm:text-sm shadow-md hover:scale-105 transition-all">
                        <svg class="w-4 h-4 text-[#C1272D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>Call (718) 538-8183</span>
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
                    <strong class="block text-slate-900 font-bold text-xs sm:text-sm">$0 Delivery Fee</strong>
                    <span class="text-slate-600 text-[11px]">No order minimum for ℞</span>
                </div>
            </div>
            <div class="flex items-center gap-3.5 bg-[#071E3C]/90 backdrop-blur-md rounded-2xl p-4 shadow-2xl border border-white/10 text-white">
                <div class="w-10 h-10 rounded-xl bg-amber-500/20 text-amber-300 flex items-center justify-center font-bold text-base shrink-0">
                    <svg class="w-5 h-5 text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                </div>
                <div>
                    <strong class="block text-white font-bold text-xs sm:text-sm">Dedicated Courier</strong>
                    <span class="text-slate-300 text-[11px]">Safe, discreet, Bronx-based</span>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Floating Overlapping Strip: 3 Delivery Highlights (Goldberger Format) -->
<div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 -mt-12 sm:-mt-20 lg:-mt-32 relative z-30 mb-12 sm:mb-16">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
        
        <!-- Box 1 -->
        <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300">
            <div class="space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold text-xl shadow-sm">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">100% Free Service</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Zero delivery fees, zero hidden gas surcharges, and zero tips expected. We believe access to vital medication should never come with an extra delivery bill.
                </p>
            </div>
            <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs font-bold text-emerald-700">$0 Delivery Always</span>
                <div class="w-12 h-1 bg-emerald-500 rounded-full"></div>
            </div>
        </div>

        <!-- Box 2 -->
        <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300">
            <div class="space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 text-[#0B2F5C] flex items-center justify-center font-bold text-xl shadow-sm">
                    <svg class="w-6 h-6 text-[#0B2F5C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">Temperature-Controlled</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Insulin, eye drops, antibiotics, and sensitive pharmaceuticals are transported in certified thermal coolers to preserve medication potency and safety.
                </p>
            </div>
            <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs font-bold text-[#0B2F5C]">Clinical Integrity</span>
                <div class="w-12 h-1 bg-[#0B2F5C] rounded-full"></div>
            </div>
        </div>

        <!-- Box 3 -->
        <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300">
            <div class="space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold text-xl shadow-sm">
                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">Add Health &amp; OTC Items</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Need baby formula, pain relievers, vitamins, bandages, or cold medicine? Add them to your prescription delivery order with no extra charge.
                </p>
            </div>
            <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs font-bold text-amber-700">OTC Cards Accepted</span>
                <div class="w-12 h-1 bg-amber-500 rounded-full"></div>
            </div>
        </div>

    </div>
</div>

<!-- Neighborhood Service Zone -->
<section class="py-12 sm:py-16 lg:py-24 bg-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-center">
            
            <!-- Left: Neighborhood List -->
            <div class="lg:col-span-6 space-y-6">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#C1272D]">Service Area</span>
                <h2 class="text-2xl sm:text-4xl font-bold font-display text-[#0B2F5C] leading-tight">
                    Delivering Daily Across Highbridge and South Bronx
                </h2>
                <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                    Our dedicated courier drivers know every avenue, apartment building, and residential complex in the neighborhood. We deliver directly to your apartment door:
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                    <div class="p-3.5 bg-[#F8FAFC] rounded-2xl border border-slate-100 flex items-center gap-3">
                        <div class="w-2.5 h-2.5 rounded-full bg-[#C1272D]"></div>
                        <span class="text-xs font-bold text-slate-800">Highbridge (10452)</span>
                    </div>
                    <div class="p-3.5 bg-[#F8FAFC] rounded-2xl border border-slate-100 flex items-center gap-3">
                        <div class="w-2.5 h-2.5 rounded-full bg-[#C1272D]"></div>
                        <span class="text-xs font-bold text-slate-800">Grand Concourse (10451)</span>
                    </div>
                    <div class="p-3.5 bg-[#F8FAFC] rounded-2xl border border-slate-100 flex items-center gap-3">
                        <div class="w-2.5 h-2.5 rounded-full bg-[#C1272D]"></div>
                        <span class="text-xs font-bold text-slate-800">Morris Heights (10453)</span>
                    </div>
                    <div class="p-3.5 bg-[#F8FAFC] rounded-2xl border border-slate-100 flex items-center gap-3">
                        <div class="w-2.5 h-2.5 rounded-full bg-[#C1272D]"></div>
                        <span class="text-xs font-bold text-slate-800">Yankee Stadium Area</span>
                    </div>
                    <div class="p-3.5 bg-[#F8FAFC] rounded-2xl border border-slate-100 flex items-center gap-3">
                        <div class="w-2.5 h-2.5 rounded-full bg-[#C1272D]"></div>
                        <span class="text-xs font-bold text-slate-800">Concourse Village</span>
                    </div>
                    <div class="p-3.5 bg-[#F8FAFC] rounded-2xl border border-slate-100 flex items-center gap-3">
                        <div class="w-2.5 h-2.5 rounded-full bg-[#C1272D]"></div>
                        <span class="text-xs font-bold text-slate-800">Mount Eden &amp; South Bronx</span>
                    </div>
                </div>

                <div class="pt-3">
                    <p class="text-xs text-slate-500">
                        Live just outside these zip codes? Call us at <a href="tel:7185388183" class="text-[#0B2F5C] font-bold underline">(718) 538-8183</a>—we regularly accommodate nearby patients throughout the Bronx and Upper Manhattan.
                    </p>
                </div>
            </div>

            <!-- Right: Delivery Schedule Card & Action -->
            <div class="lg:col-span-6 space-y-6">
                <div class="bg-gradient-to-b from-[#0B2F5C] to-[#071E3C] text-white rounded-3xl p-6 sm:p-10 space-y-6 shadow-2xl border border-white/10">
                    <div class="space-y-2">
                        <span class="inline-block bg-[#C1272D] text-white text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                            Reliable Schedule
                        </span>
                        <h3 class="text-xl sm:text-3xl font-bold font-display text-white">
                            Delivery Days &amp; Order Times
                        </h3>
                    </div>

                    <div class="space-y-3 text-xs sm:text-sm">
                        <div class="flex justify-between items-center py-2 border-b border-white/10">
                            <span class="text-slate-300">Monday &ndash; Friday</span>
                            <span class="font-bold text-white">Morning &amp; Afternoon Routes</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-white/10">
                            <span class="text-slate-300">Saturday</span>
                            <span class="font-bold text-white">Midday Delivery Route</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-slate-300">Order Cutoff for Same-Day</span>
                            <span class="font-bold text-emerald-400">Call by 2:00 PM</span>
                        </div>
                    </div>

                    <div class="pt-2 flex flex-col sm:flex-row gap-3">
                        <a href="{{ route('refill') }}" class="rounded-full bg-white text-[#0B2F5C] font-bold text-xs sm:text-sm px-6 h-12 inline-flex items-center justify-center gap-2 hover:bg-[#E8F0FE] transition shadow">
                            <span>Order Refill for Delivery</span>
                            <svg class="w-3.5 h-3.5 text-[#C1272D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                        <a href="tel:7185388183" class="rounded-full border border-white text-white font-bold text-xs sm:text-sm px-6 h-12 inline-flex items-center justify-center gap-2 hover:bg-white hover:text-[#0B2F5C] transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <span>(718) 538-8183</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Bottom Full Navy CTA Banner (Goldberger Style) -->
<div class="flex w-full bg-[#0B2F5C] py-12 sm:py-16 lg:py-24 text-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 text-center space-y-5 sm:space-y-6">
        <h3 class="text-[#E8F0FE] font-bold text-xs sm:text-sm tracking-wider uppercase">Highbridge Neighborhood Pharmacy</h3>
        <h2 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-display text-white">
            Have Your Prescriptions Delivered Free Today
        </h2>
        <p class="max-w-2xl mx-auto text-slate-200 text-xs sm:text-base leading-relaxed">
            Call (718) 538-8183 or submit your prescription transfer/refill online to schedule your free home delivery.
        </p>
        <div class="pt-2 flex flex-col sm:flex-row justify-center items-stretch sm:items-center gap-3 sm:gap-4">
            <a href="{{ route('refill') }}" class="rounded-full bg-white text-[#0B2F5C] font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm hover:bg-[#E8F0FE] transition shadow hover:scale-105">
                <span>Refill Prescriptions for Delivery</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="{{ route('transfer') }}" class="rounded-full border border-white text-white font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm hover:bg-white hover:text-[#0B2F5C] transition shadow">
                <span>Transfer ℞ to R &amp; S Pioneer</span>
            </a>
        </div>
    </div>
</div>
@endsection
