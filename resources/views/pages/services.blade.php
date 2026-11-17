@extends('layouts.app')

@section('title', 'Our Services - Comprehensive Healthcare Solutions | R & S Pioneer Pharmacy')
@section('meta_description', 'Dis-Pill blister packaging, walk-in vaccinations, DMV eye exams, passport photos, notary public, fax and copy services, and full toy department.')

@section('content')
<!-- BANNER 3 — PHARMACY CONVENIENCE & SERVICES (Hero Section) -->
<div class="relative flex min-h-[auto] sm:min-h-[640px] lg:min-h-[700px] w-full bg-cover bg-right sm:bg-center bg-no-repeat text-white overflow-hidden" 
     style="background-image: linear-gradient(to right, rgba(11, 47, 92, 0.78) 0%, rgba(11, 47, 92, 0.45) 50%, rgba(7, 30, 60, 0.15) 100%), url('{{ asset('images/services-hero.jpg') }}'); background-position: center right;">
    
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 pt-6 sm:pt-8 lg:pt-10 mt-auto w-full flex flex-col lg:flex-row items-end justify-between gap-6 xl:gap-10 relative z-10 !pb-0">
        
        <!-- BANNER 3 — PHARMACY CONVENIENCE & SERVICES Glass Card -->
        <section class="w-full lg:max-w-xl xl:max-w-2xl rounded-t-3xl sm:rounded-t-[2.5rem] bg-gradient-to-b from-[#0B2F5C]/40 via-[#0D3B74]/30 to-[#07254E]/40 p-5 sm:p-7 lg:p-10 border-t border-l border-r border-white/25 shadow-2xl relative z-10 pb-10 sm:pb-14 lg:pb-16 backdrop-blur-md">
            <div class="flex flex-col gap-3.5 sm:gap-4.5">
                
                <!-- Pharmacy Name & Anniversary Badge Row -->
                <div class="flex flex-wrap items-center gap-2 sm:gap-3">
                    <!-- Anniversary Badge: 20 YEARS | EST. 2006 -->
                    <div class="inline-flex items-center gap-2 bg-[#C1272D] px-3.5 py-1.5 rounded-full text-[11px] sm:text-xs font-bold uppercase tracking-wider text-white shadow-md">
                        <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
                        <span>20 YEARS | EST. 2006</span>
                    </div>

                    <!-- Pharmacy Name: R & S PIONEER PHARMACY -->
                    <span class="inline-flex items-center px-3.5 py-1.5 rounded-full bg-white/15 backdrop-blur-md border border-white/25 text-[11px] sm:text-xs font-black uppercase tracking-widest text-white shadow-sm">
                        R &amp; S PIONEER PHARMACY
                    </span>
                </div>

                <!-- Main Headline -->
                <h1 class="text-2xl sm:text-4xl lg:text-[42px] font-extrabold font-display leading-[1.18] tracking-tight text-white break-words drop-shadow-[0_2px_8px_rgba(0,0,0,0.85)]">
                    Refills in <span class="italic text-amber-300 font-serif">15 minutes.</span><br>
                    <span class="text-xl sm:text-3xl lg:text-[32px] font-bold text-white">Free blister packs &bull; DMV vision tests &bull; Passport photos.</span>
                </h1>

                <!-- Service Highlights (with icons) -->
                <div class="grid grid-cols-2 gap-2 sm:gap-2.5 pt-0.5">
                    <div class="flex items-center gap-2 bg-white/10 backdrop-blur-md rounded-xl px-3 py-2 border border-white/15 text-xs sm:text-sm font-semibold text-white shadow-sm">
                        <svg class="w-4 h-4 text-amber-300 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span>15-Minute Refills</span>
                    </div>
                    <div class="flex items-center gap-2 bg-white/10 backdrop-blur-md rounded-xl px-3 py-2 border border-white/15 text-xs sm:text-sm font-semibold text-white shadow-sm">
                        <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        <span>Free Dis-Pill Packs</span>
                    </div>
                    <div class="flex items-center gap-2 bg-white/10 backdrop-blur-md rounded-xl px-3 py-2 border border-white/15 text-xs sm:text-sm font-semibold text-white shadow-sm">
                        <svg class="w-4 h-4 text-blue-300 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        <span>NY DMV Vision Tests</span>
                    </div>
                    <div class="flex items-center gap-2 bg-white/10 backdrop-blur-md rounded-xl px-3 py-2 border border-white/15 text-xs sm:text-sm font-semibold text-white shadow-sm">
                        <svg class="w-4 h-4 text-purple-300 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span>Passport Photos</span>
                    </div>
                </div>

                <!-- Community Highlight, Location Statement & Address Card -->
                <div class="rounded-2xl bg-[#071E3C]/50 backdrop-blur-md border border-white/20 p-3.5 sm:p-4 text-white shadow-lg space-y-2">
                    <!-- Community Highlight -->
                    <div class="flex items-center gap-2 text-xs sm:text-sm font-bold text-amber-300">
                        <svg class="w-4 h-4 shrink-0 text-[#C1272D] fill-current" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                        <span class="tracking-wide">Serving the Boogie Down Bronx since 2006.</span>
                    </div>

                    <!-- Location Statement & Address -->
                    <div class="flex flex-col sm:flex-row sm:items-center gap-1 sm:gap-2.5 text-xs text-white/90">
                        <div class="flex items-center gap-1.5 font-medium">
                            <svg class="w-3.5 h-3.5 shrink-0 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span>In the heart of the Bronx, near Yankee Stadium.</span>
                        </div>
                        <span class="hidden sm:inline text-white/40">•</span>
                        <a href="https://maps.google.com/?q=1018+Ogden+Ave,+Bronx,+NY+10452" target="_blank" rel="noopener noreferrer" class="font-semibold text-white hover:text-amber-300 underline decoration-white/40 underline-offset-2 transition-colors flex items-center gap-1">
                            <span>1018 Ogden Ave, Highbridge / South Bronx</span>
                        </a>
                    </div>
                </div>

                <!-- CTA Button & Phone Number -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-1">
                    <a href="tel:7185388183" class="inline-flex items-center justify-center gap-2 bg-[#C1272D] hover:bg-[#a51d22] text-white px-7 py-3.5 rounded-full font-bold text-sm shadow-xl hover:shadow-2xl hover:scale-105 transition-all cursor-pointer">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span class="tracking-wide uppercase">CALL NOW</span>
                    </a>
                    <a href="tel:7185388183" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-100 text-[#0B2F5C] px-7 py-3.5 rounded-full font-bold text-sm shadow-md hover:scale-105 transition-all">
                        <svg class="w-4 h-4 text-[#C1272D] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>(718) 538-8183</span>
                    </a>
                </div>

            </div>
        </section>

    </div>
</div>

<!-- Floating Overlapping Strip: 4 Service Highlights (Goldberger Format) -->
<div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 -mt-4 sm:-mt-6 lg:-mt-8 relative z-30 mb-12 sm:mb-16">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
        
        <!-- Highlight 1: Walk-In Vaccinations -->
        <a href="{{ route('vaccinations') }}" class="h-full bg-white rounded-3xl p-5 sm:p-6 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300 group">
            <div class="space-y-3">
                <div class="w-11 h-11 rounded-2xl bg-red-50 text-[#C1272D] flex items-center justify-center font-bold text-lg shadow-sm group-hover:scale-110 transition">
                    <svg class="w-5 h-5 text-[#C1272D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <h3 class="text-base sm:text-lg font-bold text-[#0B2F5C] font-display">Walk-In Vaccines</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Flu, COVID-19, shingles &amp; RSV immunizations administered by licensed pharmacists with zero appointment needed.
                </p>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-[11px] font-bold text-[#C1272D]">No Appt Needed &rarr;</span>
                <div class="w-12 h-1 bg-[#C1272D] rounded-full"></div>
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
            
            <!-- Service 1: Licensed NY Notary Public -->
            <div id="notary" class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-purple-50 text-purple-700 flex items-center justify-center font-bold text-xl shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <span class="text-[11px] font-bold bg-purple-100 text-purple-900 px-3 py-1 rounded-full uppercase tracking-wider">Official</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#0B2F5C] font-display">Licensed Notary Public</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Official New York State commissioned Notary Public on duty. Document notarization, certified legal affidavits, powers of attorney, and medical directives.
                    </p>
                    <ul class="text-xs text-slate-600 space-y-1.5 pt-2 border-t border-slate-100">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Powers of Attorney &amp; Healthcare Proxies</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Affidavits &amp; Official Sworn Statements</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Walk-in service &bull; Bring valid government photo ID</li>
                    </ul>
                </div>
                <div>
                    <div class="mt-6 w-full h-1 bg-purple-600 rounded-full mb-3"></div>
                    <span class="text-xs font-bold text-[#0B2F5C]">NY State Commissioned on Duty</span>
                </div>
            </div>

            <!-- Service 2: Multi-Dose Adherence Packaging -->
            <div id="packaging" class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-blue-50 text-[#0B2F5C] flex items-center justify-center font-bold text-xl shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <span class="text-[11px] font-bold bg-[#E8F0FE] text-[#1A4FA0] px-3 py-1 rounded-full uppercase tracking-wider">Adherence</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#0B2F5C] font-display">Multi-Dose Packaging</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        We offer multi-dose packaging for medication adherence, including <strong>Dispill multi-dose packaging</strong> and <strong>Cold Seal Blister Card packaging</strong>. Prescriptions are sealed and organized by time of day.
                    </p>
                    <ul class="text-xs text-slate-600 space-y-1.5 pt-2 border-t border-slate-100">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Dispill &amp; Cold Seal Blister Cards</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Morning, Noon, Evening &amp; Bedtime</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Endorsed by home health aides</li>
                    </ul>
                </div>
                <div>
                    <div class="mt-6 w-full h-1 bg-[#0B2F5C] rounded-full mb-3"></div>
                    <a href="{{ route('dispill') }}" class="text-xs font-bold text-[#0B2F5C] hover:text-[#C1272D] flex items-center justify-between">
                        <span>Learn About Adherence Packaging</span>
                        <span>&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Service: Certified Birth Control Prescribing -->
            <div id="birth-control" class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-pink-50 text-pink-600 flex items-center justify-center font-bold text-xl shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        </div>
                        <span class="text-[11px] font-bold bg-pink-100 text-pink-900 px-3 py-1 rounded-full uppercase tracking-wider">Clinical Care</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#0B2F5C] font-display">Birth Control Prescribing</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Kunal Shah, Pharm.D., is a <strong>Certified Birth Control Prescribing Pharmacist in New York State</strong>. Receive direct evaluation and prescription for hormonal contraception on-site without seeing a doctor first.
                    </p>
                    <ul class="text-xs text-slate-600 space-y-1.5 pt-2 border-t border-slate-100">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> No doctor's visit or prescription needed</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Oral pills, patches, and vaginal rings</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Covered by Medicaid &amp; most insurance plans</li>
                    </ul>
                </div>
                <div>
                    <div class="mt-6 w-full h-1 bg-pink-600 rounded-full mb-3"></div>
                    <a href="tel:7185388183" class="text-xs font-bold text-[#0B2F5C] hover:text-[#C1272D] flex items-center justify-between">
                        <span>Consult Pharmacist Kunal: (718) 538-8183</span>
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
                    <span class="text-xs font-bold text-[#0B2F5C]">Walk-ins welcome &bull; Set of 2 photos</span>
                </div>
            </div>

            <!-- Service 6: Photocopies, Printing & Secure Fax -->
            <div id="copy-fax" class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-700 flex items-center justify-center font-bold text-xl shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                        </div>
                        <span class="text-[11px] font-bold bg-amber-100 text-amber-900 px-3 py-1 rounded-full uppercase tracking-wider">Fast Service</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#0B2F5C] font-display">Copies, Printing &amp; Fax</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Fast and clear black-and-white photocopies, color computer printouts, and secure domestic fax transmission directly to doctors, courts, or government agencies.
                    </p>
                    <ul class="text-xs text-slate-600 space-y-1.5 pt-2 border-t border-slate-100">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Crisp B&amp;W and color printouts</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Outgoing &amp; incoming domestic faxing</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Printed transmission verification sheets</li>
                    </ul>
                </div>
                <div>
                    <div class="mt-6 w-full h-1 bg-amber-500 rounded-full mb-3"></div>
                    <span class="text-xs font-bold text-[#0B2F5C]">Walk-in &bull; Ready while you wait</span>
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
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Ready in 10–15 minutes for pickup</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> We communicate with your doctors</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C1272D]"></span> Direct insurance verification</li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-100 mt-6">
                    <div class="flex items-center gap-2">
                        <a href="{{ route('refill') }}" class="flex-1 text-center py-2 px-3 rounded-full bg-[#0B2F5C] hover:bg-[#071E3C] text-white text-xs font-bold shadow-sm transition">Refill ℞</a>
                        <a href="{{ route('transfer') }}" class="flex-1 text-center py-2 px-3 rounded-full bg-[#C1272D] hover:bg-[#a51d22] text-white text-xs font-bold shadow-sm transition">Transfer ℞</a>
                    </div>
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
                <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#C1272D]">Medication Adherence Solutions</span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold font-display text-[#0B2F5C]">
                    Multi-Dose Packaging for Medication Adherence (Dis-Pill &amp; Cold Seal)
                </h2>
                <p class="text-slate-600 text-xs sm:text-base leading-relaxed">
                    Managing multiple prescription bottles, varying dosage schedules, and small pill organizers can lead to dangerous errors. We offer specialized multi-dose packaging for medication adherence: <strong>Dispill multi-dose packaging</strong> with detachable pods, and <strong>Cold Seal Blister Card packaging</strong> sealed securely without heat to preserve medication integrity and provide clear daily adherence tracking.
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
                        Managing your prescriptions has never been more convenient. Call our team or request a refill in seconds. We'll ensure your medication is ready for fast in-store pickup at 1018 Ogden Ave.
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
                    To transfer your prescriptions, simply fill out our online transfer form or call us with your name, birthdate, and previous pharmacy's details. We'll handle everything—contacting your former pharmacy and having your medications ready for fast pickup.
                </p>
            </details>

            <details class="group bg-white rounded-2xl border border-slate-200 p-5 sm:p-6 shadow-sm cursor-pointer">
                <summary class="flex justify-between items-center font-bold text-[#0B2F5C] text-sm sm:text-base list-none">
                    <span>What are your store hours and walk-in policy?</span>
                    <span class="text-[#C1272D] group-open:rotate-180 transition-transform duration-300">▼</span>
                </summary>
                <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-100 pt-3">
                    We are open 7 days a week: Monday to Friday 9:00 AM – 7:00 PM, Saturday 10:00 AM – 6:00 PM, and Sunday 10:00 AM – 3:00 PM. No appointment is needed for prescriptions, vaccines, notary services, or DMV vision tests—walk-ins are always welcome at 1018 Ogden Ave.
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
                    <span>How does the Dis-Pill and Cold Seal multi-dose packaging work?</span>
                    <span class="text-[#C1272D] group-open:rotate-180 transition-transform duration-300">▼</span>
                </summary>
                <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-100 pt-3">
                    We offer multi-dose packaging for medication adherence including Dispill multi-dose packaging and Cold Seal Blister Card packaging. Our team organizes your monthly medications into calendar blister cards divided into Morning, Noon, Evening, and Bedtime pods. It completely replaces messy pill bottles and prevents accidental double-dosing. Ask Pharmacist Kunal Shah, Pharm.D., to set this up for you or an elderly relative today!
                </p>
            </details>

            <details class="group bg-white rounded-2xl border border-slate-200 p-5 sm:p-6 shadow-sm cursor-pointer">
                <summary class="flex justify-between items-center font-bold text-[#0B2F5C] text-sm sm:text-base list-none">
                    <span>Can I get birth control directly from Pharmacist Kunal without seeing a doctor?</span>
                    <span class="text-[#C1272D] group-open:rotate-180 transition-transform duration-300">▼</span>
                </summary>
                <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-100 pt-3">
                    Yes! Kunal Shah, Pharm.D., is a Certified Birth Control Prescribing Pharmacist in New York State. You can walk in for a confidential clinical consultation, and Pharmacist Kunal can evaluate and prescribe hormonal contraception (pills, patches, or rings) on-site immediately—covered by Medicaid and most insurances.
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
            Stop by 1018 Ogden Ave or call (718) 538-8183. Pharmacist Kunal Shah, Pharm.D., and our team are ready to help you 7 days a week.
        </p>
        <div class="pt-2 flex flex-col sm:flex-row justify-center items-stretch sm:items-center gap-3 sm:gap-4">
            <a href="tel:7185388183" class="rounded-full bg-white text-[#0B2F5C] font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm hover:bg-[#E8F0FE] transition shadow hover:scale-105">
                <span>Call (718) 538-8183</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="{{ route('transfer') }}" class="rounded-full bg-[#C1272D] hover:bg-[#a51d22] text-white font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm shadow-lg hover:shadow-xl hover:scale-105 transition-all">
                <span>Transfer ℞ Online</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>
</div>
@endsection
