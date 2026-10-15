@extends('layouts.app')

@section('title', 'Contact Us - We\'re Here to Help | R & S Pioneer Pharmacy Bronx NY')
@section('meta_description', 'Visit R & S Pioneer Pharmacy at 1018 Ogden Ave, Bronx NY 10452. Open 7 days a week. Call (718) 538-8183 for refills, free delivery, or questions.')

@section('content')
<!-- Hero Section (Goldberger Elevated Card Layout with Photo Background) -->
<div class="relative flex min-h-[auto] sm:min-h-[78vh] lg:min-h-[88vh] w-full bg-cover bg-center bg-no-repeat text-white overflow-hidden" 
     style="background-image: linear-gradient(to right, rgba(7, 30, 60, 0.92) 0%, rgba(7, 30, 60, 0.72) 55%, rgba(7, 30, 60, 0.35) 100%), url('{{ asset('images/hero-bg.jpg') }}');">
    
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 py-8 sm:py-14 lg:py-20 mt-auto w-full flex items-end justify-between relative z-10 !pb-0">
        
        <!-- Bottom Elevated Navy Glass Card -->
        <section class="w-full lg:max-w-3xl rounded-t-3xl sm:rounded-t-[2.5rem] bg-gradient-to-b from-[#0B2F5C]/95 via-[#071E3C]/95 to-[#071E3C]/98 p-6 sm:p-10 lg:p-14 border-t border-l border-r border-white/20 shadow-[0_25px_60px_-15px_rgba(0,0,0,0.6)] backdrop-blur-xl relative z-10 pb-14 sm:pb-28 lg:pb-40">
            <div class="flex flex-col gap-4 sm:gap-6">
                
                <!-- Pill Badge -->
                <div class="inline-flex items-center gap-2 bg-[#C1272D] px-3.5 py-1.5 rounded-full text-[11px] sm:text-xs font-bold uppercase tracking-wider text-white shadow-md w-fit">
                    <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
                    <span>Open 7 Days a Week &bull; Highbridge Bronx</span>
                </div>

                <!-- 2-Tone Headline -->
                <h1 class="font-display leading-[1.15] tracking-tight text-white">
                    <span class="block text-base sm:text-xl lg:text-2xl font-normal text-slate-200">Contact Us</span>
                    <span class="block text-2xl sm:text-4xl lg:text-5xl font-extrabold text-white mt-1">
                        We're Here to Help &bull; Reach Out Anytime
                    </span>
                </h1>

                <!-- Subtitle with Official Motto -->
                <p class="text-slate-200 text-xs sm:text-sm sm:leading-relaxed font-sans max-w-2xl">
                    Whether you have questions about prescription refills, Dis-Pill blister packaging, free Bronx delivery, or walk-in vaccines, we're here to help: <strong class="text-white font-semibold italic">"We're the pharmacy that cares."</strong>
                </p>

                <!-- Dual Action Buttons -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-1">
                    <a href="tel:7185388183" class="inline-flex items-center justify-center gap-2 bg-[#C1272D] hover:bg-[#a51d22] text-white px-6 py-3 rounded-full font-bold text-xs sm:text-sm shadow-xl hover:scale-105 transition-all">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>Call (718) 538-8183</span>
                    </a>
                    <a href="https://www.google.com/maps?q=1018+Ogden+Ave+Bronx+NY+10452" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-100 text-[#0B2F5C] px-6 py-3 rounded-full font-bold text-xs sm:text-sm shadow-md hover:scale-105 transition-all">
                        <span>Get Directions</span>
                        <svg class="w-3.5 h-3.5 text-[#C1272D] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </a>
                </div>

            </div>
        </section>

        <!-- Right Floating Badges (Desktop) -->
        <div class="hidden xl:flex flex-col gap-4 pb-36 z-10 max-w-xs">
            <div class="flex items-center gap-3.5 bg-white/95 backdrop-blur-md rounded-2xl p-4 shadow-2xl border border-white/30 text-slate-900">
                <div class="w-10 h-10 rounded-xl bg-[#0B2F5C] text-white flex items-center justify-center font-bold text-base shrink-0 shadow">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <div>
                    <strong class="block text-slate-900 font-bold text-xs sm:text-sm">1018 Ogden Ave</strong>
                    <span class="text-slate-600 text-[11px]">Bronx, NY 10452</span>
                </div>
            </div>
            <div class="flex items-center gap-3.5 bg-[#071E3C]/90 backdrop-blur-md rounded-2xl p-4 shadow-2xl border border-white/10 text-white">
                <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-base shrink-0">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                </div>
                <div>
                    <strong class="block text-white font-bold text-xs sm:text-sm">Se Habla Español</strong>
                    <span class="text-slate-300 text-[11px]">Bilingual Staff Daily</span>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Floating Overlapping Strip: 3 Quick Contact Cards (Goldberger Format) -->
<div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 -mt-8 sm:-mt-16 lg:-mt-28 relative z-30 mb-12 sm:mb-16">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
        
        <!-- Box 1: Call Directly -->
        <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300">
            <div class="space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-red-50 text-[#C1272D] flex items-center justify-center font-bold text-xl shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">Call By Phone</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Speak directly with Pharmacist Kunal Shah and our team for refills, transfer requests, or medication inquiries.
                </p>
                <div class="pt-1">
                    <a href="tel:7185388183" class="text-lg font-extrabold text-[#C1272D] hover:underline">(718) 538-8183</a>
                </div>
            </div>
            <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs font-bold text-[#0B2F5C]">Immediate Assistance</span>
                <div class="w-12 h-1 bg-[#C1272D] rounded-full"></div>
            </div>
        </div>

        <!-- Box 2: Visit In Person -->
        <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300">
            <div class="space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 text-[#0B2F5C] flex items-center justify-center font-bold text-xl shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">Store Address</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Conveniently located at 1018 Ogden Ave (cross of W 164th / 165th St) in Highbridge, Bronx. Open 7 days a week.
                </p>
                <div class="pt-1">
                    <a href="https://www.google.com/maps?q=1018+Ogden+Ave+Bronx+NY+10452" target="_blank" rel="noopener" class="text-xs font-bold text-[#0B2F5C] hover:underline">1018 Ogden Ave, Bronx NY &rarr;</a>
                </div>
            </div>
            <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs font-bold text-[#0B2F5C]">Open 7 Days a Week</span>
                <div class="w-12 h-1 bg-[#0B2F5C] rounded-full"></div>
            </div>
        </div>

        <!-- Box 3: Free Local Delivery -->
        <div class="h-full bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] flex flex-col justify-between hover:-translate-y-1.5 transition duration-300">
            <div class="space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold text-xl shadow-sm">
                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-[#0B2F5C] font-display">Free Local Delivery</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Can't make it to the pharmacy? We deliver all prescription medications and health supplies right to your home for free.
                </p>
                <div class="pt-1">
                    <span class="text-xs font-bold text-emerald-700">Same-Day &amp; Next-Day Service</span>
                </div>
            </div>
            <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs font-bold text-emerald-700">South Bronx Wide</span>
                <div class="w-12 h-1 bg-amber-500 rounded-full"></div>
            </div>
        </div>

    </div>
</div>

<!-- Contact Details, Map & Form Grid -->
<section class="py-12 sm:py-16 lg:py-24 bg-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10">
        
        <!-- Flash Message -->
        @if (session('success'))
            <div class="max-w-3xl mx-auto mb-8 sm:mb-10 bg-emerald-50 border-2 border-emerald-500 text-emerald-900 rounded-3xl p-5 sm:p-7 shadow-lg flex items-start gap-4">
                <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-emerald-500 text-white flex items-center justify-center shrink-0 font-bold text-lg sm:text-xl shadow">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <div>
                    <h3 class="font-extrabold text-base sm:text-lg text-emerald-900">Message Sent Successfully!</h3>
                    <p class="text-xs sm:text-sm text-emerald-800 leading-relaxed">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
            
            <!-- Left Contact Cards & Operating Hours -->
            <div class="lg:col-span-5 space-y-6">
                
                <!-- Contact Info Card -->
                <div class="bg-gradient-to-b from-[#0B2F5C] to-[#071E3C] text-white rounded-3xl p-6 sm:p-8 space-y-6 shadow-2xl border border-white/10">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-[#C1272D]">Direct Contact</span>
                        <h2 class="text-xl sm:text-3xl font-bold font-display text-white mt-1">Get In Touch</h2>
                    </div>

                    <div class="space-y-4 text-xs sm:text-sm">
                        <div class="flex items-start gap-3.5">
                            <div class="w-10 h-10 rounded-2xl bg-white/10 flex items-center justify-center text-[#C1272D] shrink-0 shadow-sm mt-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <strong class="text-white block font-semibold text-xs sm:text-sm">Store Address:</strong>
                                <span class="text-slate-300">1018 Ogden Ave, Bronx, NY 10452</span>
                                <span class="text-[11px] text-slate-400 block mt-0.5">Highbridge &bull; Cross of W 164th / 165th St</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3.5">
                            <div class="w-10 h-10 rounded-2xl bg-white/10 flex items-center justify-center text-[#C1272D] shrink-0 shadow-sm mt-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <strong class="text-white block font-semibold text-xs sm:text-sm">Phone:</strong>
                                <a href="tel:7185388183" class="text-white font-bold hover:underline text-base sm:text-lg">(718) 538-8183</a>
                                <span class="text-[11px] text-slate-400 block mt-0.5">Call to speak directly with Pharmacist Kunal</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3.5">
                            <div class="w-10 h-10 rounded-2xl bg-white/10 flex items-center justify-center text-[#C1272D] shrink-0 shadow-sm mt-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path></svg>
                            </div>
                            <div>
                                <strong class="text-white block font-semibold text-xs sm:text-sm">Bilingual Assistance:</strong>
                                <span class="text-slate-300">English &amp; Español</span>
                                <span class="text-[11px] text-slate-400 block mt-0.5">"Se habla Español para consultas y recetas"</span>
                            </div>
                        </div>
                    </div>

                    <!-- Hours Table -->
                    <div class="pt-5 border-t border-white/10 space-y-2 text-xs">
                        <div class="font-bold uppercase tracking-wider text-slate-300 mb-2">Store Operating Hours</div>
                        <div class="flex justify-between py-1 border-b border-white/5">
                            <span class="text-slate-400">Monday &ndash; Friday</span>
                            <span class="font-bold text-white">9:00 AM &ndash; 7:00 PM</span>
                        </div>
                        <div class="flex justify-between py-1 border-b border-white/5">
                            <span class="text-slate-400">Saturday</span>
                            <span class="font-bold text-white">10:00 AM &ndash; 6:00 PM</span>
                        </div>
                        <div class="flex justify-between py-1">
                            <span class="text-slate-400">Sunday</span>
                            <span class="font-bold text-white">10:00 AM &ndash; 3:00 PM</span>
                        </div>
                    </div>
                </div>

                <!-- Google Verified Reviews Strip -->
                <div class="bg-[#F8FAFC] rounded-3xl p-5 sm:p-6 border border-[#0B2F5C]/10 shadow-sm flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3">
                    <div>
                        <div class="flex items-center gap-1.5 text-amber-500 font-extrabold text-base sm:text-lg">
                            <svg class="w-5 h-5 fill-current text-amber-400" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <span>4.5</span>
                            <span class="text-xs text-slate-500 font-semibold">(Google Reviews)</span>
                        </div>
                        <div class="text-xs text-slate-600 mt-0.5">Read reviews from our Highbridge Bronx neighbors</div>
                    </div>
                    <a href="https://www.google.com/maps?q=1018+Ogden+Ave+Bronx+NY+10452" target="_blank" rel="noopener" class="text-xs font-bold text-[#0B2F5C] hover:text-[#C1272D] hover:underline">
                        View on Maps &rarr;
                    </a>
                </div>

                <!-- Store Photo Card -->
                <div class="rounded-3xl overflow-hidden shadow-xl border border-slate-200 group">
                    <img src="{{ asset('images/hero-bg.jpg') }}" alt="R & S Pioneer Pharmacy Store Interior" class="w-full h-48 sm:h-56 object-cover group-hover:scale-105 transition duration-500">
                </div>

            </div>

            <!-- Right: Contact Inquiry Form & Map -->
            <div class="lg:col-span-7 space-y-6 sm:space-y-8">
                
                <!-- Contact Form Card -->
                <div style="box-shadow: 0 10px 30px rgba(11,47,92,0.08)" class="bg-white rounded-3xl border border-slate-100 p-5 sm:p-9 lg:p-12 space-y-6 sm:space-y-7">
                    <div>
                        <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#C1272D]">Ask a Pharmacist</span>
                        <h2 class="text-xl sm:text-3xl font-bold font-display text-slate-900 mt-1">Send Us a Message</h2>
                        <p class="text-xs sm:text-sm text-slate-500 mt-1 leading-relaxed">
                            Have a question about medication availability, prior authorizations, delivery, or general wellness? Fill in your details below.
                        </p>
                    </div>

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-4 sm:space-y-5">
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="name" class="block text-xs font-bold text-slate-700 mb-1.5">Your Full Name *</label>
                                <input type="text" name="name" id="name" required value="{{ old('name') }}"
                                    class="w-full px-3.5 py-3 rounded-2xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-base sm:text-sm transition"
                                    placeholder="Your Name">
                            </div>
                            <div>
                                <label for="phone" class="block text-xs font-bold text-slate-700 mb-1.5">Phone Number *</label>
                                <input type="tel" name="phone" id="phone" required value="{{ old('phone') }}"
                                    class="w-full px-3.5 py-3 rounded-2xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-base sm:text-sm transition"
                                    placeholder="(718) 555-0123">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="email" class="block text-xs font-bold text-slate-700 mb-1.5">Email Address (Optional)</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                    class="w-full px-3.5 py-3 rounded-2xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-base sm:text-sm transition"
                                    placeholder="you@example.com">
                            </div>
                            <div>
                                <label for="subject" class="block text-xs font-bold text-slate-700 mb-1.5">Inquiry Subject</label>
                                <select name="subject" id="subject"
                                    class="w-full px-3.5 py-3 rounded-2xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-base sm:text-sm transition bg-white">
                                    <option value="General Question">General Question</option>
                                    <option value="Prescription Refill / Transfer">Prescription Refill / Transfer</option>
                                    <option value="Dis-Pill Blister Packaging">Dis-Pill Blister Packaging</option>
                                    <option value="Walk-In Vaccination Inquiry">Walk-In Vaccination Inquiry</option>
                                    <option value="Free Local Delivery Request">Free Local Delivery Request</option>
                                    <option value="DMV Exam / Passport Photo / Notary">DMV Exam / Passport Photo / Notary</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-xs font-bold text-slate-700 mb-1.5">Your Message or Question *</label>
                            <textarea name="message" id="message" rows="4" required
                                class="w-full px-3.5 py-3 rounded-2xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-base sm:text-sm transition leading-relaxed"
                                placeholder="How can our pharmacy team assist you today?">{{ old('message') }}</textarea>
                        </div>

                        <div class="pt-2">
                            <button type="submit" class="w-full sm:w-auto rounded-full bg-[#0B2F5C] hover:bg-[#071E3C] text-white font-bold text-xs sm:text-sm px-8 py-3.5 inline-flex items-center justify-center gap-3 shadow-md hover:scale-105 transition cursor-pointer">
                                <span>Send Message to Pharmacist</span>
                                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Google Map Preview Card -->
                <div style="box-shadow: 0 10px 30px rgba(11,47,92,0.08)" class="bg-white rounded-3xl p-5 sm:p-7 border border-slate-100 space-y-4">
                    <div class="flex items-center justify-between">
                        <h3 class="font-bold text-slate-900 text-xs sm:text-sm uppercase tracking-wider">Store Location Map</h3>
                        <a href="https://www.google.com/maps?q=1018+Ogden+Ave+Bronx+NY+10452" target="_blank" rel="noopener" class="text-xs text-[#0B2F5C] font-bold hover:text-[#C1272D] hover:underline">
                            Open in Google Maps &rarr;
                        </a>
                    </div>
                    <div class="rounded-2xl overflow-hidden h-60 sm:h-72 border border-slate-200">
                        <iframe 
                            title="R & S Pioneer Pharmacy Location Map"
                            src="https://maps.google.com/maps?q=1018+Ogden+Ave,+Bronx,+NY+10452&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                            width="100%" 
                            height="100%" 
                            class="w-full h-full border-0" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- Bottom Full Navy CTA Banner (Goldberger Style) -->
<div class="flex w-full bg-[#0B2F5C] py-12 sm:py-16 lg:py-24 text-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 text-center space-y-5 sm:space-y-6">
        <h3 class="text-[#E8F0FE] font-bold text-xs sm:text-sm tracking-wider uppercase">Open 7 Days A Week</h3>
        <h2 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-display text-white">
            Visit R &amp; S Pioneer Pharmacy in Highbridge
        </h2>
        <p class="max-w-2xl mx-auto text-slate-200 text-xs sm:text-base leading-relaxed">
            1018 Ogden Ave, Bronx NY 10452 &bull; Call (718) 538-8183 for refills, free delivery, or questions.
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
