@extends('layouts.app')

@section('title', 'Frequently Asked Questions (FAQ) - Prescriptions, Insurance & Care | R & S Pioneer Pharmacy')
@section('meta_description', 'Get answers to common questions about prescription refills, fast counter pickup, Dis-Pill blister packaging, insurance plans, walk-in vaccinations, and DMV vision tests.')

@section('content')
<!-- Hero Section (Custom FAQ Clipboard & Wooden Blocks Banner) -->
<div class="hero-desktop-bg relative flex flex-col lg:flex-row lg:min-h-[620px] w-full bg-gradient-to-b from-[#071E3C] via-[#0B2F5C] to-[#07254E] text-white overflow-hidden lg:items-center" 
     style="--hero-bg: linear-gradient(to right, rgba(11, 47, 92, 0.78) 0%, rgba(11, 47, 92, 0.45) 50%, rgba(7, 30, 60, 0.15) 100%), url('{{ asset('images/faq-hero.jpg') }}'); --hero-bg-pos: center right;">

    <!-- Mobile & Tablet Unobstructed Hero Banner Visual (< lg) -->
    <div class="lg:hidden relative w-full aspect-[16/10] sm:aspect-[2/1] md:aspect-[2.35/1] bg-[#00175D] overflow-hidden shrink-0">
        <img src="{{ asset('images/faq-hero.jpg') }}"
             alt="Frequently Asked Questions at R & S Pioneer Pharmacy"
             class="w-full h-full object-cover object-right"
             loading="eager"
             fetchpriority="high">
        <div class="pointer-events-none absolute inset-x-0 bottom-0 h-8 sm:h-10 bg-gradient-to-t from-[#071E3C] via-[#071E3C]/30 to-transparent"></div>
    </div>
    
    <div class="max-w-screen-xl mx-auto px-0 lg:px-10 py-0 lg:py-20 lg:my-auto w-full flex flex-col lg:flex-row items-center justify-between gap-6 xl:gap-10 relative z-10">
        
        <!-- Left: FAQ Help Center Elevated Glass Card -->
        <section class="w-full lg:max-w-xl xl:max-w-2xl px-4 sm:px-6 md:px-10 pt-5 sm:pt-7 pb-10 sm:pb-12 lg:rounded-[2.5rem] lg:bg-gradient-to-b lg:from-[#0B2F5C]/40 lg:via-[#0D3B74]/30 lg:to-[#07254E]/40 lg:p-10 lg:border lg:border-white/25 lg:shadow-2xl relative z-10 lg:backdrop-blur-md">
            <div class="flex flex-col gap-4 sm:gap-6">
                
                <!-- Badge Row -->
                <div class="flex flex-wrap items-center gap-2 sm:gap-3">
                    <div class="inline-flex items-center gap-2 bg-[#C1272D] px-3.5 py-1.5 rounded-full text-[11px] sm:text-xs font-bold uppercase tracking-wider text-white shadow-md">
                        <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
                        <span>Patient Help Center</span>
                    </div>

                    <span class="inline-flex items-center px-3.5 py-1.5 rounded-full bg-white/15 backdrop-blur-md border border-white/25 text-[11px] sm:text-xs font-black uppercase tracking-widest text-white shadow-sm">
                        R &amp; S PIONEER PHARMACY
                    </span>
                </div>

                <!-- Main Headline -->
                <h1 class="text-3xl sm:text-5xl lg:text-[52px] font-extrabold font-display leading-[1.12] tracking-tight text-white break-words drop-shadow-[0_2px_8px_rgba(0,0,0,0.85)]">
                    Frequently Asked <span class="italic text-amber-300 font-serif">Questions.</span>
                </h1>

                <!-- Subtitle with Official Motto -->
                <p class="text-white text-sm sm:text-base sm:leading-relaxed font-sans max-w-xl font-medium drop-shadow-[0_1px_4px_rgba(0,0,0,0.85)]">
                    Find quick answers about prescription refills, convenient counter pickup, insurance coverage, Dis-Pill blister packaging, and walk-in vaccines: <strong class="text-white font-bold italic">"We're the pharmacy that cares."</strong>
                </p>

                <!-- Dual Action Buttons -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-2 sm:pt-3">
                    <a href="tel:7185388183" class="inline-flex items-center justify-center gap-2 bg-[#C1272D] hover:bg-[#a51d22] text-white px-7 py-3.5 rounded-full font-bold text-sm shadow-xl hover:shadow-2xl hover:scale-105 transition-all cursor-pointer">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span class="tracking-wide uppercase">Call (718) 538-8183</span>
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-100 text-[#0B2F5C] px-7 py-3.5 rounded-full font-bold text-sm shadow-md hover:scale-105 transition-all">
                        <span class="tracking-wide uppercase">Send Us a Question</span>
                        <svg class="w-4 h-4 text-[#C1272D] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

            </div>
        </section>

    </div>
</div>

<!-- Categorized FAQ Section -->
<section class="py-12 sm:py-16 lg:py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 md:px-10 space-y-12 sm:space-y-16">
        
        <!-- Category 1: Refills & In-Store Pickup -->
        <div class="space-y-4">
            <div class="flex items-center gap-3 border-b border-slate-200 pb-3">
                <div class="w-8 h-8 rounded-xl bg-blue-50 text-[#0B2F5C] flex items-center justify-center font-bold text-sm">
                    <svg class="w-4 h-4 text-[#0B2F5C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h2 class="text-lg sm:text-xl font-bold font-display text-[#0B2F5C]">
                    Prescription Refills &amp; In-Store Pickup
                </h2>
            </div>

            <div class="space-y-3">
                <details class="group bg-[#F8FAFC] rounded-2xl border border-slate-200 p-5 shadow-sm cursor-pointer">
                    <summary class="flex justify-between items-center font-bold text-[#0B2F5C] text-xs sm:text-sm list-none">
                        <span>How fast can I pick up my prescription refill?</span>
                        <svg class="w-4 h-4 text-[#C1272D] group-open:rotate-180 transition-transform duration-300 shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-200/60 pt-3">
                        Most routine refills submitted online or over the phone are ready in approximately 10–15 minutes. If your prescription requires doctor authorization or prior insurance approval, our team coordinates directly with your prescriber.
                    </p>
                </details>

                <details class="group bg-[#F8FAFC] rounded-2xl border border-slate-200 p-5 shadow-sm cursor-pointer">
                    <summary class="flex justify-between items-center font-bold text-[#0B2F5C] text-xs sm:text-sm list-none">
                        <span>What are your store hours and walk-in policy?</span>
                        <svg class="w-4 h-4 text-[#C1272D] group-open:rotate-180 transition-transform duration-300 shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-200/60 pt-3">
                        We are open 7 days a week to serve you: Monday through Friday 9:00 AM – 7:00 PM, Saturday 10:00 AM – 6:00 PM, and Sunday 10:00 AM – 3:00 PM. No appointment is needed for prescription drop-offs, refills, walk-in vaccinations, DMV vision tests, or notary services. Walk-ins are always welcome at 1018 Ogden Ave!
                    </p>
                </details>

                <details class="group bg-[#F8FAFC] rounded-2xl border border-slate-200 p-5 shadow-sm cursor-pointer">
                    <summary class="flex justify-between items-center font-bold text-[#0B2F5C] text-xs sm:text-sm list-none">
                        <span>Can I pick up over-the-counter (OTC) items and use my insurance OTC card?</span>
                        <svg class="w-4 h-4 text-[#C1272D] group-open:rotate-180 transition-transform duration-300 shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-200/60 pt-3">
                        Yes, absolutely! We stock a wide selection of pain relievers, cold and allergy medications, children's vitamins, diabetic supplies, and personal hygiene products. We gladly accept major health plan OTC benefit cards (Healthfirst, Fidelis, MetroPlus, etc.) at our checkout counter.
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
                        <span>Is there an additional charge for Dis-Pill or Cold Seal blister packaging?</span>
                        <svg class="w-4 h-4 text-[#C1272D] group-open:rotate-180 transition-transform duration-300 shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-200/60 pt-3">
                        No, multi-dose adherence packaging—both Dis-Pill and Cold Seal Blister Cards—is provided completely free of charge to all R &amp; S Pioneer Pharmacy patients. You pay only your standard insurance copays for your medications.
                    </p>
                </details>

                <details class="group bg-[#F8FAFC] rounded-2xl border border-slate-200 p-5 shadow-sm cursor-pointer">
                    <summary class="flex justify-between items-center font-bold text-[#0B2F5C] text-xs sm:text-sm list-none">
                        <span>What is Cold Seal Blister Card packaging?</span>
                        <svg class="w-4 h-4 text-[#C1272D] group-open:rotate-180 transition-transform duration-300 shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-200/60 pt-3">
                        Cold Seal Blister Card packaging is a tamper-evident compliance card system sealed without applying heat. Because no heat is used, temperature-sensitive medication formulations maintain complete clinical stability and potency. Each dose is organized by date and time of day, making it easy for patients, caregivers, and home health aides to monitor adherence.
                    </p>
                </details>

                <details class="group bg-[#F8FAFC] rounded-2xl border border-slate-200 p-5 shadow-sm cursor-pointer">
                    <summary class="flex justify-between items-center font-bold text-[#0B2F5C] text-xs sm:text-sm list-none">
                        <span>What happens if my doctor changes my dosage mid-month?</span>
                        <svg class="w-4 h-4 text-[#C1272D] group-open:rotate-180 transition-transform duration-300 shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-200/60 pt-3">
                        Simply call Pharmacist Kunal Shah, Pharm.D., immediately. We will update your prescription profile and package a replacement adjusted blister card so your medication regimen stays completely accurate.
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
                    Vaccinations, Birth Control, DMV Vision &amp; Notary
                </h2>
            </div>

            <div class="space-y-3">
                <details class="group bg-[#F8FAFC] rounded-2xl border border-slate-200 p-5 shadow-sm cursor-pointer">
                    <summary class="flex justify-between items-center font-bold text-[#0B2F5C] text-xs sm:text-sm list-none">
                        <span>Can Pharmacist Kunal prescribe birth control directly in New York State?</span>
                        <svg class="w-4 h-4 text-[#C1272D] group-open:rotate-180 transition-transform duration-300 shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed border-t border-slate-200/60 pt-3">
                        Yes! Kunal Shah, Pharm.D., is a <strong>Certified Birth Control Prescribing Pharmacist in New York State</strong>. Patients can walk in for a confidential consultation, and Pharmacist Kunal can evaluate and write an immediate prescription for hormonal contraception (such as birth control pills, patches, or vaginal rings) without needing an appointment or prior prescription from a physician. The consultation and prescription are covered by Medicaid and most health plans.
                    </p>
                </details>

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
            Speak Directly with Pharmacist Kunal Shah, Pharm.D.
        </h2>
        <p class="max-w-2xl mx-auto text-slate-200 text-xs sm:text-base leading-relaxed">
            Stop by 1018 Ogden Ave or call (718) 538-8183. We are open 7 days a week and ready to assist you.
        </p>
        <div class="pt-2 flex flex-col sm:flex-row justify-center items-stretch sm:items-center gap-3 sm:gap-4">
            <a href="tel:7185388183" class="rounded-full bg-white text-[#0B2F5C] font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm hover:bg-[#E8F0FE] transition shadow hover:scale-105">
                <span>Call (718) 538-8183</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="{{ route('contact') }}" class="rounded-full bg-[#C1272D] hover:bg-[#a51d22] text-white font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm shadow-lg hover:shadow-xl hover:scale-105 transition-all">
                <span>Contact Store</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>
</div>
@endsection
