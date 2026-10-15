@extends('layouts.app')

@section('title', 'About Us - Two Decades of Trust and Service | R & S Pioneer Pharmacy Bronx NY')
@section('meta_description', 'R & S Pioneer Pharmacy has been a cornerstone of healthcare in Highbridge and the South Bronx since 2006. Meet Pharmacist Kunal Shah and learn our story.')

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
                    <span>Established 2006 &bull; Celebrating 20 Years</span>
                </div>

                <!-- 2-Tone Headline -->
                <h1 class="font-display leading-[1.15] tracking-tight text-white">
                    <span class="block text-base sm:text-xl lg:text-2xl font-normal text-slate-200">About Us</span>
                    <span class="block text-2xl sm:text-4xl lg:text-5xl font-extrabold text-white mt-1">
                        Over Two Decades of Trust and Service
                    </span>
                </h1>

                <!-- Subtitle with Official Motto -->
                <p class="text-slate-200 text-xs sm:text-sm sm:leading-relaxed font-sans max-w-2xl">
                    R &amp; S Pioneer Pharmacy has been a cornerstone of healthcare in Highbridge and the South Bronx since 2006. With 20 years of continuous service, our defining philosophy remains: <strong class="text-white font-semibold italic">"We're the pharmacy that cares."</strong>
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

        <!-- Right Floating Quick Proof (Desktop) -->
        <div class="hidden xl:flex flex-col gap-4 pb-36 z-10 max-w-xs">
            <div class="flex items-center gap-3.5 bg-white/95 backdrop-blur-md rounded-2xl p-4 shadow-2xl border border-white/30 text-slate-900">
                <div class="w-10 h-10 rounded-xl bg-[#0B2F5C] text-white flex items-center justify-center font-bold text-base shrink-0 shadow">
                    ℞
                </div>
                <div>
                    <strong class="block text-slate-900 font-bold text-xs sm:text-sm">Kunal Shah, R.Ph.</strong>
                    <span class="text-slate-600 text-[11px]">Head Pharmacist &bull; St. John's Alum</span>
                </div>
            </div>
            <div class="flex items-center gap-3.5 bg-[#071E3C]/90 backdrop-blur-md rounded-2xl p-4 shadow-2xl border border-white/10 text-white">
                <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-base shrink-0">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <div>
                    <strong class="block text-white font-bold text-xs sm:text-sm">Open 7 Days a Week</strong>
                    <span class="text-slate-300 text-[11px]">1018 Ogden Ave, Bronx NY</span>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Floating Overlapping Strip: Our Mission & Our Vision (Goldberger Signature Layout) -->
