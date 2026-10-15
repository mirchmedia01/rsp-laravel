@extends('layouts.app')

@section('title', 'Frequently Asked Questions (FAQ) - Prescriptions, Insurance & Care | R & S Pioneer Pharmacy')
@section('meta_description', 'Get answers to common questions about prescription refills, free Bronx delivery, Dis-Pill blister packaging, insurance plans, walk-in vaccinations, and DMV vision tests.')

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
                    <span>Patient Resource Center &bull; Highbridge Bronx</span>
                </div>

                <!-- 2-Tone Headline -->
                <h1 class="font-display leading-[1.15] tracking-tight text-white">
                    <span class="block text-base sm:text-xl lg:text-2xl font-normal text-slate-200">Patient Help Center</span>
                    <span class="block text-2xl sm:text-4xl lg:text-5xl font-extrabold text-white mt-1">
                        Frequently Asked Questions
                    </span>
                </h1>

                <!-- Subtitle with Official Motto -->
                <p class="text-slate-200 text-xs sm:text-sm sm:leading-relaxed font-sans max-w-2xl">
                    Find quick answers to common questions about prescription refills, free delivery across the South Bronx, insurance plans, Dis-Pill blister packaging, and walk-in vaccines: <strong class="text-white font-semibold italic">"We're the pharmacy that cares."</strong>
                </p>

                <!-- Dual Action Buttons -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-1">
                    <a href="tel:7185388183" class="inline-flex items-center justify-center gap-2 bg-[#C1272D] hover:bg-[#a51d22] text-white px-6 py-3 rounded-full font-bold text-xs sm:text-sm shadow-xl hover:scale-105 transition-all">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>Call Pharmacist Kunal: (718) 538-8183</span>
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-100 text-[#0B2F5C] px-6 py-3 rounded-full font-bold text-xs sm:text-sm shadow-md hover:scale-105 transition-all">
                        <span>Send Us a Question</span>
                        <svg class="w-3.5 h-3.5 text-[#C1272D] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

            </div>
        </section>

        <!-- Right Floating Badges (Desktop) -->
        <div class="hidden xl:flex flex-col gap-4 pb-36 z-10 max-w-xs">
            <div class="flex items-center gap-3.5 bg-white/95 backdrop-blur-md rounded-2xl p-4 shadow-2xl border border-white/30 text-slate-900">
                <div class="w-10 h-10 rounded-xl bg-[#0B2F5C] text-white flex items-center justify-center font-bold text-base shrink-0 shadow">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div>
                    <strong class="block text-slate-900 font-bold text-xs sm:text-sm">Have a Question?</strong>
                    <span class="text-slate-600 text-[11px]">We answer 7 days a week</span>
                </div>
            </div>
            <div class="flex items-center gap-3.5 bg-[#071E3C]/90 backdrop-blur-md rounded-2xl p-4 shadow-2xl border border-white/10 text-white">
                <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-base shrink-0">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                </div>
                <div>
                    <strong class="block text-white font-bold text-xs sm:text-sm">Se Habla Español</strong>
                    <span class="text-slate-300 text-[11px]">Bilingual staff available</span>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Categorized FAQ Section -->
<section class="py-12 sm:py-16 lg:py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 md:px-10 space-y-12 sm:space-y-16">
        
        <!-- Category 1: Refills & Free Bronx Delivery -->
        <div class="space-y-4">
            <div class="flex items-center gap-3 border-b border-slate-200 pb-3">
                <div class="w-8 h-8 rounded-xl bg-blue-50 text-[#0B2F5C] flex items-center justify-center font-bold text-sm">
                    <svg class="w-4 h-4 text-[#0B2F5C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                </div>
                <h2 class="text-lg sm:text-xl font-bold font-display text-[#0B2F5C]">
                    Prescription Refills &amp; Free Local Delivery
                </h2>
            </div>

            <div class="space-y-3">
                <details class="group bg-[#F8FAFC] rounded-2xl border border-slate-200 p-5 shadow-sm cursor-pointer">
                    <summary class="flex justify-between items-center font-bold text-[#0B2F5C] text-xs sm:text-sm list-none">
                        <span>How fast can I pick up my prescription refill?</span>
                        <svg class="w-4 h-4 text-[#C1272D] group-open:rotate-180 transition-transform duration-300 shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-200/60 pt-3">
                        Most routine refills submitted online or over the phone are ready in approximately 15 minutes. If your prescription requires doctor authorization or prior insurance approval, our team coordinates directly with your prescriber.
                    </p>
                </details>

                <details class="group bg-[#F8FAFC] rounded-2xl border border-slate-200 p-5 shadow-sm cursor-pointer">
                    <summary class="flex justify-between items-center font-bold text-[#0B2F5C] text-xs sm:text-sm list-none">
                        <span>Is prescription delivery really 100% free?</span>
                        <svg class="w-4 h-4 text-[#C1272D] group-open:rotate-180 transition-transform duration-300 shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-200/60 pt-3">
                        Yes, absolutely! We never charge delivery fees, service surcharges, or minimums for prescription medications delivered to patients across Highbridge, South Bronx, and Grand Concourse.
                    </p>
                </details>

                <details class="group bg-[#F8FAFC] rounded-2xl border border-slate-200 p-5 shadow-sm cursor-pointer">
                    <summary class="flex justify-between items-center font-bold text-[#0B2F5C] text-xs sm:text-sm list-none">
                        <span>Can I add over-the-counter (OTC) vitamins or supplies to my delivery?</span>
                        <svg class="w-4 h-4 text-[#C1272D] group-open:rotate-180 transition-transform duration-300 shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-200/60 pt-3">
                        Yes! Just specify the items in your online refill note or mention them over the phone. We carry pain relievers, cold and allergy medications, children's vitamins, diabetic supplies, and personal hygiene products. We also accept health plan OTC benefit cards.
                    </p>
                </details>
            </div>
        </div>

        <!-- Category 2: Prescription Transfers & Insurance -->
        <div class="space-y-4">
            <div class="flex items-center gap-3 border-b border-slate-200 pb-3">
                <div class="w-8 h-8 rounded-xl bg-red-50 text-[#C1272D] flex items-center justify-center font-bold text-sm">
                    <svg class="w-4 h-4 text-[#C1272D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                </div>
                <h2 class="text-lg sm:text-xl font-bold font-display text-[#0B2F5C]">
                    Prescription Transfers &amp; Insurance Coverage
                </h2>
            </div>

            <div class="space-y-3">
                <details class="group bg-[#F8FAFC] rounded-2xl border border-slate-200 p-5 shadow-sm cursor-pointer">
                    <summary class="flex justify-between items-center font-bold text-[#0B2F5C] text-xs sm:text-sm list-none">
                        <span>Do I need to notify my current pharmacy when switching to R &amp; S Pioneer?</span>
                        <svg class="w-4 h-4 text-[#C1272D] group-open:rotate-180 transition-transform duration-300 shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-200/60 pt-3">
                        No! You never need to make awkward phone calls to your old pharmacy. Just give us your prescription bottle details or pharmacy name, and our licensed pharmacists handle all official transfer communication on your behalf.
                    </p>
                </details>

                <details class="group bg-[#F8FAFC] rounded-2xl border border-slate-200 p-5 shadow-sm cursor-pointer">
                    <summary class="flex justify-between items-center font-bold text-[#0B2F5C] text-xs sm:text-sm list-none">
                        <span>Which insurance plans and Medicaid programs do you accept?</span>
                        <svg class="w-4 h-4 text-[#C1272D] group-open:rotate-180 transition-transform duration-300 shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-200/60 pt-3">
                        We accept New York State Medicaid, Medicare Part D, and nearly all commercial insurance carriers including Fidelis Care, Healthfirst, MetroPlus, EmblemHealth, Empire BlueCross BlueShield, UnitedHealthcare, Aetna, Cigna, and union plans.
                    </p>
                </details>
            </div>
        </div>

        <!-- Category 3: Dis-Pill Multi-Dose Packaging -->
        <div class="space-y-4">
            <div class="flex items-center gap-3 border-b border-slate-200 pb-3">
                <div class="w-8 h-8 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center font-bold text-sm">
                    <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                </div>
                <h2 class="text-lg sm:text-xl font-bold font-display text-[#0B2F5C]">
                    Dis-Pill Multi-Dose Blister Packaging
                </h2>
            </div>

            <div class="space-y-3">
                <details class="group bg-[#F8FAFC] rounded-2xl border border-slate-200 p-5 shadow-sm cursor-pointer">
                    <summary class="flex justify-between items-center font-bold text-[#0B2F5C] text-xs sm:text-sm list-none">
                        <span>Is there an additional charge for Dis-Pill blister packaging?</span>
                        <svg class="w-4 h-4 text-[#C1272D] group-open:rotate-180 transition-transform duration-300 shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-200/60 pt-3">
                        No, Dis-Pill packaging is provided completely free of charge to all R &amp; S Pioneer Pharmacy patients. You pay only your standard insurance copays for your medications.
                    </p>
                </details>

                <details class="group bg-[#F8FAFC] rounded-2xl border border-slate-200 p-5 shadow-sm cursor-pointer">
                    <summary class="flex justify-between items-center font-bold text-[#0B2F5C] text-xs sm:text-sm list-none">
                        <span>What happens if my doctor changes my dosage mid-month?</span>
                        <svg class="w-4 h-4 text-[#C1272D] group-open:rotate-180 transition-transform duration-300 shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-200/60 pt-3">
                        Simply call Pharmacist Kunal immediately. We will update your prescription profile and package a replacement adjusted blister card so your medication regimen stays completely accurate.
                    </p>
                </details>
            </div>
        </div>

        <!-- Category 4: Walk-In Vaccinations & DMV Eye Exams -->
        <div class="space-y-4">
            <div class="flex items-center gap-3 border-b border-slate-200 pb-3">
                <div class="w-8 h-8 rounded-xl bg-emerald-50 text-emerald-700 flex items-center justify-center font-bold text-sm">
                    <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </div>
                <h2 class="text-lg sm:text-xl font-bold font-display text-[#0B2F5C]">
                    Vaccinations, DMV Vision Tests &amp; Passport Photos
                </h2>
            </div>

            <div class="space-y-3">
                <details class="group bg-[#F8FAFC] rounded-2xl border border-slate-200 p-5 shadow-sm cursor-pointer">
                    <summary class="flex justify-between items-center font-bold text-[#0B2F5C] text-xs sm:text-sm list-none">
                        <span>Do I ever need an appointment for a flu shot or COVID-19 booster?</span>
                        <svg class="w-4 h-4 text-[#C1272D] group-open:rotate-180 transition-transform duration-300 shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-200/60 pt-3">
                        No appointments are ever needed! Walk in anytime Monday through Friday from 10:00 AM to 6:00 PM. We administer seasonal flu, high-dose senior flu, updated COVID boosters, RSV, Shingrix, and pneumonia shots on demand.
                    </p>
                </details>

                <details class="group bg-[#F8FAFC] rounded-2xl border border-slate-200 p-5 shadow-sm cursor-pointer">
                    <summary class="flex justify-between items-center font-bold text-[#0B2F5C] text-xs sm:text-sm list-none">
                        <span>How does the NY DMV Vision Screening test work?</span>
                        <svg class="w-4 h-4 text-[#C1272D] group-open:rotate-180 transition-transform duration-300 shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-200/60 pt-3">
                        The test takes less than 3 minutes. Our certified staff tests your visual acuity with an eye chart and submits your passing results directly into the official NY State DMV Online Vision Registry. You can then renew your license online from home without visiting a DMV office.
                    </p>
                </details>
            </div>
        </div>

    </div>
</section>

<!-- Bottom Full Navy CTA Banner (Goldberger Style) -->
<div class="flex w-full bg-[#0B2F5C] py-12 sm:py-16 lg:py-24 text-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 text-center space-y-5 sm:space-y-6">
        <h3 class="text-[#E8F0FE] font-bold text-xs sm:text-sm tracking-wider uppercase">Still Have Questions?</h3>
        <h2 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-display text-white">
            Speak Directly with Pharmacist Kunal Shah
        </h2>
        <p class="max-w-2xl mx-auto text-slate-200 text-xs sm:text-base leading-relaxed">
            Stop by 1018 Ogden Ave or call (718) 538-8183. We are open 7 days a week and ready to assist you.
        </p>
        <div class="pt-2 flex flex-col sm:flex-row justify-center items-stretch sm:items-center gap-3 sm:gap-4">
            <a href="tel:7185388183" class="rounded-full bg-white text-[#0B2F5C] font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm hover:bg-[#E8F0FE] transition shadow hover:scale-105">
                <span>Call (718) 538-8183</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="{{ route('contact') }}" class="rounded-full border border-white text-white font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm hover:bg-white hover:text-[#0B2F5C] transition shadow">
                <span>Contact Store</span>
            </a>
        </div>
    </div>
</div>
@endsection
