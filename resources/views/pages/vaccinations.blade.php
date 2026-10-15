@extends('layouts.app')

@section('title', 'Walk-In Vaccinations - No Appointment Needed | R & S Pioneer Pharmacy')
@section('meta_description', 'Walk-in flu shots, COVID-19 boosters, Shingrix, RSV, and pneumonia vaccines at R & S Pioneer Pharmacy in South Bronx. No appointment needed. Free $0 copay with most insurance.')

@section('content')
<!-- Hero Section (Goldberger Elevated Card Layout with Photo Background) -->
<div class="relative flex min-h-[auto] sm:min-h-[78vh] lg:min-h-[88vh] w-full bg-cover bg-center bg-no-repeat text-white overflow-hidden" 
     style="background-image: linear-gradient(to right, rgba(7, 30, 60, 0.92) 0%, rgba(7, 30, 60, 0.72) 55%, rgba(7, 30, 60, 0.35) 100%), url('{{ asset('images/vaccine-care.jpg') }}');">
    
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 py-8 sm:py-14 lg:py-20 mt-auto w-full flex items-end justify-between relative z-10 !pb-0">
        
        <!-- Bottom Elevated Navy Glass Card -->
        <section class="w-full lg:max-w-3xl rounded-t-3xl sm:rounded-t-[2.5rem] bg-gradient-to-b from-[#0B2F5C]/95 via-[#071E3C]/95 to-[#071E3C]/98 p-6 sm:p-10 lg:p-14 border-t border-l border-r border-white/20 shadow-[0_25px_60px_-15px_rgba(0,0,0,0.6)] backdrop-blur-xl relative z-10 pb-14 sm:pb-28 lg:pb-40">
            <div class="flex flex-col gap-4 sm:gap-6">
                
                <!-- Pill Badge -->
                <div class="inline-flex items-center gap-2 bg-[#C1272D] px-3.5 py-1.5 rounded-full text-[11px] sm:text-xs font-bold uppercase tracking-wider text-white shadow-md w-fit">
                    <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
                    <span>Walk-In Immunization Center &bull; Highbridge Bronx</span>
                </div>

                <!-- 2-Tone Headline -->
                <h1 class="font-display leading-[1.15] tracking-tight text-white">
                    <span class="block text-base sm:text-xl lg:text-2xl font-normal text-slate-200">Walk-In Vaccination Services</span>
                    <span class="block text-2xl sm:text-4xl lg:text-5xl font-extrabold text-white mt-1">
                        No Appointment Ever Needed
                    </span>
                </h1>

                <!-- Subtitle with Official Motto -->
                <p class="text-slate-200 text-xs sm:text-sm sm:leading-relaxed font-sans max-w-2xl">
                    Protect yourself and your loved ones quickly and comfortably. Stop by anytime between 10:00 AM and 6:00 PM on weekdays for fast, gentle vaccinations administered by licensed Bronx clinical pharmacists: <strong class="text-white font-semibold italic">"We're the pharmacy that cares."</strong>
                </p>

                <!-- Dual Action Buttons -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-1">
                    <a href="tel:7185388183" class="inline-flex items-center justify-center gap-2 bg-[#C1272D] hover:bg-[#a51d22] text-white px-6 py-3 rounded-full font-bold text-xs sm:text-sm shadow-xl hover:scale-105 transition-all">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>Call: (718) 538-8183</span>
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-100 text-[#0B2F5C] px-6 py-3 rounded-full font-bold text-xs sm:text-sm shadow-md hover:scale-105 transition-all">
                        <span>Store Hours &amp; Location</span>
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
                    <strong class="block text-slate-900 font-bold text-xs sm:text-sm">$0 Copay With Insurance</strong>
                    <span class="text-slate-600 text-[11px]">Medicaid, Medicare &amp; Commercial</span>
                </div>
            </div>
            <div class="flex items-center gap-3.5 bg-[#071E3C]/90 backdrop-blur-md rounded-2xl p-4 shadow-2xl border border-white/10 text-white">
                <div class="w-10 h-10 rounded-xl bg-blue-500/20 text-blue-300 flex items-center justify-center font-bold text-base shrink-0">
                    <svg class="w-5 h-5 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div>
                    <strong class="block text-white font-bold text-xs sm:text-sm">Mon–Fri 10am–6pm</strong>
                    <span class="text-slate-300 text-[11px]">Walk-Ins Always Welcome</span>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Floating Overlapping Strip: 3 Quick Vaccine Proof Boxes (Goldberger Layout) -->
<div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 -mt-8 sm:-mt-16 lg:-mt-28 relative z-30 mb-12 sm:mb-16">
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
                    Pharmacist Kunal reviews your health history, checks for eligible copay coverage ($0 with most plans), and answers any questions in English or Spanish.
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
            <a href="{{ route('contact') }}" class="rounded-full border border-white text-white font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm hover:bg-white hover:text-[#0B2F5C] transition shadow">
                <span>Directions &amp; Hours</span>
            </a>
        </div>
    </div>
</div>
@endsection
