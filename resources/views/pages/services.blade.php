@extends('layouts.app')

@section('title', 'Our Services - Comprehensive Healthcare Solutions | R & S Pioneer Pharmacy')
@section('meta_description', 'Dis-Pill blister packaging, walk-in vaccinations, DMV eye exams, passport photos, notary public, 10¢ copies, free local delivery, and full toy department.')

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
                    <span>Complete Care &bull; Highbridge Bronx</span>
                </div>

                <!-- 2-Tone Headline -->
                <h1 class="font-display leading-[1.15] tracking-tight text-white">
                    <span class="block text-base sm:text-xl lg:text-2xl font-normal text-slate-200">Our Services</span>
                    <span class="block text-2xl sm:text-4xl lg:text-5xl font-extrabold text-white mt-1">
                        Comprehensive Healthcare Solutions
                    </span>
                </h1>

                <!-- Subtitle with Official Motto -->
                <p class="text-slate-200 text-xs sm:text-sm sm:leading-relaxed font-sans max-w-2xl">
                    At R &amp; S Pioneer Pharmacy, we take pride in offering services tailored to meet your healthcare needs. From Dis-Pill blister packaging and walk-in vaccines to DMV vision tests, free delivery, and our neighborhood toy department: <strong class="text-white font-semibold italic">"We're the pharmacy that cares."</strong>
                </p>

                <!-- Dual Action Buttons -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-1">
                    <a href="tel:7185388183" class="inline-flex items-center justify-center gap-2 bg-[#C1272D] hover:bg-[#a51d22] text-white px-6 py-3 rounded-full font-bold text-xs sm:text-sm shadow-xl hover:scale-105 transition-all">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>Call (718) 538-8183</span>
                    </a>
                    <a href="{{ route('transfer') }}" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-100 text-[#0B2F5C] px-6 py-3 rounded-full font-bold text-xs sm:text-sm shadow-md hover:scale-105 transition-all">
                        <span>Transfer Your ℞</span>
                        <svg class="w-3.5 h-3.5 text-[#C1272D] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

            </div>
        </section>

        <!-- Right Floating Badges (Desktop) -->
        <div class="hidden xl:flex flex-col gap-4 pb-36 z-10 max-w-xs">
            <div class="flex items-center gap-3.5 bg-white/95 backdrop-blur-md rounded-2xl p-4 shadow-2xl border border-white/30 text-slate-900">
                <div class="w-10 h-10 rounded-xl bg-[#C1272D] text-white flex items-center justify-center font-bold text-base shrink-0 shadow">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                </div>
                <div>
                    <strong class="block text-slate-900 font-bold text-xs sm:text-sm">Free Local Delivery</strong>
                    <span class="text-slate-600 text-[11px]">South Bronx &amp; Highbridge</span>
                </div>
            </div>
            <div class="flex items-center gap-3.5 bg-[#071E3C]/90 backdrop-blur-md rounded-2xl p-4 shadow-2xl border border-white/10 text-white">
                <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-base shrink-0">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </div>
                <div>
                    <strong class="block text-white font-bold text-xs sm:text-sm">DMV Eye Exams</strong>
                    <span class="text-slate-300 text-[11px]">3-Minute Walk-In Service</span>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Floating Overlapping Strip: 4 Service Highlights (Goldberger Format) -->
<div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 -mt-12 sm:-mt-20 lg:-mt-32 relative z-30 mb-12 sm:mb-16">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
        
        <!-- Highlight 1: Free Delivery -->
        <a href="{{ route('delivery') }}" class="h-full bg-white rounded-3xl p-5 sm:p-6 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300 group">
            <div class="space-y-3">
                <div class="w-11 h-11 rounded-2xl bg-amber-50 text-amber-700 flex items-center justify-center font-bold text-lg shadow-sm group-hover:scale-110 transition">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                </div>
                <h3 class="text-base sm:text-lg font-bold text-[#0B2F5C] font-display">Free Local Delivery</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Same-day and next-day prescription delivery straight to your doorstep across Highbridge and the South Bronx.
                </p>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-[11px] font-bold text-emerald-700">100% Free Service &rarr;</span>
                <div class="w-12 h-1 bg-amber-500 rounded-full"></div>
            </div>
        </a>

        <!-- Highlight 2: Dis-Pill Packaging -->
        <a href="{{ route('dispill') }}" class="h-full bg-white rounded-3xl p-5 sm:p-6 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300 group">
            <div class="space-y-3">
                <div class="w-11 h-11 rounded-2xl bg-blue-50 text-[#0B2F5C] flex items-center justify-center font-bold text-lg shadow-sm group-hover:scale-110 transition">
                    <svg class="w-5 h-5 text-[#0B2F5C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                </div>
                <h3 class="text-base sm:text-lg font-bold text-[#0B2F5C] font-display">Dis-Pill Packaging</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Color-coded calendar blister packs categorized by Morning, Noon, Evening, and Bedtime.
                </p>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-[11px] font-bold text-[#0B2F5C]">Senior Care Guide &rarr;</span>
                <div class="w-12 h-1 bg-[#0B2F5C] rounded-full"></div>
            </div>
        </a>

        <!-- Highlight 3: DMV Vision Test -->
        <a href="{{ route('dmv') }}" class="h-full bg-white rounded-3xl p-5 sm:p-6 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300 group">
            <div class="space-y-3">
                <div class="w-11 h-11 rounded-2xl bg-indigo-50 text-[#1A4FA0] flex items-center justify-center font-bold text-lg shadow-sm group-hover:scale-110 transition">
                    <svg class="w-5 h-5 text-[#1A4FA0]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </div>
                <h3 class="text-base sm:text-lg font-bold text-[#0B2F5C] font-display">DMV Eye Screening</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Skip DMV lines for license renewals. Instant official electronic test submission in under 3 minutes.
                </p>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-[11px] font-bold text-[#1A4FA0]">3-Min Walk-In &rarr;</span>
                <div class="w-12 h-1 bg-[#1A4FA0] rounded-full"></div>
            </div>
        </a>

        <!-- Highlight 4: Full Toy Store -->
        <a href="#toys" class="h-full bg-white rounded-3xl p-5 sm:p-6 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300 group">
            <div class="space-y-3">
                <div class="w-11 h-11 rounded-2xl bg-red-50 text-[#C1272D] flex items-center justify-center font-bold text-lg shadow-sm group-hover:scale-110 transition">
                    <svg class="w-5 h-5 text-[#C1272D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-base sm:text-lg font-bold text-[#0B2F5C] font-display">Toy Department</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Giant dedicated toy aisle featuring board games, plush toys, and educational activities for family gifts.
                </p>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-[11px] font-bold text-[#C1272D]">Family Store &rarr;</span>
                <div class="w-12 h-1 bg-[#C1272D] rounded-full"></div>
            </div>
        </a>

    </div>
</div>

<!-- Complete Services Grid (Goldberger Card Architecture with Diffuse Shadows & Colored Bars) -->
<section class="py-12 sm:py-16 lg:py-24 bg-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 space-y-12 sm:space-y-16">
        
        <div class="text-center max-w-3xl mx-auto space-y-3">
            <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#C1272D]">All Pharmacy Solutions</span>
            <h2 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-display text-[#0B2F5C]">
                Explore Our Comprehensive Services
            </h2>
            <p class="text-slate-600 text-xs sm:text-base leading-relaxed">
                Everything you and your family need under one welcoming roof at 1018 Ogden Avenue.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            
            <!-- Service 1: Fast Prescription Delivery -->
            <div id="delivery" class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold text-xl shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                        </div>
                        <span class="text-[11px] font-bold bg-emerald-100 text-emerald-800 px-3 py-1 rounded-full uppercase tracking-wider">Free Service</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#0B2F5C] font-display">Free Daily Delivery</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Experience the convenience of same-day or next-day delivery across Highbridge and the South Bronx. We ensure your medications are always in hand when you need them most.
                    </p>
                    <ul class="text-xs text-slate-600 space-y-1.5 pt-2 border-t border-slate-100">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Delivery Mon–Sat right to your doorstep</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Dis-Pill boxes, OTC items, and insulins</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Ideal for seniors and busy families</li>
                    </ul>
                </div>
                <div>
                    <div class="mt-6 w-full h-1 bg-amber-500 rounded-full mb-3"></div>
                    <a href="{{ route('delivery') }}" class="text-xs font-bold text-[#0B2F5C] hover:text-[#C1272D] flex items-center justify-between">
                        <span>View Delivery Areas &amp; Schedule</span>
                        <span>&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Service 2: Dis-Pill Packaging -->
            <div id="packaging" class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-blue-50 text-[#0B2F5C] flex items-center justify-center font-bold text-xl shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <span class="text-[11px] font-bold bg-[#E8F0FE] text-[#1A4FA0] px-3 py-1 rounded-full uppercase tracking-wider">Senior Care</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#0B2F5C] font-display">Dis-Pill Packaging</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Never worry about missed doses or confusing pill bottles. We organize all daily medications into sealed, cold-packed blister compartments organized by time of day.
                    </p>
                    <ul class="text-xs text-slate-600 space-y-1.5 pt-2 border-t border-slate-100">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Morning, Noon, Evening &amp; Bedtime</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Detachable individual day pods</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Endorsed by home health aides</li>
                    </ul>
                </div>
                <div>
                    <div class="mt-6 w-full h-1 bg-[#0B2F5C] rounded-full mb-3"></div>
                    <a href="{{ route('dispill') }}" class="text-xs font-bold text-[#0B2F5C] hover:text-[#C1272D] flex items-center justify-between">
                        <span>Learn About Dis-Pill Setup</span>
                        <span>&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Service 3: Walk-In Vaccinations -->
            <div id="vaccines" class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold text-xl shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        </div>
                        <span class="text-[11px] font-bold bg-emerald-100 text-emerald-800 px-3 py-1 rounded-full uppercase tracking-wider">Walk-In</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#0B2F5C] font-display">Walk-In Vaccinations</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        No appointments necessary. Stop in anytime Monday through Friday from 10:00 AM to 6:00 PM for flu shots, COVID boosters, Shingrix, RSV, and more.
                    </p>
                    <ul class="text-xs text-slate-600 space-y-1.5 pt-2 border-t border-slate-100">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> $0 copay with most insurance plans</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Certified immunizing pharmacists</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Private, sanitized consultation suite</li>
                    </ul>
                </div>
                <div>
                    <div class="mt-6 w-full h-1 bg-emerald-500 rounded-full mb-3"></div>
                    <a href="{{ route('vaccinations') }}" class="text-xs font-bold text-[#0B2F5C] hover:text-[#C1272D] flex items-center justify-between">
                        <span>View All Available Vaccines</span>
                        <span>&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Service 4: DMV Vision Exam -->
            <div id="dmv" class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-indigo-50 text-[#1A4FA0] flex items-center justify-center font-bold text-xl shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </div>
                        <span class="text-[11px] font-bold bg-indigo-100 text-indigo-900 px-3 py-1 rounded-full uppercase tracking-wider">NY Approved</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#0B2F5C] font-display">NY DMV Vision Test</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Renew your New York State driver license or permit without enduring hours at the DMV. We administer official eye screenings and upload results instantly to the NY DMV registry.
                    </p>
                    <ul class="text-xs text-slate-600 space-y-1.5 pt-2 border-t border-slate-100">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Complete in under 3 minutes</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Direct electronic system confirmation</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Available 7 days a week</li>
                    </ul>
                </div>
                <div>
                    <div class="mt-6 w-full h-1 bg-[#1A4FA0] rounded-full mb-3"></div>
                    <a href="{{ route('dmv') }}" class="text-xs font-bold text-[#0B2F5C] hover:text-[#C1272D] flex items-center justify-between">
                        <span>DMV Screening Guide &rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Service 5: Passport Photos -->
            <div id="passport" class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-sky-50 text-sky-700 flex items-center justify-center font-bold text-xl shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h3.28a1 1 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <span class="text-[11px] font-bold bg-sky-100 text-sky-900 px-3 py-1 rounded-full uppercase tracking-wider">Instant</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#0B2F5C] font-display">2x2 Passport Photos</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        High-resolution 2x2 passport and visa photos printed instantly while you wait. Strictly compliant with US State Department and foreign consulate specifications.
                    </p>
                    <ul class="text-xs text-slate-600 space-y-1.5 pt-2 border-t border-slate-100">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Ready in 5 minutes flat</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Passports, Green Cards, &amp; ID cards</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Adults, children, and infants</li>
                    </ul>
                </div>
                <div>
                    <div class="mt-6 w-full h-1 bg-sky-600 rounded-full mb-3"></div>
                    <span class="text-xs font-bold text-[#0B2F5C]">Only $10 per set of 2 photos</span>
                </div>
            </div>

            <!-- Service 6: Notary Public & Document Services -->
            <div id="notary" class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-purple-50 text-purple-700 flex items-center justify-center font-bold text-xl shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
                        </div>
                        <span class="text-[11px] font-bold bg-purple-100 text-purple-900 px-3 py-1 rounded-full uppercase tracking-wider">Official</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#0B2F5C] font-display">Notary &amp; 10¢ Copies</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Official New York State certified Notary Public on duty. Plus, affordable 10¢ black-and-white photocopies and domestic fax transmission with printed confirmation.
                    </p>
                    <ul class="text-xs text-slate-600 space-y-1.5 pt-2 border-t border-slate-100">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Affidavits, POAs, and medical forms</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> 10¢ per page photocopies</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Faxing to doctors and agencies</li>
                    </ul>
                </div>
                <div>
                    <div class="mt-6 w-full h-1 bg-purple-600 rounded-full mb-3"></div>
                    <span class="text-xs font-bold text-[#0B2F5C]">Bring valid government photo ID</span>
                </div>
            </div>

            <!-- Service 7: Full In-Store Toy Department -->
            <div id="toys" class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-red-50 text-[#C1272D] flex items-center justify-center font-bold text-xl shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <span class="text-[11px] font-bold bg-red-100 text-[#9B1E23] px-3 py-1 rounded-full uppercase tracking-wider">Family Favorite</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#0B2F5C] font-display">Dedicated Toy Aisle</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Browse our beloved in-pharmacy toy department! Packed with brand-name board games, educational puzzles, plush stuffed animals, and children's gifts.
                    </p>
                    <ul class="text-xs text-slate-600 space-y-1.5 pt-2 border-t border-slate-100">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Monopoly, Scrabble, &amp; classic games</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Birthday and holiday gift selections</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Family friendly neighborhood pricing</li>
                    </ul>
                </div>
                <div>
                    <div class="mt-6 w-full h-1 bg-[#C1272D] rounded-full mb-3"></div>
                    <span class="text-xs font-bold text-[#0B2F5C]">Open Every Day In-Store</span>
                </div>
            </div>

            <!-- Service 8: OTC Health & Wellness Card Acceptance -->
            <div id="otc" class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-700 flex items-center justify-center font-bold text-xl shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                        </div>
                        <span class="text-[11px] font-bold bg-emerald-100 text-emerald-800 px-3 py-1 rounded-full uppercase tracking-wider">Insurance Benefit</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#0B2F5C] font-display">OTC Card Acceptance</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Use your monthly insurance Over-The-Counter (OTC) card allowance to buy everyday health essentials, vitamins, pain relief, and first aid products without spending out-of-pocket cash.
                    </p>
                    <ul class="text-xs text-slate-600 space-y-1.5 pt-2 border-t border-slate-100">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Healthfirst, Fidelis, MetroPlus, UHC, Affinity</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Toothpaste, diapers, vitamins &amp; bandages</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Our staff helps you check your balance</li>
                    </ul>
                </div>
                <div>
                    <div class="mt-6 w-full h-1 bg-emerald-600 rounded-full mb-3"></div>
                    <span class="text-xs font-bold text-[#0B2F5C]">Accepted at Checkout</span>
                </div>
            </div>

            <!-- Service 9: Effortless ℞ Transfers & Refills -->
            <div id="transfers" class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-red-50 text-[#C1272D] flex items-center justify-center font-bold text-xl shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                        </div>
                        <span class="text-[11px] font-bold bg-red-100 text-[#9B1E23] px-3 py-1 rounded-full uppercase tracking-wider">Seamless</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#0B2F5C] font-display">Fast Refills &amp; Transfers</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Moving your prescriptions from CVS, Walgreens, or Rite Aid is 100% effortless. Simply provide your name and previous pharmacy—we take care of all phone calls and logistics.
                    </p>
                    <ul class="text-xs text-slate-600 space-y-1.5 pt-2 border-t border-slate-100">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Ready in 10 minutes or delivered free</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> We communicate with your doctors</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Direct insurance verification</li>
                    </ul>
                </div>
                <div class="flex items-center gap-3">
                    <div class="mt-6 w-full h-1 bg-[#C1272D] rounded-full mb-3"></div>
                    <a href="{{ route('refill') }}" class="text-xs font-bold text-[#0B2F5C] hover:text-[#C1272D] whitespace-nowrap">Refill ℞ &rarr;</a>
                </div>
            </div>
                    <div class="mt-6 w-full h-1 bg-[#C1272D] rounded-full mb-3"></div>
                    <a href="{{ route('transfer') }}" class="text-xs font-bold text-[#0B2F5C] hover:text-[#C1272D] flex items-center justify-between">
                        <span>Transfer ℞ Online</span>
                        <span>&rarr;</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Dis-Pill Spotlight Section (Image + Features Split) -->
<section class="py-12 sm:py-16 lg:py-20 bg-[#F8FAFC] border-t border-slate-200/60">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            
            <div class="lg:col-span-6 space-y-5">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#C1272D]">Specialized Medication Care</span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold font-display text-[#0B2F5C]">
                    Dis-Pill &amp; Multi-Dose Medication Blister Packaging
                </h2>
                <p class="text-slate-600 text-xs sm:text-base leading-relaxed">
                    Managing multiple prescription bottles, varying dosage schedules, and small pill organizers can lead to dangerous errors. Our advanced <strong>Dis-Pill packaging system</strong> organizes all of your daily medications into color-coded, sealed blister compartments categorized by time of day.
                </p>

                <div class="grid grid-cols-2 gap-3 pt-2">
                    <div class="p-3.5 bg-blue-50/70 rounded-2xl border border-blue-200/60">
                        <div class="font-bold text-[#1A4FA0] text-xs">Morning</div>
                        <div class="text-[11px] text-slate-600 mt-0.5">Blue Pod &bull; Wakeup dose</div>
                    </div>
                    <div class="p-3.5 bg-amber-50/70 rounded-2xl border border-amber-200/60">
                        <div class="font-bold text-amber-900 text-xs">Noon</div>
                        <div class="text-[11px] text-slate-600 mt-0.5">Yellow Pod &bull; Lunchtime</div>
                    </div>
                    <div class="p-3.5 bg-orange-50/70 rounded-2xl border border-orange-200/60">
                        <div class="font-bold text-orange-900 text-xs">Evening</div>
                        <div class="text-[11px] text-slate-600 mt-0.5">Orange Pod &bull; Dinner</div>
                    </div>
                    <div class="p-3.5 bg-purple-50/70 rounded-2xl border border-purple-200/60">
                        <div class="font-bold text-purple-900 text-xs">Bedtime</div>
                        <div class="text-[11px] text-slate-600 mt-0.5">Purple Pod &bull; Nighttime</div>
                    </div>
                </div>

                <div class="pt-3 flex flex-col sm:flex-row gap-3">
                    <a href="tel:7185388183" class="rounded-full bg-[#0B2F5C] hover:bg-[#071E3C] text-white font-semibold text-xs sm:text-sm px-7 h-12 inline-flex items-center justify-center gap-3 shadow hover:scale-105 transition">
                        <span>Setup Dis-Pill: (718) 538-8183</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-6">
                <div class="rounded-3xl overflow-hidden shadow-2xl border border-slate-200 group">
                    <img src="{{ asset('images/dispill-packaging.jpg') }}" alt="Dis-Pill Multi-Dose Medication Blister Packaging" class="w-full h-72 sm:h-96 object-cover group-hover:scale-105 transition duration-500">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Goldberger Dual Promo Cards (Refill & Transfer) -->
<section class="py-12 sm:py-16 lg:py-20 bg-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Card 1: Refill Rx Today -->
            <div class="bg-gradient-to-br from-[#0B2F5C] to-[#071E3C] text-white rounded-3xl p-6 sm:p-10 flex flex-col justify-between shadow-xl space-y-6">
                <div class="space-y-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#C1272D] bg-white px-3 py-1 rounded-full w-fit inline-block">
                        Quick Refill
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-bold font-display text-white">
                        Refill Your ℞ Today
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-200 leading-relaxed">
                        Managing your prescriptions has never been more convenient. Call our team or request a refill in seconds. We'll ensure your medication is ready for pickup or free doorstep delivery.
                    </p>
                </div>
                <div class="pt-4 border-t border-white/10 flex items-center justify-between">
                    <a href="tel:7185388183" class="rounded-full bg-white text-[#0B2F5C] font-bold text-xs sm:text-sm px-6 h-11 inline-flex items-center justify-center gap-2 hover:bg-[#E8F0FE] transition shadow">
                        <span>Call to Refill: (718) 538-8183</span>
                    </a>
                </div>
            </div>

            <!-- Card 2: Effortless Transfer -->
            <div class="bg-[#F8FAFC] rounded-3xl p-6 sm:p-10 border border-[#0B2F5C]/15 flex flex-col justify-between shadow-sm space-y-6">
                <div class="space-y-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#0B2F5C] bg-[#E8F0FE] px-3 py-1 rounded-full w-fit inline-block">
                        New Patients Welcome
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-bold font-display text-[#0B2F5C]">
                        Effortless Prescription Transfers
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Switching to R &amp; S Pioneer is simple and completely stress-free. No long lines, no complicated phone trees—just submit our transfer form and we handle all communication with your previous pharmacy.
                    </p>
                </div>
                <div class="pt-4 border-t border-slate-200 flex items-center justify-between">
                    <a href="{{ route('transfer') }}" class="rounded-full bg-[#0B2F5C] text-white font-bold text-xs sm:text-sm px-6 h-11 inline-flex items-center justify-center gap-2 hover:bg-[#071E3C] transition shadow">
                        <span>Transfer ℞ Now</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FAQ Section (Goldberger Format) -->
<section class="py-12 sm:py-16 lg:py-24 bg-[#F8FAFC] border-t border-slate-200/60">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 md:px-10 space-y-8 sm:space-y-10">
        
        <div class="text-center space-y-3">
            <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#C1272D]">Frequently Asked Questions</span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold font-display text-[#0B2F5C]">
                Your Questions Answered for A Better Pharmacy Experience
            </h2>
        </div>

        <div class="space-y-4">
            
            <details class="group bg-white rounded-2xl border border-slate-200 p-5 sm:p-6 shadow-sm cursor-pointer">
                <summary class="flex justify-between items-center font-bold text-[#0B2F5C] text-sm sm:text-base list-none">
                    <span>How do I transfer my prescriptions to R &amp; S Pioneer Pharmacy?</span>
                    <span class="text-[#C1272D] group-open:rotate-180 transition-transform duration-300">▼</span>
                </summary>
                <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-100 pt-3">
                    To transfer your prescriptions, simply fill out our online transfer form or call us with your name, birthdate, and previous pharmacy's details. We'll handle everything—contacting your former pharmacy and setting up your medications for pickup or free home delivery.
                </p>
            </details>

            <details class="group bg-white rounded-2xl border border-slate-200 p-5 sm:p-6 shadow-sm cursor-pointer">
                <summary class="flex justify-between items-center font-bold text-[#0B2F5C] text-sm sm:text-base list-none">
                    <span>Do you offer same-day or next-day delivery?</span>
                    <span class="text-[#C1272D] group-open:rotate-180 transition-transform duration-300">▼</span>
                </summary>
                <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-100 pt-3">
                    Yes! We provide 100% free prescription delivery across Highbridge, Grand Concourse, and the South Bronx. Just let us know when ordering your refills and our dedicated courier will bring it directly to your door.
                </p>
            </details>

            <details class="group bg-white rounded-2xl border border-slate-200 p-5 sm:p-6 shadow-sm cursor-pointer">
                <summary class="flex justify-between items-center font-bold text-[#0B2F5C] text-sm sm:text-base list-none">
                    <span>Which insurance plans and OTC cards do you accept?</span>
                    <span class="text-[#C1272D] group-open:rotate-180 transition-transform duration-300">▼</span>
                </summary>
                <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-100 pt-3">
                    We accept New York State Medicaid, Medicare Part D, and nearly all major commercial plans (Healthfirst, Fidelis Care, MetroPlus, EmblemHealth, Empire BCBS, UnitedHealthcare, Aetna, Cigna). We also accept health plan OTC benefit cards for health items and vitamins.
                </p>
            </details>

            <details class="group bg-white rounded-2xl border border-slate-200 p-5 sm:p-6 shadow-sm cursor-pointer">
                <summary class="flex justify-between items-center font-bold text-[#0B2F5C] text-sm sm:text-base list-none">
                    <span>Do I need an appointment for walk-in vaccinations?</span>
                    <span class="text-[#C1272D] group-open:rotate-180 transition-transform duration-300">▼</span>
                </summary>
                <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-100 pt-3">
                    No appointment is ever needed! Walk in anytime Monday through Friday from 10:00 AM to 6:00 PM. We administer seasonal flu shots, high-dose senior flu, updated COVID-19 boosters, RSV, and shingles vaccines on demand.
                </p>
            </details>

            <details class="group bg-white rounded-2xl border border-slate-200 p-5 sm:p-6 shadow-sm cursor-pointer">
                <summary class="flex justify-between items-center font-bold text-[#0B2F5C] text-sm sm:text-base list-none">
                    <span>How does the Dis-Pill multi-dose packaging work?</span>
                    <span class="text-[#C1272D] group-open:rotate-180 transition-transform duration-300">▼</span>
                </summary>
                <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-100 pt-3">
                    Our team packages your monthly medications into calendar blister cards divided into Morning, Noon, Evening, and Bedtime pods. It completely replaces messy pill bottles and prevents accidental double-dosing. Ask Pharmacist Kunal to set this up for you or an elderly relative today!
                </p>
            </details>

        </div>
    </div>
</section>

<!-- Bottom Full Navy CTA Banner (Goldberger Style) -->
<div class="flex w-full bg-[#0B2F5C] py-12 sm:py-16 lg:py-24 text-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 text-center space-y-5 sm:space-y-6">
        <h3 class="text-[#E8F0FE] font-bold text-xs sm:text-sm tracking-wider uppercase">Your Neighborhood Healthcare Destination</h3>
        <h2 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-display text-white">
            Have Questions About Any of Our Services?
        </h2>
        <p class="max-w-2xl mx-auto text-slate-200 text-xs sm:text-base leading-relaxed">
            Stop by 1018 Ogden Ave or call (718) 538-8183. Pharmacist Kunal Shah and our team are ready to help you 7 days a week.
        </p>
        <div class="pt-2 flex flex-col sm:flex-row justify-center items-stretch sm:items-center gap-3 sm:gap-4">
            <a href="tel:7185388183" class="rounded-full bg-white text-[#0B2F5C] font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm hover:bg-[#E8F0FE] transition shadow hover:scale-105">
                <span>Call (718) 538-8183</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="{{ route('transfer') }}" class="rounded-full border border-white text-white font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm hover:bg-white hover:text-[#0B2F5C] transition shadow">
                <span>Transfer ℞ Online</span>
            </a>
        </div>
    </div>
</div>
@endsection
