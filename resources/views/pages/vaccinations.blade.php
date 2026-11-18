@extends('layouts.app')

@section('title', 'Walk-In Vaccinations - No Appointment Needed | R & S Pioneer Pharmacy')
@section('meta_description', 'Walk-in flu shots, COVID-19 boosters, Shingrix, RSV, and pneumonia vaccines at R & S Pioneer Pharmacy in South Bronx. No appointment needed. Free $0 copay with most insurance.')

@section('content')
<!-- BANNER 2 — WALK-IN VACCINES (Hero Section) -->
<div class="hero-desktop-bg relative flex flex-col lg:flex-row lg:min-h-[700px] w-full bg-gradient-to-b from-[#071E3C] via-[#0B2F5C] to-[#07254E] text-white overflow-hidden" 
     style="--hero-bg: linear-gradient(to right, rgba(11, 47, 92, 0.78) 0%, rgba(11, 47, 92, 0.45) 50%, rgba(7, 30, 60, 0.15) 100%), url('{{ asset('images/vaccinations-hero.jpg') }}'); --hero-bg-pos: center right;">

    <!-- Mobile & Tablet Unobstructed Hero Banner Visual (< lg) -->
    <div class="lg:hidden relative w-full aspect-[16/10] sm:aspect-[2/1] md:aspect-[2.35/1] bg-[#00175D] overflow-hidden shrink-0">
        <img src="{{ asset('images/vaccinations-hero.jpg') }}"
             alt="Walk-In Vaccinations at R & S Pioneer Pharmacy"
             class="w-full h-full object-cover object-right"
             loading="eager"
             fetchpriority="high">
        <div class="pointer-events-none absolute inset-x-0 bottom-0 h-8 sm:h-10 bg-gradient-to-t from-[#071E3C] via-[#071E3C]/30 to-transparent"></div>
    </div>
    
    <div class="max-w-screen-xl mx-auto px-0 lg:px-10 pt-0 lg:pt-10 lg:mt-auto w-full flex flex-col lg:flex-row items-end justify-between gap-6 xl:gap-10 relative z-10 !pb-0">
        
        <!-- BANNER 2 — WALK-IN VACCINES Glass Card -->
        <section class="w-full lg:max-w-xl xl:max-w-2xl px-4 sm:px-6 md:px-10 pt-4 sm:pt-6 pb-10 sm:pb-14 lg:rounded-t-[2.5rem] lg:bg-gradient-to-b lg:from-[#0B2F5C]/40 lg:via-[#0D3B74]/30 lg:to-[#07254E]/40 lg:p-10 lg:border-t lg:border-l lg:border-r lg:border-white/25 lg:shadow-2xl relative z-10 lg:pb-16 lg:backdrop-blur-md">
            <div class="flex flex-col gap-3.5 sm:gap-4.5">
                
                <!-- Pharmacy Name, Anniversary Badge & Section Heading Row -->
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

                    <!-- Section Heading: WALK-IN VACCINES -->
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-emerald-500/25 border border-emerald-400/40 text-emerald-300 text-[11px] sm:text-xs font-black uppercase tracking-wider">
                        <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                        WALK-IN VACCINES
                    </span>
                </div>

                <!-- Main Headline & Highlighted Text -->
                <div>
                    <h1 class="text-3xl sm:text-5xl lg:text-[48px] font-extrabold font-display leading-[1.12] tracking-tight text-white break-words drop-shadow-[0_2px_8px_rgba(0,0,0,0.85)]">
                        Flu shots, COVID boosters <br class="hidden sm:inline">and more.
                    </h1>

                    <!-- Highlighted Text: No appointment needed. -->
                    <div class="mt-2.5 inline-flex items-center gap-2 bg-amber-400/20 border border-amber-300/40 px-3.5 py-1.5 rounded-xl text-amber-200 text-xs sm:text-sm font-bold shadow-sm">
                        <svg class="w-4 h-4 text-amber-300 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                        <span>No appointment needed.</span>
                    </div>
                </div>

                <!-- Additional Information Strip: $0 copay on most plans | Mon–Fri | 10am–6pm -->
                <div class="flex flex-wrap items-center gap-2 sm:gap-4 text-xs sm:text-sm text-white/95 font-semibold py-0.5">
                    <div class="flex items-center gap-1.5 bg-white/10 px-3 py-1.5 rounded-lg border border-white/15">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 shrink-0"></span>
                        <span>$0 copay on most plans</span>
                    </div>
                    <div class="flex items-center gap-1.5 bg-white/10 px-3 py-1.5 rounded-lg border border-white/15">
                        <svg class="w-4 h-4 text-slate-300 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span>Mon&ndash;Fri | 10am&ndash;6pm</span>
                    </div>
                </div>

                <!-- Community Highlight, Location Statement & Address Card -->
                <div class="rounded-2xl bg-[#071E3C]/60 backdrop-blur-md border border-white/20 p-3.5 sm:p-4 text-white shadow-lg space-y-2">
                    <!-- Community Highlight: Your Boogie Down Bronx pharmacy for 20 years. -->
                    <div class="flex items-center gap-2 text-xs sm:text-sm font-bold text-amber-300">
                        <svg class="w-4 h-4 shrink-0 text-[#C1272D] fill-current" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                        <span class="tracking-wide">Your Boogie Down Bronx pharmacy for 20 years.</span>
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

                <!-- CTA Button & Phone Number: WALK IN TODAY | (718) 538-8183 -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-1">
                    <a href="tel:7185388183" class="inline-flex items-center justify-center gap-2 bg-[#C1272D] hover:bg-[#a51d22] text-white px-7 py-3.5 rounded-full font-bold text-sm shadow-xl hover:shadow-2xl hover:scale-105 transition-all cursor-pointer">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        <span class="tracking-wide uppercase">WALK IN TODAY</span>
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