<div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 -mt-12 sm:-mt-20 lg:-mt-32 relative z-30 mb-12 sm:mb-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
        
        <!-- Mission Card -->
        <div class="h-full bg-white rounded-3xl p-6 sm:p-9 lg:p-10 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300">
            <div class="space-y-4">
                <div class="flex items-center gap-3.5">
                    <div class="w-12 h-12 rounded-2xl bg-red-50 text-[#C1272D] flex items-center justify-center font-bold text-xl shadow-sm shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-[#C1272D]">Our Purpose</span>
                        <h2 class="text-xl sm:text-2xl font-bold font-display text-[#0B2F5C]">Our Mission</h2>
                    </div>
                </div>
                <p class="text-slate-600 text-xs sm:text-sm lg:text-base leading-relaxed">
                    To provide personalized, high-quality care by making healthcare accessible, convenient, and compassionate. We aim to empower our Highbridge and South Bronx neighbors with expert medication guidance, modern Dis-Pill technology, and an unwavering commitment to enhancing their daily well-being.
                </p>
            </div>
            <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs font-bold text-[#0B2F5C]">Serving Since 2006</span>
                <div class="w-20 h-1 bg-[#C1272D] rounded-full"></div>
            </div>
        </div>

        <!-- Vision Card -->
        <div class="h-full bg-white rounded-3xl p-6 sm:p-9 lg:p-10 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300">
            <div class="space-y-4">
                <div class="flex items-center gap-3.5">
                    <div class="w-12 h-12 rounded-2xl bg-blue-50 text-[#0B2F5C] flex items-center justify-center font-bold text-xl shadow-sm shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-[#0B2F5C]">Looking Ahead</span>
                        <h2 class="text-xl sm:text-2xl font-bold font-display text-[#0B2F5C]">Our Vision</h2>
                    </div>
                </div>
                <p class="text-slate-600 text-xs sm:text-sm lg:text-base leading-relaxed">
                    To be the most trusted independent pharmacy in the Bronx, offering comprehensive healthcare solutions that prioritize customer needs, build lasting generational relationships, and elevate the standard of community care. We envision a future where every patient experiences seamless, reliable, and heartfelt service.
                </p>
            </div>
            <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs font-bold text-[#0B2F5C]">Community First</span>
                <div class="w-20 h-1 bg-[#0B2F5C] rounded-full"></div>
            </div>
        </div>

    </div>
</div>

<!-- Two Decades of Trust and Care (Goldberger Split Layout) -->
<section class="py-12 sm:py-16 lg:py-20 bg-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">
            
            <!-- Left Narrative -->
            <div class="lg:col-span-7 space-y-6">
                <div>
                    <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#C1272D]">Our Heritage</span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold font-display text-[#0B2F5C] mt-2 leading-tight">
                        R &amp; S Pioneer Pharmacy: Two Decades of Trust and Care
                    </h2>
                </div>

                <p class="text-slate-600 leading-relaxed text-xs sm:text-base">
                    Since 2006, <strong>R &amp; S Pioneer Pharmacy</strong> has been committed to delivering personalized, high-quality care. Our mission is to provide trusted healthcare solutions tailored to the unique needs of our Highbridge and South Bronx neighborhood.
                </p>

                <p class="text-slate-600 leading-relaxed text-xs sm:text-base">
                    Our vision is to be the go-to pharmacy that provides not just medications, but complete healthcare solutions tailored to each customer's unique needs. Whether it's filling a prescription in minutes, organizing complex senior doses in Dis-Pill blister packs, or providing walk-in vaccinations with zero wait, we're here to enhance your well-being every step of the way.
                </p>

                <!-- 3 Goldberger Key Pillars -->
                <div class="space-y-3.5 pt-2">
                    <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-[#F8FAFC] border border-[#0B2F5C]/10">
                        <div class="w-7 h-7 rounded-full bg-[#C1272D] text-white flex items-center justify-center font-bold text-xs shrink-0 shadow mt-0.5">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <strong class="text-[#0B2F5C] font-bold text-xs sm:text-sm block">Personalized Care:</strong>
                            <span class="text-slate-600 text-xs sm:text-sm">Tailored healthcare solutions that prioritize each patient's unique background, language, and clinical needs.</span>
                        </div>
                    </div>

                    <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-[#F8FAFC] border border-[#0B2F5C]/10">
                        <div class="w-7 h-7 rounded-full bg-[#0B2F5C] text-white flex items-center justify-center font-bold text-xs shrink-0 shadow mt-0.5">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <strong class="text-[#0B2F5C] font-bold text-xs sm:text-sm block">Fast &amp; Reliable Service:</strong>
                            <span class="text-slate-600 text-xs sm:text-sm">Rapid prescription refills with seamless, free home delivery options throughout the South Bronx.</span>
                        </div>
                    </div>

                    <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-[#F8FAFC] border border-[#0B2F5C]/10">
                        <div class="w-7 h-7 rounded-full bg-emerald-600 text-white flex items-center justify-center font-bold text-xs shrink-0 shadow mt-0.5">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <strong class="text-[#0B2F5C] font-bold text-xs sm:text-sm block">Comprehensive Offerings:</strong>
                            <span class="text-slate-600 text-xs sm:text-sm">From Dis-Pill medication management to walk-in vaccines, DMV vision exams, and our community toy department.</span>
                        </div>
                    </div>
                </div>

                <div class="pt-3 flex flex-col sm:flex-row gap-3 sm:gap-4 items-stretch sm:items-center">
                    <a href="{{ route('services') }}" class="rounded-full bg-[#0B2F5C] font-semibold text-white px-7 h-12 inline-flex items-center justify-center gap-3 text-xs sm:text-sm hover:bg-[#071E3C] transition shadow hover:scale-105">
                        <span>Explore Our Services</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <a href="tel:7185388183" class="rounded-full border border-[#0B2F5C] font-semibold text-[#0B2F5C] px-7 h-12 inline-flex items-center justify-center gap-3 text-xs sm:text-sm hover:bg-[#0B2F5C] hover:text-white transition shadow-sm">
                        <span>Call: (718) 538-8183</span>
                    </a>
                </div>
            </div>

            <!-- Right Visual Community Card -->
            <div class="lg:col-span-5 w-full">
                <div class="bg-gradient-to-b from-[#0B2F5C] to-[#071E3C] text-white rounded-3xl p-6 sm:p-10 lg:p-12 shadow-2xl border border-white/10 space-y-6">
                    <div class="inline-block bg-[#C1272D] px-3.5 py-1 rounded-full text-xs font-bold uppercase tracking-wider text-white">
                        Community Anchor Since 2006
                    </div>
                    
                    <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold font-display text-white">
                        Rooted in Highbridge. Devoted to You.
                    </h3>

                    <p class="text-xs sm:text-sm text-slate-200 leading-relaxed">
                        We know our patients by name, their families, and their medical histories. When corporate retail chains shut down and shorten hours across NYC, R &amp; S Pioneer remains open 7 days a week for the South Bronx.
                    </p>

                    <div class="pt-4 border-t border-white/10 space-y-3 text-xs sm:text-sm text-slate-200">
                        <div class="flex items-center gap-3">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#C1272D] shrink-0"></span>
                            Medicaid, Medicare Part D &amp; Commercial Insurance Accepted
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#C1272D] shrink-0"></span>
                            Direct Physician &amp; Prior-Authorization Coordination
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#C1272D] shrink-0"></span>
                            Free Daily Delivery across Highbridge &amp; South Bronx
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#C1272D] shrink-0"></span>
                            Full In-Store Toy Department for Local Families
                        </div>
                    </div>

                    <div class="pt-2">
                        <a href="tel:7185388183" class="w-full text-center inline-flex items-center justify-center gap-2 rounded-full bg-white text-[#0B2F5C] font-bold text-xs sm:text-sm h-12 hover:bg-[#E8F0FE] transition shadow">
                            <span>Speak with Our Team: (718) 538-8183</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Why Choose Us? (6 Goldberger Equal-Height Cards) -->
<section class="py-12 sm:py-16 lg:py-24 bg-[#F8FAFC] border-t border-slate-200/60">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 space-y-10 sm:space-y-12">
        
        <div class="text-center max-w-3xl mx-auto space-y-3">
            <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#C1272D]">The Pioneer Difference</span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold font-display text-[#0B2F5C]">
                Why Choose Us?
            </h2>
            <p class="text-slate-600 text-xs sm:text-base leading-relaxed">
                At R &amp; S Pioneer Pharmacy, we've been serving our community since 2006 with a legacy of trust and reliability. When you choose us, you're choosing a healthcare partner who prioritizes your well-being at every step.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            
            <!-- 1. Trusted Expertise -->
            <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-3.5">
                    <div class="w-12 h-12 rounded-2xl bg-[#E8F0FE] text-[#0B2F5C] flex items-center justify-center font-bold text-lg shadow-sm">
                        ℞
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">Trusted Expertise</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Two decades of continuous clinical pharmacy experience in the Bronx, offering reliable health advice, drug interaction monitoring, and personalized dosage management.
                    </p>
                </div>
                <div class="mt-5 w-full h-1 bg-[#0B2F5C] rounded-full"></div>
            </div>

            <!-- 2. Community Focused -->
            <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-3.5">
                    <div class="w-12 h-12 rounded-2xl bg-red-50 text-[#C1272D] flex items-center justify-center font-bold text-lg shadow-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">Community Focused</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Deeply rooted in the Highbridge neighborhood. We actively support local schools, seniors, clinics, and families with dedicated care programs and our community toy store.
                    </p>
                </div>
                <div class="mt-5 w-full h-1 bg-[#C1272D] rounded-full"></div>
            </div>

            <!-- 3. Consistent Reliability -->
            <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-3.5">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold text-lg shadow-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">Consistent Reliability</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Open 7 days a week, 365 days a year. When you need medication refills, urgent walk-in shots, or fast delivery, we are consistently here to ensure peace of mind.
                    </p>
                </div>
                <div class="mt-5 w-full h-1 bg-emerald-500 rounded-full"></div>
            </div>

            <!-- 4. Genuine Care -->
            <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-3.5">
                    <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold text-lg shadow-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">Genuine Care</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        We prioritize your health and happiness in every interaction. We know your name, treat you like family, and make sure you never leave with unanswered questions.
                    </p>
                </div>
                <div class="mt-5 w-full h-1 bg-amber-500 rounded-full"></div>
            </div>

            <!-- 5. Transparency -->
            <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-3.5">
                    <div class="w-12 h-12 rounded-2xl bg-indigo-50 text-[#1A4FA0] flex items-center justify-center font-bold text-lg shadow-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">Full Transparency</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Clear communication and honest guidance with no surprises. We help you find manufacturer coupons, optimize copays, and navigate prior authorizations with ease.
                    </p>
                </div>
                <div class="mt-5 w-full h-1 bg-[#1A4FA0] rounded-full"></div>
            </div>

            <!-- 6. Innovation-Driven -->
            <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-3.5">
                    <div class="w-12 h-12 rounded-2xl bg-sky-50 text-sky-700 flex items-center justify-center font-bold text-lg shadow-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">Innovation &amp; Packaging</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Embracing modern technology like Dis-Pill multi-dose packaging, digital DMV vision exam uploads, and effortless online prescription transfer to elevate your experience.
                    </p>
                </div>
                <div class="mt-5 w-full h-1 bg-sky-600 rounded-full"></div>
            </div>

        </div>
    </div>
</section>

<!-- Pharmacist Kunal Shah Bio Section (Redesigned Executive Clinical Layout) -->
<section class="py-14 sm:py-20 lg:py-28 bg-gradient-to-b from-white via-[#F8FAFC] to-white relative overflow-hidden">
    <!-- Subtle background decorative glow -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-[#E8F0FE]/40 rounded-full blur-3xl pointer-events-none -z-10"></div>

    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-10 sm:mb-14">
            <div class="inline-flex items-center gap-2 bg-[#E8F0FE] text-[#1A4FA0] px-3.5 py-1.5 rounded-full text-[11px] sm:text-xs font-bold uppercase tracking-wider shadow-sm">
                <span class="w-2 h-2 rounded-full bg-[#0B2F5C]"></span>
                <span>Clinical Leadership &bull; Founder Profile</span>
            </div>
            <h2 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-display text-[#0B2F5C] leading-tight">
                Meet Your Head Pharmacist
            </h2>
            <p class="text-slate-600 text-xs sm:text-base leading-relaxed">
                Dedicated to Highbridge and South Bronx patient care for over two decades.
            </p>
        </div>

        <!-- Executive Clinical Profile Card -->
        <div class="max-w-5xl mx-auto bg-white rounded-3xl sm:rounded-[2.5rem] border border-[#0B2F5C]/10 p-6 sm:p-10 lg:p-12 shadow-[0_25px_60px_-15px_rgba(11,47,92,0.12)] space-y-8 sm:space-y-10 relative">
            
            <!-- Top Header Ribbon -->
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-5 border-b border-slate-100 pb-7">
                <div class="flex items-center gap-4 sm:gap-5">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-gradient-to-br from-[#0B2F5C] to-[#071E3C] text-white flex items-center justify-center font-bold text-xl sm:text-2xl shadow-lg ring-4 ring-[#E8F0FE] shrink-0">
                        ℞
                    </div>
                    <div>
                        <div class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-[#C1272D]">
                            <span>Head Pharmacist &amp; Owner</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-display text-[#0B2F5C] mt-0.5">
                            Kunal Shah, R.Ph.
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-500 font-medium mt-0.5 flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-[#1A4FA0] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>
                            <span>Alumnus, St. John's University College of Pharmacy</span>
                        </p>
                    </div>
                </div>

                <!-- 20+ Years Clinical Badge -->
                <div class="bg-gradient-to-br from-[#E8F0FE] to-[#d8e6fd] border border-[#0B2F5C]/15 px-5 py-3 rounded-2xl text-center self-start sm:self-auto shrink-0 shadow-sm">
                    <span class="text-[10px] sm:text-xs font-extrabold text-[#1A4FA0] uppercase tracking-wider block">Clinical Experience</span>
                    <span class="text-2xl sm:text-3xl font-black text-[#0B2F5C] font-display block leading-tight">20+ Years</span>
                    <span class="inline-flex items-center gap-1 text-[10px] text-emerald-700 font-bold mt-0.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                        Active Bronx Practice
                    </span>
                </div>
            </div>

            <!-- Main Body: 2-Column Split Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-start">
                
                <!-- Left Column: Visual Photography & Credentials (5 cols) -->
                <div class="lg:col-span-5 space-y-5">
                    
                    <!-- Framed Consultation Area Photography -->
                    <div class="rounded-3xl overflow-hidden shadow-xl border border-slate-200 relative group">
                        <img src="{{ asset('images/doctor-consultation.jpg') }}" alt="Pharmacist Kunal Shah Consultation Area" class="w-full h-64 sm:h-72 object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#071E3C]/90 via-transparent to-transparent flex items-end p-4">
                            <div class="flex items-center gap-2 bg-white/95 backdrop-blur-md px-3 py-1.5 rounded-xl shadow text-xs font-bold text-[#0B2F5C]">
                                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                                <span>Consultation Desk &bull; Highbridge</span>
                            </div>
                        </div>
                    </div>

                    <!-- Credential Pills Checklist -->
                    <div class="space-y-2.5 pt-1">
                        <div class="flex items-center gap-3 p-3 rounded-xl bg-[#F8FAFC] border border-slate-100 text-xs font-semibold text-slate-700">
                            <div class="w-6 h-6 rounded-lg bg-[#0B2F5C] text-white flex items-center justify-center shrink-0">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            </div>
                            <span>New York State Licensed Registered Pharmacist</span>
                        </div>

                        <div class="flex items-center gap-3 p-3 rounded-xl bg-[#F8FAFC] border border-slate-100 text-xs font-semibold text-slate-700">
                            <div class="w-6 h-6 rounded-lg bg-[#C1272D] text-white flex items-center justify-center shrink-0">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            </div>
                            <span>Dis-Pill Multi-Dose Medication Specialist</span>
                        </div>

                        <div class="flex items-center gap-3 p-3 rounded-xl bg-[#F8FAFC] border border-slate-100 text-xs font-semibold text-slate-700">
                            <div class="w-6 h-6 rounded-lg bg-emerald-600 text-white flex items-center justify-center shrink-0">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                            </div>
                            <span>Certified Walk-In Immunizer (All Ages)</span>
                        </div>

                        <div class="flex items-center gap-3 p-3 rounded-xl bg-[#F8FAFC] border border-slate-100 text-xs font-semibold text-slate-700">
                            <div class="w-6 h-6 rounded-lg bg-[#1A4FA0] text-white flex items-center justify-center shrink-0">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                            </div>
                            <span>Bilingual Care &bull; English &amp; Español</span>
                        </div>
                    </div>

                    <!-- 4 Stat Micro-Cards -->
                    <div class="grid grid-cols-2 gap-2.5 pt-2">
                        <div class="p-3 bg-[#E8F0FE]/60 rounded-2xl text-center border border-[#0B2F5C]/10">
                            <strong class="block text-lg font-black text-[#0B2F5C] font-display">20+</strong>
                            <span class="text-[10px] text-slate-600 font-medium">Years in South Bronx</span>
                        </div>
                        <div class="p-3 bg-red-50/70 rounded-2xl text-center border border-red-200/50">
                            <strong class="block text-lg font-black text-[#C1272D] font-display">10,000+</strong>
                            <span class="text-[10px] text-slate-600 font-medium">Vaccines Administered</span>
                        </div>
                        <div class="p-3 bg-emerald-50/70 rounded-2xl text-center border border-emerald-200/50">
                            <strong class="block text-lg font-black text-emerald-800 font-display">100%</strong>
                            <span class="text-[10px] text-slate-600 font-medium">Free Doorstep Delivery</span>
                        </div>
                        <div class="p-3 bg-amber-50/70 rounded-2xl text-center border border-amber-200/50">
                            <strong class="block text-lg font-black text-amber-800 font-display">7 Days</strong>
                            <span class="text-[10px] text-slate-600 font-medium">Open Every Week</span>
                        </div>
                    </div>

                </div>

                <!-- Right Column: Narrative, Quote, Focus Areas (7 cols) -->
                <div class="lg:col-span-7 space-y-6 text-slate-700 leading-relaxed text-xs sm:text-sm lg:text-base">
                    
                    <p>
                        Kunal Shah earned his pharmacy degree from <strong>St. John's University College of Pharmacy</strong>, one of New York's premier pharmaceutical institutions. For over two decades, Kunal has dedicated his career to community-based clinical pharmacy in the South Bronx.
                    </p>

                    <p>
                        Rather than operating within the impersonal confines of large corporate retail chains, Kunal founded <strong>R &amp; S Pioneer Pharmacy</strong> to practice healthcare the way it was meant to be: personal, patient-centered, and accessible to everyone regardless of economic background.
                    </p>

                    <!-- Stylized Modern Quote Callout -->
                    <div class="p-5 sm:p-7 bg-gradient-to-br from-slate-50 via-[#F8FAFC] to-white rounded-2xl sm:rounded-3xl border-l-4 border-[#C1272D] border border-slate-100 shadow-sm relative space-y-3">
                        <svg class="w-8 h-8 text-[#C1272D]/20 absolute top-4 right-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                        <p class="text-slate-800 italic text-xs sm:text-sm lg:text-[15px] leading-relaxed relative z-10">
                            "A lot of chain pharmacies are closing because they view patients as transaction numbers. Here in the South Bronx, we know the importance of sitting down with our seniors, translating complex medication schedules into plain English and Spanish, packaging their pills into daily blister cards, and making sure they never have to choose between their medicine and their groceries."
                        </p>
                        <div class="pt-1 flex items-center gap-2">
                            <span class="w-4 h-0.5 bg-[#C1272D]"></span>
                            <span class="text-xs text-[#C1272D] font-extrabold tracking-wider uppercase">Kunal Shah, R.Ph. (Owner &amp; Head Pharmacist)</span>
                        </div>
                    </div>

                    <p>
                        Kunal specializes in geriatric medication therapy management, pediatric formulations, diabetes care, and immunization administration. Under his direction, R &amp; S Pioneer Pharmacy has administered thousands of critical walk-in vaccines, performed hundreds of DMV vision exams, and delivered life-saving medications to homebound Bronx seniors.
                    </p>

                    <!-- 3 Clinical Focus Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-2">
                        <div class="p-3.5 bg-white rounded-2xl border border-slate-200/80 shadow-sm space-y-1.5">
                            <div class="w-7 h-7 rounded-lg bg-red-50 text-[#C1272D] flex items-center justify-center">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            </div>
                            <strong class="block text-xs font-bold text-[#0B2F5C]">Dis-Pill Packaging</strong>
                            <p class="text-[11px] text-slate-500 leading-normal">Multi-dose blister cards eliminating missed doses for seniors.</p>
                        </div>

                        <div class="p-3.5 bg-white rounded-2xl border border-slate-200/80 shadow-sm space-y-1.5">
                            <div class="w-7 h-7 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                            </div>
                            <strong class="block text-xs font-bold text-[#0B2F5C]">Walk-In Immunizer</strong>
                            <p class="text-[11px] text-slate-500 leading-normal">Certified for flu, COVID, RSV, and shingles vaccinations.</p>
                        </div>

                        <div class="p-3.5 bg-white rounded-2xl border border-slate-200/80 shadow-sm space-y-1.5">
                            <div class="w-7 h-7 rounded-lg bg-blue-50 text-[#1A4FA0] flex items-center justify-center">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            </div>
                            <strong class="block text-xs font-bold text-[#0B2F5C]">Patient Advocacy</strong>
                            <p class="text-[11px] text-slate-500 leading-normal">Prior-authorization coordination and Medicaid navigation.</p>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Bottom Action & Verification Bar -->
            <div class="pt-7 border-t border-slate-100 flex flex-col sm:flex-row gap-4 items-stretch sm:items-center justify-between">
                <div class="inline-flex items-center gap-2 text-xs font-semibold text-slate-600 bg-slate-50 px-4 py-2 rounded-full border border-slate-200">
                    <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    <span>New York State Licensed Registered Pharmacist &bull; Highbridge Community Anchor</span>
                </div>
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                    <a href="tel:7185388183" class="rounded-full bg-[#C1272D] hover:bg-[#a51d22] text-white font-bold text-xs sm:text-sm px-6 h-12 inline-flex items-center justify-center gap-2 shadow-md hover:scale-105 transition">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>Call Kunal: (718) 538-8183</span>
                    </a>
                    <a href="{{ route('transfer') }}" class="rounded-full bg-[#0B2F5C] hover:bg-[#071E3C] text-white font-bold text-xs sm:text-sm px-7 h-12 inline-flex items-center justify-center gap-2.5 shadow-md hover:scale-105 transition">
                        <span>Transfer to Kunal's Care</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Bottom Full Navy CTA Banner (Goldberger Style) -->
<div class="flex w-full bg-[#0B2F5C] py-12 sm:py-16 lg:py-24 text-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 text-center space-y-5 sm:space-y-6">
        <h3 class="text-[#E8F0FE] font-bold text-xs sm:text-sm tracking-wider uppercase">Join Our Pharmacy Family</h3>
        <h2 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-display text-white">
            Experience Personal Pharmacy Care in Highbridge
        </h2>
        <p class="max-w-2xl mx-auto text-slate-200 text-xs sm:text-base leading-relaxed">
            Switching is quick and effortless. Visit us at 1018 Ogden Ave or call (718) 538-8183 to speak directly with our team.
        </p>
        <div class="pt-2 flex flex-col sm:flex-row justify-center items-stretch sm:items-center gap-3 sm:gap-4">
            <a href="{{ route('transfer') }}" class="rounded-full bg-white text-[#0B2F5C] font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm hover:bg-[#E8F0FE] transition shadow hover:scale-105">
                <span>Transfer ℞ Now</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="tel:7185388183" class="rounded-full border border-white text-white font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm hover:bg-white hover:text-[#0B2F5C] transition shadow">
                <span>Call (718) 538-8183</span>
            </a>
        </div>
    </div>
</div>
@endsection
