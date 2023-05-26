<header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a href="{{ route('index') }}" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
          <span class="ml-3 text-xl">Main page</span>
        </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a href="{{ route('adminPanel.home') }}" class="mr-5 hover:text-gray-900">Client</a>
        <a href="{{ route('adminPanel.showTrainer') }}" class="mr-5 hover:text-gray-900">Trainer</a>
        <a href="{{ route('adminPanel.showReceptionists') }}" class="mr-5 hover:text-gray-900">Receptionists</a>
  
      </nav>
      <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0" href="{{ route('logout') }}"
      onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
      </button>
    </div>
  </header>