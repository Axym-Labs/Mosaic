{% load static %}
<nav id="nav" class="sticky top-0">
    <div id="navbar-contents" class="border-b-2 border-black flex" style="height: 62px;">
        <div id="navbar-logo" class="w-full md:w-1/5 lg:w-1/6 2xl:w-1/12 bg-primary md:border-r-2 border-black flex justify-between md:justify-center items-center">
            <a href="/">
                <img src="{% static 'assets/logo.png' %}" alt="PROJECT_NAME" class="w-32 ml-4 md:ml-0">
            </a>
            <div id="toggle-mobile-nav" class="md:hidden">
                <button id="toggle-nav-mobile-btn" class="relative group" data-active="0" onclick="toggleNavMobile(this);">
                    <div class="relative rounded-full flex overflow-hidden items-center justify-center w-[50px] h-[50px] transform transition-all duration-200">
                        <div class="flex flex-col justify-between w-[20px] h-[18px] transform transition-all duration-300 origin-center overflow-hidden">
                            <div class="bg-black h-[2px] w-7 transform transition-all duration-300 origin-left group-focus:translate-x-10"></div>
                            <div class="bg-black h-[2px] w-7 rounded transform transition-all duration-300 group-focus:translate-x-10 delay-75"></div>
                            <div class="bg-black h-[2px] w-7 transform transition-all duration-300 origin-left group-focus:translate-x-10 delay-150"></div>
                
                            <div class="absolute items-center justify-between transform transition-all duration-500 top-2.5 -translate-x-10 group-focus:translate-x-0 flex w-0 group-focus:w-12">
                            <div class="absolute bg-black h-[2px] w-5 transform transition-all duration-500 rotate-0 delay-300 group-focus:rotate-45"></div>
                            <div class="absolute bg-black h-[2px] w-5 transform transition-all duration-500 -rotate-0 delay-300 group-focus:-rotate-45"></div>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
        <div id="navbar-links" class="bg-white backdrop-blur-md absolute md:relative md:top-0 w-full md:w-auto md:block hidden md:grow mr-2">
            <div class="flex flex-col md:flex-row justify-end h-full items-center">

                    <div id="welcome-msg" class="flex flex-col justify-center mx-4 text-b500 text-lg">
                        {$c.base.nav.welcome_msg_new }
                    </div>
                    <a id="primary-button" href="/#join-newsletter-bottom" class="rounded-xl p-2 px-4 text-b700 text-base text-white shadow-lg bg-black border-2 border-black transition duration-100 ease-in-out hover:-translate-y-1 mr-3">
                        {$c.base.nav.cta }
                    </a>
                    <a id="primary-button" href="/#join-newsletter-bottom" class="rounded-xl p-2 px-4 text-b700 text-black text-base shadow-lg bg-white border-2 border-black transition duration-100 ease-in-out hover:-translate-y-1">
                        {$c.base.nav.login }
                    </a>

            </div>
        </div>
    </div>

</nav>