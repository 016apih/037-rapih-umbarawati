<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
   <nav class="navbar bg-light navbar-light">
         <a href="{{ route('homepage') }}" target="_blank" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">
               <i class="fa fa-hashtag"></i>
               PemulaBooks
            </h3>
         </a>
         <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
               <img class="rounded-circle" src="{{ asset('./assets/img/avatar.jpg') }}" alt="" style="width: 40px; height: 40px;">
               <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
               <h6 class="mb-0">
                  @if (session()->get('username'))
                     {{ session()->get('username') }}
                  @endif
               </h6>
               <span>
                  @if (session()->get('role'))
                     {{ session()->get('role') }}
                  @endif
               </span>
            </div>
         </div>
         <div class="navbar-nav w-100">
            @if (session()->get('role'))
               @if(session()->get('role') == 'admin')
                  <x-item-sidebar :item='["admin.dashboard", "fa fa-tachometer-alt", "Dashboard"]' />
                  {{-- <x-item-sidebar :item='["admin.roles", "fas fa-user-cog", "Roles"]' /> --}}
                  <x-item-sidebar :item='["admin.users", "fas fa-users", "Users"]' />
                  <x-item-sidebar :item='["admin.books", "fas fa-book", "Books"]' />
                  <x-item-sidebar :item='["admin.loans", "fas fa-exchange-alt", "Loans"]' />
   
                  @else
                  <i class=""></i>
                     <x-item-sidebar :item='["member.profile", "fas fa-user-cog", "My Profile"]' />
                     <x-item-sidebar :item='["member.activity", "fas fa-clipboard-list", "Loan Activity"]' />
                     <x-item-sidebar :item='["member.loans", "fas fa-users", "Form Loan"]' />
               @endif
            @endif
      
         </div>
   </nav>
</div>
<!-- Sidebar End -->
