@extends('layouts.app')

@section('title', 'NY DMV Vision Test & Passport Photos - Walk-Ins Welcome | R & S Pioneer Pharmacy')
@section('meta_description', 'Official NY DMV Vision Test in 3 minutes at R & S Pioneer Pharmacy Bronx NY. Electronic registry upload for online driver\'s license renewal. $10 passport photos & notary.')

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
                    <span>Official NY State Registry Provider</span>
                </div>

                <!-- 2-Tone Headline -->
                <h1 class="font-display leading-[1.15] tracking-tight text-white">
                    <span class="block text-base sm:text-xl lg:text-2xl font-normal text-slate-200">DMV &amp; Community Services</span>
                    <span class="block text-2xl sm:text-4xl lg:text-5xl font-extrabold text-white mt-1">
                        NY DMV Vision Tests &amp; Passport Photos
                    </span>
                </h1>

                <!-- Subtitle with Official Motto -->
                <p class="text-slate-200 text-xs sm:text-sm sm:leading-relaxed font-sans max-w-2xl">
                    Skip the long lines at the DMV. Take your official 3-minute driver's license eye exam here with immediate electronic registry upload, plus get biometric passport photos and notary services: <strong class="text-white font-semibold italic">"We're the pharmacy that cares."</strong>
                </p>

                <!-- Dual Action Buttons -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-1">
                    <a href="tel:7185388183" class="inline-flex items-center justify-center gap-2 bg-[#C1272D] hover:bg-[#a51d22] text-white px-6 py-3 rounded-full font-bold text-xs sm:text-sm shadow-xl hover:scale-105 transition-all">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>Call: (718) 538-8183</span>
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-100 text-[#0B2F5C] px-6 py-3 rounded-full font-bold text-xs sm:text-sm shadow-md hover:scale-105 transition-all">
                        <span>Directions to Store</span>
                        <svg class="w-3.5 h-3.5 text-[#C1272D] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

            </div>
        </section>

        <!-- Right Floating Badges (Desktop) -->
        <div class="hidden xl:flex flex-col gap-4 pb-36 z-10 max-w-xs">
            <div class="flex items-center gap-3.5 bg-white/95 backdrop-blur-md rounded-2xl p-4 shadow-2xl border border-white/30 text-slate-900">
                <div class="w-10 h-10 rounded-xl bg-[#0B2F5C] text-white flex items-center justify-center font-bold text-base shrink-0 shadow">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </div>
                <div>
                    <strong class="block text-slate-900 font-bold text-xs sm:text-sm">Instant DMV Upload</strong>
                    <span class="text-slate-600 text-[11px]">Direct to NYS DMV database</span>
                </div>
            </div>
            <div class="flex items-center gap-3.5 bg-[#071E3C]/90 backdrop-blur-md rounded-2xl p-4 shadow-2xl border border-white/10 text-white">
                <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-base shrink-0">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <div>
                    <strong class="block text-white font-bold text-xs sm:text-sm">$10 Passport Photos</strong>
                    <span class="text-slate-300 text-[11px]">Ready in 5 minutes</span>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Floating Overlapping Strip: 3 Community Services (Goldberger Format) -->
<div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 -mt-12 sm:-mt-20 lg:-mt-32 relative z-30 mb-12 sm:mb-16">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
        
        <!-- Box 1: DMV Vision Test -->
        <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300">
            <div class="space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 text-[#0B2F5C] flex items-center justify-center font-bold text-xl shadow-sm">
                    <svg class="w-6 h-6 text-[#0B2F5C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">NY DMV Eye Exam</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Official vision acuity screening for NY driver's license renewal. We submit your results directly into the NY State DMV online registry immediately.
                </p>
            </div>
            <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs font-bold text-[#0B2F5C]">3-Minute Walk-In</span>
                <div class="w-12 h-1 bg-[#0B2F5C] rounded-full"></div>
            </div>
        </div>

        <!-- Box 2: Passport Photos -->
        <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300">
            <div class="space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-red-50 text-[#C1272D] flex items-center justify-center font-bold text-xl shadow-sm">
                    <svg class="w-6 h-6 text-[#C1272D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">Passport &amp; ID Photos</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    2 official color 2x2 photos meeting all U.S. State Department specifications for passports, green cards, international visas, and work permits.
                </p>
            </div>
            <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs font-bold text-[#C1272D]">$10 &bull; Ready in 5 Mins</span>
                <div class="w-12 h-1 bg-[#C1272D] rounded-full"></div>
            </div>
        </div>

        <!-- Box 3: Notary Public & 10¢ Copies -->
        <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300">
            <div class="space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold text-xl shadow-sm">
                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">Notary Public &amp; Copies</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Licensed NY State Notary Public on duty. Document notarization, 10¢ black-and-white photocopies, color printing, and secure faxing services.
                </p>
            </div>
            <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs font-bold text-emerald-700">10¢ Copies &bull; Walk-In</span>
                <div class="w-12 h-1 bg-amber-500 rounded-full"></div>
            </div>
        </div>

    </div>
</div>

<!-- DMV Vision Screening Walk-In Process -->
<section class="py-12 sm:py-16 lg:py-24 bg-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 space-y-12 sm:space-y-16">
        
        <div class="text-center max-w-3xl mx-auto space-y-3">
            <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#C1272D]">Fast 4-Step Process</span>
            <h2 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-display text-[#0B2F5C]">
                How to Renew Your NY Driver's License in Minutes
            </h2>
            <p class="text-slate-600 text-xs sm:text-base leading-relaxed">
                New York State requires all drivers renewing their license to pass an official vision test. Here is how easy we make it:
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            
            <div class="bg-[#F8FAFC] rounded-3xl p-6 border border-slate-200/70 space-y-3">
                <div class="w-10 h-10 rounded-xl bg-[#0B2F5C] text-white flex items-center justify-center font-extrabold text-sm shadow">
                    1
                </div>
                <h3 class="font-bold text-[#0B2F5C] text-base font-display">Walk In Anytime</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Visit 1018 Ogden Ave. No appointment or DMV reservation is ever required. Bring your existing driver's license.
                </p>
            </div>

            <div class="bg-[#F8FAFC] rounded-3xl p-6 border border-slate-200/70 space-y-3">
                <div class="w-10 h-10 rounded-xl bg-[#0B2F5C] text-white flex items-center justify-center font-extrabold text-sm shadow">
                    2
                </div>
                <h3 class="font-bold text-[#0B2F5C] text-base font-display">3-Minute Vision Test</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Our certified staff conducts a quick visual acuity eye chart test. You can wear your corrective glasses or contact lenses.
                </p>
            </div>

            <div class="bg-[#F8FAFC] rounded-3xl p-6 border border-slate-200/70 space-y-3">
                <div class="w-10 h-10 rounded-xl bg-[#C1272D] text-white flex items-center justify-center font-extrabold text-sm shadow">
                    3
                </div>
                <h3 class="font-bold text-[#0B2F5C] text-base font-display">Electronic Submission</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    We instantly upload your passing results directly into the secure NY State DMV Online Vision Registry database.
                </p>
            </div>

            <div class="bg-[#F8FAFC] rounded-3xl p-6 border border-slate-200/70 space-y-3">
                <div class="w-10 h-10 rounded-xl bg-emerald-600 text-white flex items-center justify-center font-extrabold text-sm shadow">
                    4
                </div>
                <h3 class="font-bold text-[#0B2F5C] text-base font-display">Renew From Home</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Log on to dmv.ny.gov from your phone or computer, submit your renewal fee, and your new license will be mailed to you.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- Additional Services: Passport Photos & Notary Details -->
<section class="py-12 sm:py-16 lg:py-20 bg-[#F8FAFC] border-t border-slate-200/60">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
            
            <!-- Card 1: Passport Photos -->
            <div class="bg-white rounded-3xl p-6 sm:p-10 border border-slate-200 shadow-sm space-y-4">
                <div class="inline-flex items-center gap-2 bg-red-100 text-[#C1272D] px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">
                    Official 2x2 Photos
                </div>
                <h3 class="text-xl sm:text-2xl font-bold text-[#0B2F5C] font-display">Passport &amp; ID Photos ($10)</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Need passport photos fast? We take professional, high-resolution portrait photos printed on high-gloss photo paper while you wait.
                </p>
                <div class="pt-2 space-y-2 text-xs text-slate-600">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                        <span>Compliant with U.S. State Department &amp; International Consulates</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                        <span>Perfect for Passports, Green Cards, Visas, and NYC ID</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                        <span>Two 2x2 color prints ready in under 5 minutes</span>
                    </div>
                </div>
            </div>

            <!-- Card 2: Notary Public & Copies -->
            <div class="bg-white rounded-3xl p-6 sm:p-10 border border-slate-200 shadow-sm space-y-4">
                <div class="inline-flex items-center gap-2 bg-blue-100 text-[#0B2F5C] px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">
                    Legal &amp; Business Services
                </div>
                <h3 class="text-xl sm:text-2xl font-bold text-[#0B2F5C] font-display">Notary Public &amp; 10¢ Copies</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Have important documents that need an official state seal, or need quick photocopies of bills, medical records, or school documents?
                </p>
                <div class="pt-2 space-y-2 text-xs text-slate-600">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                        <span>Licensed New York State Notary Public on duty</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                        <span>Crisp black &amp; white copies for just 10¢ per page</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                        <span>Outgoing and incoming secure fax service available</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Bottom Full Navy CTA Banner (Goldberger Style) -->
<div class="flex w-full bg-[#0B2F5C] py-12 sm:py-16 lg:py-24 text-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 text-center space-y-5 sm:space-y-6">
        <h3 class="text-[#E8F0FE] font-bold text-xs sm:text-sm tracking-wider uppercase">Highbridge Neighborhood Convenience</h3>
        <h2 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-display text-white">
            Need an Eye Exam or Passport Photo Today?
        </h2>
        <p class="max-w-2xl mx-auto text-slate-200 text-xs sm:text-base leading-relaxed">
            Walk right into 1018 Ogden Ave. Open 7 days a week. Call (718) 538-8183 if you have any questions before coming by.
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