<!-- Floating Overlapping Strip: 3 Quick Vaccine Proof Boxes (Goldberger Layout) -->
<div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 -mt-4 sm:-mt-6 lg:-mt-8 relative z-30 mb-12 sm:mb-16">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
        
        <!-- Box 1: Walk-In Hours -->
        <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300">
            <div class="space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 text-[#0B2F5C] flex items-center justify-center font-bold text-xl shadow-sm">
                    <svg class="w-6 h-6 text-[#0B2F5C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">Walk-In Hours</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Stop by anytime between <strong>10:00 AM and 6:00 PM</strong> on weekdays. Zero waiting in clinic lines, no advance appointment required.
                </p>
            </div>
            <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs font-bold text-[#0B2F5C]">Mon &ndash; Fri 10am&ndash;6pm</span>
                <div class="w-12 h-1 bg-[#0B2F5C] rounded-full"></div>
            </div>
        </div>

        <!-- Box 2: $0 Copay -->
        <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300">
            <div class="space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold text-xl shadow-sm">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">$0 Copay with Insurance</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Flu, COVID-19, and recommended vaccines are fully covered with <strong>$0 out-of-pocket cost</strong> under most New York Medicaid, Medicare, and private plans.
                </p>
            </div>
            <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs font-bold text-emerald-700">100% Insured Coverage</span>
                <div class="w-12 h-1 bg-emerald-500 rounded-full"></div>
            </div>
        </div>

        <!-- Box 3: Certified Care -->
        <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300">
            <div class="space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-red-50 text-[#C1272D] flex items-center justify-center font-bold text-xl shadow-sm">
                    <svg class="w-6 h-6 text-[#C1272D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">Certified Immunizers</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Administered by licensed NY State registered pharmacists in a private, sanitized consultation area with gentle injection technique and patient monitoring.
                </p>
            </div>
            <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs font-bold text-[#C1272D]">Licensed Pharmacists</span>
                <div class="w-12 h-1 bg-[#C1272D] rounded-full"></div>
            </div>
        </div>

    </div>
</div>

<!-- Vaccine Catalog: 6 Cards in Equal-Height Grid -->
<section class="py-12 sm:py-16 lg:py-24 bg-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 space-y-10 sm:space-y-14">
        
        <div class="text-center max-w-3xl mx-auto space-y-3">
            <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#C1272D]">Available Every Day</span>
            <h2 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-display text-[#0B2F5C]">
                Vaccines Currently Available for Walk-Ins
            </h2>
            <p class="text-slate-600 text-xs sm:text-base leading-relaxed">
                All vaccines administered by licensed clinical pharmacists in a sanitized, private consultation area.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            
            <!-- 1. Seasonal Flu Shot -->
            <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-[#0B2F5C] text-white flex items-center justify-center font-bold text-sm shadow-sm">
                            Flu
                        </div>
                        <span class="text-[11px] font-bold bg-blue-100 text-[#0B2F5C] px-3 py-1 rounded-full uppercase tracking-wider">Walk-In</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#0B2F5C] font-display">Seasonal Flu Shot</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Quadrivalent seasonal influenza vaccine formulated annually to protect against the 4 most prevalent influenza strains. Recommended annually for everyone aged 6 months and older.
                    </p>
                    <div class="pt-3 border-t border-slate-100 text-xs text-slate-500 space-y-1.5">
                        <div><strong>Recommended For:</strong> Adults, children, &amp; teens</div>
                        <div><strong>Frequency:</strong> Annual (Fall/Winter season)</div>
                        <div><strong>Copay:</strong> $0 with most insurances &amp; Medicaid</div>
                    </div>
                </div>
                <div>
                    <div class="mt-5 w-full h-1 bg-[#0B2F5C] rounded-full mb-3"></div>
                    <div class="flex justify-between items-center text-xs">
                        <span class="text-emerald-700 font-bold flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-600 animate-pulse"></span> In Stock Now
                        </span>
                        <a href="tel:7185388183" class="text-[#C1272D] font-bold hover:underline">Walk In Today &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- 2. High-Dose Senior Flu -->
            <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-amber-600 text-white flex items-center justify-center font-bold text-sm shadow-sm">
                            65+
                        </div>
                        <span class="text-[11px] font-bold bg-amber-100 text-amber-900 px-3 py-1 rounded-full uppercase tracking-wider">Seniors</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#0B2F5C] font-display">High-Dose Senior Flu</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Contains 4 times the antigen of standard flu shots to give older immune systems robust defense against influenza-related hospitalizations and serious complications.
                    </p>
                    <div class="pt-3 border-t border-slate-100 text-xs text-slate-500 space-y-1.5">
                        <div><strong>Recommended For:</strong> Adults aged 65 and older</div>
                        <div><strong>Protection:</strong> Enhanced immune antibody response</div>
                        <div><strong>Copay:</strong> 100% Covered by Medicare Part B</div>
                    </div>
                </div>
                <div>
                    <div class="mt-5 w-full h-1 bg-amber-500 rounded-full mb-3"></div>
                    <div class="flex justify-between items-center text-xs">
                        <span class="text-emerald-700 font-bold flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-600 animate-pulse"></span> In Stock Now
                        </span>
                        <a href="tel:7185388183" class="text-[#C1272D] font-bold hover:underline">Walk In Today &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- 3. Updated COVID-19 Booster -->
            <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-[#C1272D] text-white flex items-center justify-center font-bold text-xs shadow-sm">
                            COVID
                        </div>
                        <span class="text-[11px] font-bold bg-red-100 text-[#9B1E23] px-3 py-1 rounded-full uppercase tracking-wider">Updated</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#0B2F5C] font-display">Updated COVID-19</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        The latest CDC-approved updated formula designed to safeguard against circulating variant strains. Reduces severe illness, hospitalization, and long COVID symptoms.
                    </p>
                    <div class="pt-3 border-t border-slate-100 text-xs text-slate-500 space-y-1.5">
                        <div><strong>Eligibility:</strong> Adults &amp; eligible adolescents</div>
                        <div><strong>Safety:</strong> Monitored administration</div>
                        <div><strong>Copay:</strong> Covered by Medicaid, Medicare &amp; commercial</div>
                    </div>
                </div>
                <div>
                    <div class="mt-5 w-full h-1 bg-[#C1272D] rounded-full mb-3"></div>
                    <div class="flex justify-between items-center text-xs">
                        <span class="text-emerald-700 font-bold flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-600 animate-pulse"></span> In Stock Now
                        </span>
                        <a href="tel:7185388183" class="text-[#C1272D] font-bold hover:underline">Walk In Today &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- 4. Shingrix (Shingles) -->
            <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-purple-700 text-white flex items-center justify-center font-bold text-xs shadow-sm">
                            Shingrix
                        </div>
                        <span class="text-[11px] font-bold bg-purple-100 text-purple-900 px-3 py-1 rounded-full uppercase tracking-wider">2-Dose</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#0B2F5C] font-display">Shingrix (Shingles)</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Over 90% effective at preventing shingles and postherpetic nerve pain. A 2-dose series administered 2 to 6 months apart for lasting clinical defense.
                    </p>
                    <div class="pt-3 border-t border-slate-100 text-xs text-slate-500 space-y-1.5">
                        <div><strong>Recommended For:</strong> Adults aged 50 and older</div>
                        <div><strong>Schedule:</strong> 2 doses, 2–6 months apart</div>
                        <div><strong>Copay:</strong> $0 with Medicare Part D &amp; most plans</div>
                    </div>
                </div>
                <div>
                    <div class="mt-5 w-full h-1 bg-purple-600 rounded-full mb-3"></div>
                    <div class="flex justify-between items-center text-xs">
                        <span class="text-emerald-700 font-bold flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-600 animate-pulse"></span> In Stock Now
                        </span>
                        <a href="tel:7185388183" class="text-[#C1272D] font-bold hover:underline">Walk In Today &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- 5. RSV Vaccine -->
            <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-teal-700 text-white flex items-center justify-center font-bold text-xs shadow-sm">
                            RSV
                        </div>
                        <span class="text-[11px] font-bold bg-teal-100 text-teal-900 px-3 py-1 rounded-full uppercase tracking-wider">Respiratory</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#0B2F5C] font-display">RSV Vaccine</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Defends vulnerable lungs against respiratory syncytial virus, a leading cause of severe bronchitis and hospitalization in mature adults and individuals with asthma/COPD.
                    </p>
                    <div class="pt-3 border-t border-slate-100 text-xs text-slate-500 space-y-1.5">
                        <div><strong>Recommended For:</strong> Adults aged 60+ and pregnant women</div>
                        <div><strong>Protection:</strong> Lower respiratory tract infection</div>
                        <div><strong>Copay:</strong> Covered by Medicare Part D &amp; Medicaid</div>
                    </div>
                </div>
                <div>
                    <div class="mt-5 w-full h-1 bg-teal-600 rounded-full mb-3"></div>
                    <div class="flex justify-between items-center text-xs">
                        <span class="text-emerald-700 font-bold flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-600 animate-pulse"></span> In Stock Now
                        </span>
                        <a href="tel:7185388183" class="text-[#C1272D] font-bold hover:underline">Walk In Today &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- 6. Pneumonia Vaccine -->
            <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-sky-700 text-white flex items-center justify-center font-bold text-xs shadow-sm">
                            Pneumo
                        </div>
                        <span class="text-[11px] font-bold bg-sky-100 text-sky-900 px-3 py-1 rounded-full uppercase tracking-wider">Prevnar 20</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#0B2F5C] font-display">Pneumococcal (Pneumonia)</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Safeguards lungs from pneumococcal pneumonia, meningitis, and bloodstream infections. We verify your prior vaccination history to provide the exact recommended booster.
                    </p>
                    <div class="pt-3 border-t border-slate-100 text-xs text-slate-500 space-y-1.5">
                        <div><strong>Recommended For:</strong> Adults 65+ and adults with chronic conditions</div>
                        <div><strong>Formulation:</strong> Prevnar 20 / Pneumovax 23</div>
                        <div><strong>Copay:</strong> 100% Covered by Medicare Part B</div>
                    </div>
                </div>
                <div>
                    <div class="mt-5 w-full h-1 bg-sky-600 rounded-full mb-3"></div>
                    <div class="flex justify-between items-center text-xs">
                        <span class="text-emerald-700 font-bold flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-600 animate-pulse"></span> In Stock Now
                        </span>
                        <a href="tel:7185388183" class="text-[#C1272D] font-bold hover:underline">Walk In Today &rarr;</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Vaccination Process: 3 Simple Steps -->
<section class="py-12 sm:py-16 lg:py-20 bg-[#F8FAFC] border-t border-slate-200/60">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 space-y-10 sm:space-y-12">
        
        <div class="text-center max-w-2xl mx-auto space-y-3">
            <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#C1272D]">Fast &amp; Painless</span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold font-display text-[#0B2F5C]">
                How Walk-In Vaccinations Work
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
            
            <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-sm space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-[#0B2F5C] text-white flex items-center justify-center font-extrabold text-lg shadow">
                    1
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">Walk Right In</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Come to 1018 Ogden Ave anytime Monday through Friday from 10:00 AM to 6:00 PM with your photo ID and insurance card. No appointment or referral needed.
                </p>
            </div>

            <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-sm space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-[#C1272D] text-white flex items-center justify-center font-extrabold text-lg shadow">
                    2
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">2-Minute Screening</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Pharmacist Kunal, Pharm.D., reviews your health history, checks for eligible copay coverage ($0 with most plans), and answers any questions in English or Spanish.
                </p>
            </div>

            <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-sm space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-emerald-600 text-white flex items-center justify-center font-extrabold text-lg shadow">
                    3
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">Gentle Administration</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Receive your shot in our private, sanitized room. We submit your records electronically to NYSIIS and give you a printed confirmation card.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Bottom Full Navy CTA Banner (Goldberger Style) -->
<div class="flex w-full bg-[#0B2F5C] py-12 sm:py-16 lg:py-24 text-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 text-center space-y-5 sm:space-y-6">
        <h3 class="text-[#E8F0FE] font-bold text-xs sm:text-sm tracking-wider uppercase">Protect Yourself &amp; Your Family Today</h3>
        <h2 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-display text-white">
            Walk In Today for Your Immunization
        </h2>
        <p class="max-w-2xl mx-auto text-slate-200 text-xs sm:text-base leading-relaxed">
            Visit 1018 Ogden Ave between 10am and 6pm on weekdays or call (718) 538-8183 to check vaccine availability.
        </p>
        <div class="pt-2 flex flex-col sm:flex-row justify-center items-stretch sm:items-center gap-3 sm:gap-4">
            <a href="tel:7185388183" class="rounded-full bg-white text-[#0B2F5C] font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm hover:bg-[#E8F0FE] transition shadow hover:scale-105">
                <span>Call (718) 538-8183</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="{{ route('contact') }}" class="rounded-full bg-[#C1272D] hover:bg-[#a51d22] text-white font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm shadow-lg hover:shadow-xl hover:scale-105 transition-all">
                <span>Directions &amp; Hours</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>
</div>
@endsection
