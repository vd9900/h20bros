   <!-- Callback-form section -->
   <section class="bg-lightgreen">
       <div class="container mx-auto text-white row align-items-center p-0 py-3 gap-2 gap-lg-0">
           <!-- title -->
           <div class="col-12 col-lg-6">
               <h3 class="text-lightgreen-1">
                   Request House Cleaning Now!
               </h3>
           </div>
           <!-- callback-form -->
           <form method="POST" action="{{ route('callback_item') }}" class="col-12 col-lg-6 row gap-2 mx-auto">
               @csrf
               <input type="text" name="phone" class="py-2 rounded-1 col-4" placeholder="Phone number" />
               <input type="text" name="item" class="py-2 col-4  rounded-2" placeholder="Item to Clean" />
               <button type="submit" class="py-2 col-xl-3  col-3 rounded-2 bg-blue text-white ">
                   Request
               </button>
           </form>
       </div>
   </section>
