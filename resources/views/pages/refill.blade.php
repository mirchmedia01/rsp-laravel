@extends('layouts.app')

@section('title', 'Refill Prescriptions Online - Fast 15-Minute Pickup | R & S Pioneer Pharmacy')
@section('meta_description', 'Easily refill your prescriptions online at R & S Pioneer Pharmacy in Highbridge, Bronx. Fast 15-minute turnaround, $0 copay assistance, and convenient in-store pickup at 1018 Ogden Ave.')

@section('content')
<!-- Hero Section (Goldberger Elevated Card Layout with Photo Background) -->
<div class="relative flex min-h-[auto] sm:min-h-[460px] lg:min-h-[500px] w-full bg-cover bg-center bg-no-repeat text-white overflow-hidden" 
     style="background-image: linear-gradient(to right, rgba(7, 30, 60, 0.92) 0%, rgba(7, 30, 60, 0.72) 55%, rgba(7, 30, 60, 0.35) 100%), url('{{ asset('images/refill-your-rx.jpg') }}');">
    
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 py-6 sm:py-10 lg:py-14 mt-auto w-full flex items-end justify-between relative z-10 !pb-0">
        
        <!-- Bottom Elevated Navy Glass Card -->
        <section class="w-full lg:max-w-3xl rounded-t-3xl sm:rounded-t-[2.5rem] bg-gradient-to-b from-[#0B2F5C]/95 via-[#071E3C]/95 to-[#071E3C]/98 p-6 sm:p-8 lg:p-10 border-t border-l border-r border-white/20 shadow-[0_25px_60px_-15px_rgba(0,0,0,0.6)] backdrop-blur-xl relative z-10 pb-10 sm:pb-16 lg:pb-20">
            <div class="flex flex-col gap-4 sm:gap-6">
                
                <!-- Pill Badge -->
                <div class="inline-flex items-center gap-2 bg-[#C1272D] px-3.5 py-1.5 rounded-full text-[11px] sm:text-xs font-bold uppercase tracking-wider text-white shadow-md w-fit">
                    <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
                    <span>Fast Turnaround &bull; 15-Minute Ready</span>
                </div>

                <!-- 2-Tone Headline -->
                <h1 class="font-display leading-[1.15] tracking-tight text-white">
                    <span class="block text-base sm:text-xl lg:text-2xl font-normal text-slate-200">Prescription Refills</span>
                    <span class="block text-2xl sm:text-4xl lg:text-5xl font-extrabold text-white mt-1">
                        Refill Your Prescriptions Online
                    </span>
                </h1>

                <!-- Subtitle with Official Motto -->
                <p class="text-slate-200 text-xs sm:text-sm sm:leading-relaxed font-sans max-w-2xl">
                    Never wait in long lines again. Submit your Rx refill numbers online and pick them up in 15 minutes at our counter: <strong class="text-white font-semibold italic">"We're the pharmacy that cares."</strong>
                </p>

                <!-- Dual Action Buttons -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-1">
                    <a href="#refill-form" class="inline-flex items-center justify-center gap-2 bg-[#C1272D] hover:bg-[#a51d22] text-white px-6 py-3 rounded-full font-bold text-xs sm:text-sm shadow-xl hover:scale-105 transition-all">
                        <span>Fill Refill Form Below</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                    <a href="tel:7185388183" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-100 text-[#0B2F5C] px-6 py-3 rounded-full font-bold text-xs sm:text-sm shadow-md hover:scale-105 transition-all">
                        <svg class="w-4 h-4 text-[#C1272D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>Call (718) 538-8183</span>
                    </a>
                </div>

            </div>
        </section>

        <!-- Right Floating Badges (Desktop) -->
        <div class="hidden xl:flex flex-col gap-4 pb-20 z-10 max-w-xs">
            <div class="flex items-center gap-3.5 bg-white/95 backdrop-blur-md rounded-2xl p-4 shadow-2xl border border-white/30 text-slate-900">
                <div class="w-10 h-10 rounded-xl bg-[#0B2F5C] text-white flex items-center justify-center font-bold text-base shrink-0 shadow">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div>
                    <strong class="block text-slate-900 font-bold text-xs sm:text-sm">15-Minute Prep Time</strong>
                    <span class="text-slate-600 text-[11px]">Ready before you arrive</span>
                </div>
            </div>
            <div class="flex items-center gap-3.5 bg-[#071E3C]/90 backdrop-blur-md rounded-2xl p-4 shadow-2xl border border-white/10 text-white">
                <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-base shrink-0">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <div>
                    <strong class="block text-white font-bold text-xs sm:text-sm">In-Store Pickup</strong>
                    <span class="text-slate-300 text-[11px]">1018 Ogden Ave, Bronx</span>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Floating Overlapping Strip: 3 Quick Steps (Goldberger Format) -->
<div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 -mt-6 sm:-mt-10 lg:-mt-14 relative z-30 mb-8 sm:mb-10">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 sm:gap-6">
        
        <!-- Step 1 -->
        <div class="h-full bg-white rounded-2xl p-5 sm:p-6 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] flex flex-col justify-between hover:-translate-y-1 transition duration-300">
            <div class="space-y-2.5">
                <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#0B2F5C] flex items-center justify-center font-bold text-base shadow-sm">
                    1
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">Enter Rx Numbers</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Locate the 6- or 7-digit Rx number printed above your medication name on your bottle label and enter it below.
                </p>
            </div>
            <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs font-bold text-[#0B2F5C]">Simple Form</span>
                <div class="w-12 h-1 bg-[#0B2F5C] rounded-full"></div>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="h-full bg-white rounded-2xl p-5 sm:p-6 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] flex flex-col justify-between hover:-translate-y-1 transition duration-300">
            <div class="space-y-2.5">
                <div class="w-10 h-10 rounded-xl bg-red-50 text-[#C1272D] flex items-center justify-center font-bold text-base shadow-sm">
                    2
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">Clinical Review</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Pharmacist Kunal checks insurance copays, confirms refills remaining, screens drug interactions, and packages your order.
                </p>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs font-bold text-[#C1272D]">Full Safety Check</span>
                <div class="w-10 h-1 bg-[#C1272D] rounded-full"></div>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="h-full bg-white rounded-2xl p-5 sm:p-6 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] flex flex-col justify-between hover:-translate-y-1 transition duration-300">
            <div class="space-y-2.5">
                <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold text-base shadow-sm">
                    3
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">Fast Counter Pickup</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Swing by 1018 Ogden Ave. Your medications will be labeled, checked by Pharmacist Kunal, and waiting at our pickup counter.
                </p>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs font-bold text-[#0B2F5C]">Ready in ~15 Mins</span>
                <div class="w-10 h-1 bg-amber-500 rounded-full"></div>
            </div>
        </div>

    </div>
</div>

<!-- Main Form Section -->
<section id="refill-form" class="py-8 sm:py-12 lg:py-16 bg-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10">
        
        <!-- Flash Success Notification -->
        @if (session('success'))
            <div class="max-w-3xl mx-auto mb-8 sm:mb-10 bg-emerald-50 border-2 border-emerald-500 text-emerald-900 rounded-3xl p-5 sm:p-7 shadow-lg flex items-start gap-4">
                <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-emerald-500 text-white flex items-center justify-center shrink-0 font-bold text-lg sm:text-xl shadow">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <div class="space-y-1">
                    <h3 class="font-extrabold text-base sm:text-lg text-emerald-900">Prescription Refill Submitted!</h3>
                    <p class="text-xs sm:text-sm text-emerald-800 leading-relaxed">{{ session('success') }}</p>
                    <p class="text-xs text-emerald-700 font-semibold pt-1">Questions about your refill? Call our pharmacy counter at (718) 538-8183.</p>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
            
            <!-- Left: Refill Form Card -->
            <div style="box-shadow: 0 10px 30px rgba(11,47,92,0.08)" class="lg:col-span-8 bg-white rounded-3xl border border-slate-100 p-5 sm:p-8 space-y-5">
                <div>
                    <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#C1272D]">Refill Request</span>
                    <h2 class="text-xl sm:text-2xl font-bold font-display text-slate-900 mt-1">
                        Prescription &amp; Contact Details
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-500 mt-1 leading-relaxed">
                        Please provide your contact information and prescription numbers below. All information is transmitted securely and is strictly confidential.
                    </p>
                </div>

                <!-- Validation Errors Alert -->
                @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 text-red-800 rounded-xl p-3.5 sm:p-4 text-xs sm:text-sm space-y-1">
                        <strong class="font-bold block">Please correct the following:</strong>
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('refill.store') }}" method="POST" class="space-y-5">
                    @csrf

                    <!-- Section 1: Patient Information -->
                    <div class="space-y-3">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-900 border-b border-slate-100 pb-1.5">
                            Step 1: Patient Information
                        </h3>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                            <div>
                                <label for="first_name" class="block text-xs font-bold text-slate-700 mb-1">First Name *</label>
                                <input type="text" name="first_name" id="first_name" required value="{{ old('first_name') }}"
                                    class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition"
                                    placeholder="e.g. Maria">
                            </div>
                            <div>
                                <label for="last_name" class="block text-xs font-bold text-slate-700 mb-1">Last Name *</label>
                                <input type="text" name="last_name" id="last_name" required value="{{ old('last_name') }}"
                                    class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition"
                                    placeholder="e.g. Rodriguez">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                            <div>
                                <label for="dob" class="block text-xs font-bold text-slate-700 mb-1">Date of Birth</label>
                                <input type="date" name="dob" id="dob" value="{{ old('dob') }}"
                                    class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition">
                            </div>
                            <div>
                                <label for="phone" class="block text-xs font-bold text-slate-700 mb-1">Primary Phone Number *</label>
                                <input type="tel" name="phone" id="phone" required value="{{ old('phone') }}"
                                    class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition"
                                    placeholder="(718) 555-0123">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-xs font-bold text-slate-700 mb-1">Email Address (Optional)</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition"
                                placeholder="maria@example.com">
                        </div>
                    </div>

                    <!-- Section 2: Prescription Numbers -->
                    <div class="space-y-3 pt-2">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-900 border-b border-slate-100 pb-1.5">
                            Step 2: Prescription Numbers
                        </h3>

                        <div>
                            <label for="rx_numbers" class="block text-xs font-bold text-slate-700 mb-1">
                                Rx Numbers *
                            </label>
                            <textarea name="rx_numbers" id="rx_numbers" rows="3" required
                                class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition leading-relaxed"
                                placeholder="Enter your 6- or 7-digit Rx numbers (separated by commas or on new lines). e.g.:&#10;6543210&#10;6543211&#10;Metformin 500mg">{{ old('rx_numbers') }}</textarea>
                            <span class="text-[11px] text-slate-500 mt-1 block">
                                If you don't have the Rx number handy, write the medication name or type "Refill all my active prescriptions".
                            </span>
                        </div>
                    </div>

                    <!-- Section 3: Fulfillment & Notes -->
                    <div class="space-y-3 pt-2">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-900 border-b border-slate-100 pb-1.5">
                            Step 3: Pickup &amp; Notes
                        </h3>

                        <div class="p-4 bg-[#F8FAFC] border border-[#0B2F5C]/15 rounded-2xl flex items-start gap-3">
                            <div class="w-9 h-9 rounded-xl bg-[#0B2F5C] text-white flex items-center justify-center shrink-0 text-sm">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <strong class="text-[#0B2F5C] block font-bold text-xs sm:text-sm">In-Store Pickup at 1018 Ogden Ave</strong>
                                <p class="text-slate-600 text-xs mt-0.5 leading-relaxed">
                                    Your prescription will be prepared and waiting at our counter in approximately 10–15 minutes.
                                </p>
                            </div>
                        </div>

                        <div>
                            <label for="notes" class="block text-xs font-bold text-slate-700 mb-1">
                                Special Requests / OTC Items to Add (Optional)
                            </label>
                            <textarea name="notes" id="notes" rows="2"
                                class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition leading-relaxed"
                                placeholder="e.g. 'Please package in Dis-Pill blisters' or 'Include Tylenol and children's vitamins'">{{ old('notes') }}</textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-2">
                        <button type="submit" class="w-full sm:w-auto rounded-full bg-[#C1272D] hover:bg-[#a51d22] text-white font-bold text-xs sm:text-sm px-8 py-3 inline-flex items-center justify-center gap-3 shadow-md hover:scale-105 transition cursor-pointer">
                            <span>Submit Refill Request</span>
                            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right: Rx Label Guide & Phone Callout -->
            <div class="lg:col-span-4 space-y-6">
                
                <!-- Rx Label Visual Aid Card -->
                <div class="bg-[#F8FAFC] rounded-3xl p-6 sm:p-7 border border-[#0B2F5C]/10 shadow-sm space-y-4">
                    <div class="flex items-center gap-2 text-[#0B2F5C] font-bold text-xs uppercase tracking-wider">
                        <svg class="w-4 h-4 text-[#C1272D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span>Where Is My Rx Number?</span>
                    </div>

                    <div class="p-4 bg-white rounded-2xl border border-slate-200 shadow-sm space-y-2 text-xs">
                        <div class="flex justify-between items-center text-slate-400 text-[10px] pb-1 border-b border-slate-100">
                            <span>R &amp; S PIONEER PHARMACY</span>
                            <span>(718) 538-8183</span>
                        </div>
                        <div class="flex items-center justify-between font-mono font-bold text-[#C1272D] text-sm bg-red-50 p-2 rounded-xl border border-red-100">
                            <span>Rx # 6543210</span>
                            <span class="text-[10px] uppercase font-sans font-normal text-slate-500">&larr; Your Rx #</span>
                        </div>
                        <div class="text-slate-700 font-semibold pt-1">
                            John Doe &bull; Take 1 tablet daily
                        </div>
                        <div class="text-[11px] text-slate-500">
                            Dr. Smith &bull; Refills: 3 remaining
                        </div>
                    </div>

                    <p class="text-xs text-slate-600 leading-relaxed">
                        The Rx number is typically 6 or 7 digits and appears near the top left of the prescription label on your bottle or blister card.
                    </p>
                </div>

                <!-- Fast Phone Refill Card -->
                <div class="bg-gradient-to-b from-[#0B2F5C] to-[#071E3C] text-white rounded-3xl p-6 sm:p-8 space-y-4 shadow-2xl border border-white/10">
                    <span class="inline-block bg-[#C1272D] text-white text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                        Need It Urgently?
                    </span>
                    <h3 class="text-xl sm:text-2xl font-bold font-display text-white">
                        Refill Over the Phone in 60 Seconds
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                        Prefer to speak to someone right now? Call our pharmacy staff and we will begin filling your medication immediately.
                    </p>
                    <a href="tel:7185388183" class="w-full text-center inline-flex items-center justify-center gap-2 rounded-full bg-white text-[#0B2F5C] font-bold text-xs sm:text-sm h-12 hover:bg-slate-100 transition shadow">
                        <svg class="w-4 h-4 text-[#C1272D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>Call (718) 538-8183</span>
                    </a>
                </div>

                <!-- Dis-Pill Cross Promotion -->
                <div class="bg-[#E8F0FE]/60 rounded-3xl p-5 sm:p-7 border border-[#1A4FA0]/15 text-xs sm:text-sm text-slate-600 space-y-3 shadow-sm">
                    <div class="w-9 h-9 rounded-xl bg-[#0B2F5C] text-white flex items-center justify-center font-bold text-sm">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h4 class="font-bold text-[#0B2F5C] text-sm">Tired of Multiple Pill Bottles?</h4>
                    <p class="text-slate-600 text-xs leading-relaxed">
                        Ask us to package your monthly refills into custom <strong>Dis-Pill multi-dose calendar blisters</strong> (Morning, Noon, Evening, Bedtime) at no extra charge.
                    </p>
                    <a href="{{ route('dispill') }}" class="text-xs font-bold text-[#0B2F5C] hover:text-[#C1272D] inline-flex items-center gap-1">
                        <span>Learn About Dis-Pill</span>
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
        <h3 class="text-[#E8F0FE] font-bold text-xs sm:text-sm tracking-wider uppercase">Highbridge Neighborhood Pharmacy</h3>
        <h2 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-display text-white">
            Need to Transfer Prescriptions From Another Pharmacy?
        </h2>
        <p class="max-w-2xl mx-auto text-slate-200 text-xs sm:text-base leading-relaxed">
            Switching is simple and 100% free. We contact your old pharmacy so you don't have to make any awkward calls.
        </p>
        <div class="pt-2 flex flex-col sm:flex-row justify-center items-stretch sm:items-center gap-3 sm:gap-4">
            <a href="{{ route('transfer') }}" class="rounded-full bg-white text-[#0B2F5C] font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm hover:bg-[#E8F0FE] transition shadow hover:scale-105">
                <span>Transfer ℞ to R &amp; S Pioneer</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="tel:7185388183" class="rounded-full bg-[#C1272D] hover:bg-[#a51d22] text-white font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm shadow-lg hover:shadow-xl hover:scale-105 transition-all">
                <span>Call (718) 538-8183</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>
</div>
@endsection
