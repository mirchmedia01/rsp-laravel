@extends('layouts.app')

@section('title', 'Transfer Prescriptions - Effortless & Personalized Care | R & S Pioneer Pharmacy')
@section('meta_description', 'Transfer your prescriptions to R & S Pioneer Pharmacy in Highbridge, Bronx. We coordinate with your previous pharmacy and doctor for fast in-store pickup.')

@section('content')
<!-- Hero Section (Clear Glass Card Layout with Fully Visible Background Image) -->
<div class="relative flex min-h-[auto] sm:min-h-[440px] lg:min-h-[480px] w-full bg-cover bg-center bg-no-repeat text-white overflow-hidden" 
     style="background-image: linear-gradient(to right, rgba(11, 47, 92, 0.35) 0%, rgba(11, 47, 92, 0.15) 50%, rgba(7, 30, 60, 0.10) 100%), url('{{ asset('images/refill-your-rx.jpg') }}');">
    
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 pt-6 sm:pt-10 lg:pt-14 pb-8 sm:pb-12 lg:pb-16 mt-auto w-full flex flex-col lg:flex-row items-end justify-between gap-8 lg:gap-12 relative z-10 !pb-0">
        
        <!-- Left: Bottom Elevated Navy Glass Card (Background Image 100% Visible) -->
        <section class="w-full lg:max-w-3xl rounded-t-3xl sm:rounded-t-[2.5rem] bg-gradient-to-b from-[#0B2F5C]/25 via-[#0D3B74]/20 to-[#07254E]/25 p-6 sm:p-10 lg:p-12 border-t border-l border-r border-white/25 shadow-2xl relative z-10 pb-10 sm:pb-16 lg:pb-20">
            <div class="flex flex-col gap-4 sm:gap-6">
                
                <!-- Pill Badge -->
                <div class="inline-flex items-center gap-2 bg-[#C1272D] px-3.5 py-1.5 rounded-full text-[11px] sm:text-xs font-bold uppercase tracking-wider text-white shadow-md w-fit">
                    <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
                    <span>Simple 3-Step Transfer &bull; 100% Free</span>
                </div>

                <!-- 2-Tone Headline -->
                <h1 class="font-display leading-[1.15] tracking-tight text-white drop-shadow-[0_2px_8px_rgba(0,0,0,0.7)]">
                    <span class="block text-base sm:text-xl lg:text-2xl font-normal text-slate-100">Prescription Transfers</span>
                    <span class="block text-3xl sm:text-5xl lg:text-6xl font-extrabold text-white mt-1">
                        Effortless Prescription Transfers, Personalized Care
                    </span>
                </h1>

                <!-- Subtitle with Official Motto -->
                <p class="text-white text-sm sm:text-base sm:leading-relaxed font-sans max-w-2xl drop-shadow-[0_1px_4px_rgba(0,0,0,0.8)] font-medium">
                    Switching to our pharmacy is simple and stress-free. Move your prescriptions to start enjoying personalized care without any hassle: <strong class="text-white font-semibold italic">"We're the pharmacy that cares."</strong>
                </p>

                <!-- Dual Action Buttons -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-1">
                    <a href="tel:7185388183" class="inline-flex items-center justify-center gap-2 bg-[#C1272D] hover:bg-[#a51d22] text-white px-6 py-3 rounded-full font-bold text-xs sm:text-sm shadow-xl hover:scale-105 transition-all">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>Transfer by Phone: (718) 538-8183</span>
                    </a>
                    <a href="#transfer-form" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-100 text-[#0B2F5C] px-6 py-3 rounded-full font-bold text-xs sm:text-sm shadow-md hover:scale-105 transition-all">
                        <span>Fill Online Form Below</span>
                        <svg class="w-3.5 h-3.5 text-[#C1272D] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                </div>

            </div>
        </section>

        <!-- Right Floating Badges (Desktop) -->
        <div class="hidden xl:flex flex-col gap-4 pb-4 lg:pb-8 z-10 max-w-xs ml-auto">
            <div class="flex items-center gap-3.5 bg-white/95 backdrop-blur-md rounded-2xl p-4 shadow-2xl border border-white/30 text-slate-900">
                <div class="w-10 h-10 rounded-xl bg-[#0B2F5C] text-white flex items-center justify-center font-bold text-base shrink-0 shadow">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <div>
                    <strong class="block text-slate-900 font-bold text-xs sm:text-sm">We Call Your Old Pharmacy</strong>
                    <span class="text-slate-600 text-[11px]">No awkward calls for you</span>
                </div>
            </div>
            <div class="flex items-center gap-3.5 bg-[#071E3C]/90 backdrop-blur-md rounded-2xl p-4 shadow-2xl border border-white/10 text-white">
                <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-base shrink-0">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div>
                    <strong class="block text-white font-bold text-xs sm:text-sm">Ready When You Need</strong>
                    <span class="text-slate-300 text-[11px]">1018 Ogden Ave, Bronx</span>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Floating Overlapping Strip: 3 Benefits of Transferring (Goldberger Format) -->
<div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 -mt-6 sm:-mt-10 lg:-mt-14 relative z-30 mb-8 sm:mb-10">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 sm:gap-6">
        
        <!-- Box 1 -->
        <div class="h-full bg-white rounded-2xl p-5 sm:p-6 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] flex flex-col justify-between hover:-translate-y-1 transition duration-300">
            <div class="space-y-2.5">
                <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#0B2F5C] flex items-center justify-center font-bold text-base shadow-sm">
                    <svg class="w-5 h-5 text-[#0B2F5C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">We Handle the Calls</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    You don't need to call Walgreens, CVS, or Rite Aid. Our licensed staff will contact them directly to coordinate the immediate transfer of your prescription records.
                </p>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs font-bold text-[#0B2F5C]">Zero Work For You</span>
                <div class="w-12 h-1 bg-[#0B2F5C] rounded-full"></div>
            </div>
        </div>

        <!-- Box 2 -->
        <div class="h-full bg-white rounded-2xl p-5 sm:p-6 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] flex flex-col justify-between hover:-translate-y-1 transition duration-300">
            <div class="space-y-2.5">
                <div class="w-10 h-10 rounded-xl bg-red-50 text-[#C1272D] flex items-center justify-center font-bold text-base shadow-sm">
                    <svg class="w-5 h-5 text-[#C1272D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">No Disruption in Care</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    We synchronize your transfer timing so you never run out of vital daily maintenance medications or skip a single scheduled dose during the switch.
                </p>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs font-bold text-[#C1272D]">Seamless Transition</span>
                <div class="w-12 h-1 bg-[#C1272D] rounded-full"></div>
            </div>
        </div>

        <!-- Box 3 -->
        <div class="h-full bg-white rounded-2xl p-5 sm:p-6 border border-slate-100 shadow-[0_10px_30px_rgba(11,47,92,0.06)] flex flex-col justify-between hover:-translate-y-1 transition duration-300">
            <div class="space-y-2.5">
                <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold text-base shadow-sm">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">Custom Dis-Pill Option</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Have your transferred prescriptions organized into monthly calendar blister packs, or packaged for prompt pickup at 1018 Ogden Ave.
                </p>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs font-bold text-[#0B2F5C]">Personalized Packaging</span>
                <div class="w-12 h-1 bg-amber-500 rounded-full"></div>
            </div>
        </div>

    </div>
</div>

<!-- Main Transfer Form & Process Section -->
<section id="transfer-form" class="py-8 sm:py-12 lg:py-16 bg-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10">
        
        <!-- Flash Success Notification -->
        @if (session('success'))
            <div class="max-w-3xl mx-auto mb-8 sm:mb-10 bg-emerald-50 border-2 border-emerald-500 text-emerald-900 rounded-3xl p-5 sm:p-7 shadow-lg flex items-start gap-4">
                <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-emerald-500 text-white flex items-center justify-center shrink-0 font-bold text-lg sm:text-xl shadow">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <div class="space-y-1">
                    <h3 class="font-extrabold text-base sm:text-lg text-emerald-900">Prescription Transfer Request Received!</h3>
                    <p class="text-xs sm:text-sm text-emerald-800 leading-relaxed">{{ session('success') }}</p>
                    <p class="text-xs text-emerald-700 font-semibold pt-1">If you have urgent questions, please feel free to call our pharmacy team at (718) 538-8183.</p>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
            
            <!-- Left: Transfer Form Card -->
            <div style="box-shadow: 0 10px 30px rgba(11,47,92,0.08)" class="lg:col-span-8 bg-white rounded-3xl border border-slate-100 p-5 sm:p-8 space-y-5">
                <div>
                    <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#C1272D]">Quick &amp; Confidential</span>
                    <h2 class="text-xl sm:text-2xl font-bold font-display text-slate-900 mt-1">
                        Patient &amp; Prescription Transfer Details
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-500 mt-1 leading-relaxed">
                        Please provide your details below. Your personal medical information is strictly protected and HIPAA compliant.
                    </p>
                </div>

                <!-- Validation Errors Alert -->
                @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 text-red-800 rounded-xl p-3.5 sm:p-4 text-xs sm:text-sm space-y-1">
                        <strong class="font-bold block">Please review the form:</strong>
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('transfer.store') }}" method="POST" class="space-y-5">
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

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                            <div>
                                <label for="email" class="block text-xs font-bold text-slate-700 mb-1">Email Address (Optional)</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                    class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition"
                                    placeholder="maria@example.com">
                            </div>
                            <div>
                                <label for="address" class="block text-xs font-bold text-slate-700 mb-1">Street Address (Optional)</label>
                                <input type="text" name="address" id="address" value="{{ old('address') }}"
                                    class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition"
                                    placeholder="e.g. 1020 Ogden Ave, Apt 4B">
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: Current Pharmacy Details -->
                    <div class="space-y-3 pt-2">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-900 border-b border-slate-100 pb-1.5">
                            Step 2: Current Pharmacy Information
                        </h3>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                            <div>
                                <label for="current_pharmacy_name" class="block text-xs font-bold text-slate-700 mb-1">Current Pharmacy Name *</label>
                                <input type="text" name="current_pharmacy_name" id="current_pharmacy_name" required value="{{ old('current_pharmacy_name') }}"
                                    class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition"
                                    placeholder="e.g. Walgreens, CVS, or Rite Aid">
                            </div>
                            <div>
                                <label for="current_pharmacy_phone" class="block text-xs font-bold text-slate-700 mb-1">Current Pharmacy Phone (If known)</label>
                                <input type="tel" name="current_pharmacy_phone" id="current_pharmacy_phone" value="{{ old('current_pharmacy_phone') }}"
                                    class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition"
                                    placeholder="(718) 000-0000">
                            </div>
                        </div>
                    </div>

                    <!-- Section 3: Medication / Rx List -->
                    <div class="space-y-3 pt-2">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-900 border-b border-slate-100 pb-1.5">
                            Step 3: Medications to Transfer
                        </h3>

                        <div>
                            <label for="medications_or_rx_numbers" class="block text-xs font-bold text-slate-700 mb-1">
                                Rx Numbers or Medication Names *
                            </label>
                            <textarea name="medications_or_rx_numbers" id="medications_or_rx_numbers" rows="3" required
                                class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition leading-relaxed"
                                placeholder="Please list the names of your medications or the Rx numbers printed on your prescription bottles. (Or type 'Transfer all active medications')">{{ old('medications_or_rx_numbers') }}</textarea>
                            <span class="text-[11px] text-slate-500 mt-1 block">You can also write "Transfer all my active prescriptions".</span>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                            <div>
                                <label for="doctor_name" class="block text-xs font-bold text-slate-700 mb-1">Prescribing Doctor's Name (Optional)</label>
                                <input type="text" name="doctor_name" id="doctor_name" value="{{ old('doctor_name') }}"
                                    class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition"
                                    placeholder="Dr. Smith">
                            </div>
                            <div>
                                <label for="insurance_name" class="block text-xs font-bold text-slate-700 mb-1">Insurance / Medicaid Plan Name (Optional)</label>
                                <input type="text" name="insurance_name" id="insurance_name" value="{{ old('insurance_name') }}"
                                    class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition"
                                    placeholder="e.g. Fidelis, Healthfirst, MetroPlus, Medicare">
                            </div>
                        </div>

                        <div>
                            <label for="special_notes" class="block text-xs font-bold text-slate-700 mb-1">
                                Special Requests or Packaging Needs (Optional)
                            </label>
                            <textarea name="special_notes" id="special_notes" rows="2"
                                class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition leading-relaxed"
                                placeholder="e.g., 'Please package into Dis-Pill blister packs' or 'Call me when ready for pickup'">{{ old('special_notes') }}</textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-2">
                        <button type="submit" class="w-full sm:w-auto rounded-full bg-[#C1272D] hover:bg-[#a51d22] text-white font-bold text-xs sm:text-sm px-8 py-3 inline-flex items-center justify-center gap-3 shadow-md hover:scale-105 transition cursor-pointer">
                            <span>Submit Prescription Transfer Request</span>
                            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right: Why Transfer to Us & Quick Call Box -->
            <div class="lg:col-span-4 space-y-6">
                
                <!-- Medication Image Card -->
                <div class="rounded-3xl overflow-hidden shadow-xl border border-slate-200 group">
                    <img src="{{ asset('images/refill-your-rx.jpg') }}" alt="Prescription Medication Refill" class="w-full h-48 sm:h-56 object-cover group-hover:scale-105 transition duration-500">
                </div>

                <!-- Quick Phone Callout Card -->
                <div class="bg-gradient-to-b from-[#0B2F5C] to-[#071E3C] text-white rounded-3xl p-6 sm:p-8 space-y-4 shadow-2xl border border-white/10">
                    <span class="inline-block bg-[#C1272D] text-white text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                        Prefer Phone?
                    </span>
                    <h3 class="text-xl sm:text-2xl font-bold font-display text-white">
                        Transfer in 60 Seconds by Phone
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                        Don't want to type? Just call us directly. Give our staff your prescription bottle info or previous pharmacy name over the phone.
                    </p>
                    <a href="tel:7185388183" class="w-full text-center inline-flex items-center justify-center gap-2 rounded-full bg-white text-[#0B2F5C] font-bold text-xs sm:text-sm h-12 hover:bg-slate-100 transition shadow">
                        <svg class="w-4 h-4 text-[#C1272D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>Call (718) 538-8183</span>
                    </a>
                </div>

                <!-- What Happens Next Box -->
                <div class="bg-[#F8FAFC] rounded-3xl p-6 sm:p-8 border border-[#0B2F5C]/10 shadow-sm space-y-4">
                    <h3 class="font-bold text-[#0B2F5C] text-xs sm:text-sm uppercase tracking-wider">What Happens Next?</h3>
                    
                    <div class="space-y-3.5 text-xs sm:text-sm text-slate-600">
                        <div class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-[#0B2F5C] text-white font-bold text-xs flex items-center justify-center shrink-0 mt-0.5">1</span>
                            <p><strong>We Call Your Old Pharmacy:</strong> You don't need to speak with them or cancel anything.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-[#0B2F5C] text-white font-bold text-xs flex items-center justify-center shrink-0 mt-0.5">2</span>
                            <p><strong>We Verify Your Insurance:</strong> We ensure maximum coverage, apply coupons, and verify $0 copays.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-[#0B2F5C] text-white font-bold text-xs flex items-center justify-center shrink-0 mt-0.5">3</span>
                            <p><strong>Fast Counter Pickup:</strong> We call or text you as soon as your medications are packaged and ready at 1018 Ogden Ave.</p>
                        </div>
                    </div>
                </div>

                <!-- Insurance Acceptance Note -->
                <div class="bg-[#E8F0FE]/60 rounded-3xl p-5 sm:p-7 border border-[#1A4FA0]/15 text-xs sm:text-sm text-slate-600 space-y-2 shadow-sm">
                    <h4 class="font-bold text-[#0B2F5C] text-xs sm:text-sm">All Major Insurances Accepted</h4>
                    <p class="text-slate-600 text-xs leading-relaxed">
                        Medicaid, Medicare Part D, EmblemHealth, Fidelis Care, Healthfirst, MetroPlus, UnitedHealthcare, Blue Cross Blue Shield, Aetna, Cigna, and more.
                    </p>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- Bottom Full Navy CTA Banner (Goldberger Style) -->
<div class="flex w-full bg-[#0B2F5C] py-12 sm:py-16 lg:py-24 text-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 text-center space-y-5 sm:space-y-6">
        <h3 class="text-[#E8F0FE] font-bold text-xs sm:text-sm tracking-wider uppercase">Join Our Pharmacy Family Today</h3>
        <h2 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-display text-white">
            Ready to Switch to Personalized Care?
        </h2>
        <p class="max-w-2xl mx-auto text-slate-200 text-xs sm:text-base leading-relaxed">
            Stop by 1018 Ogden Ave or call (718) 538-8183. We take care of everything so you can experience healthcare that truly puts you first.
        </p>
        <div class="pt-2 flex flex-col sm:flex-row justify-center items-stretch sm:items-center gap-3 sm:gap-4">
            <a href="tel:7185388183" class="rounded-full bg-white text-[#0B2F5C] font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm hover:bg-[#E8F0FE] transition shadow hover:scale-105">
                <span>Call (718) 538-8183</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="{{ route('services') }}" class="rounded-full bg-[#C1272D] hover:bg-[#a51d22] text-white font-bold px-8 h-12 inline-flex items-center justify-center gap-3 text-sm shadow-lg hover:shadow-xl hover:scale-105 transition-all">
                <span>Explore All Services</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>
</div>
@endsection
